<?php
class Payment
{

    const vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    const vnp_Returnurl = _WEB."/PaymentHandle/Purchased";
    const vnp_TmnCode = "G421CTS3"; //Mã website tại VNPAY 
    const vnp_HashSecret = "QBEBZUMOAJNSGCUPTMGQEHBTFRGJREOI"; //Chuỗi bí mật

    public static function Purchase($id, $total, $isRedirect)
    {
        $id.='_'.rand(1,10000);
        $vnp_TxnRef = $id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_Amount = $total * 100;
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $expireDate = date('YmdHis', strtotime('+15 minute'));
        //Add Params of 2.0.1 Version
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => Payment::vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => 'vn',
            "vnp_OrderInfo" => "thanh toan vn pay",
            "vnp_OrderType" => 'other',
            "vnp_ReturnUrl" => Payment::vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $expireDate
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = Payment::vnp_Url . "?" . $query;
        $vnpSecureHash =   hash_hmac('sha512', $hashdata, Payment::vnp_HashSecret); //  
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if ($isRedirect) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }
}
