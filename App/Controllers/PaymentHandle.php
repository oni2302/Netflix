<?php
class PaymentHandle extends BaseController
{
    const vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    const vnp_TmnCode = "G421CTS3"; //Mã website tại VNPAY 
    const vnp_HashSecret = "QBEBZUMOAJNSGCUPTMGQEHBTFRGJREOI"; //Chuỗi bí mật
    public function Purchased()
    {
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, PaymentHandle::vnp_HashSecret);
        if ($secureHash == $vnp_SecureHash) {
            if ($_GET['vnp_ResponseCode'] == '00') {
                SessionManager::SetSession('status',true);
                header('location:'.SessionManager::GetSession('callbackUrl'));
            } else {
                SessionManager::SetSession('status',false);
                echo "<span style='color:red'>Giao dịch không thành công</span>";
                sleep(3);
                header('location:'.SessionManager::GetSession('callbackUrl'));
            }
        } else {
            echo "<span style='color:red'>Chu ky khong hop le</span>";
        }
    }
}
