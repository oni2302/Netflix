<?php
class VoucherModel extends BaseModel
{
    function tableFill()
    {
    }
    function fieldFill()
    {
    }
    public function __construct()
    {
        parent::__construct();
    }
    public function addVoucher($data)
    {
        $this->InsertDataInto($data, 'voucher');
    }

    public function deleteVoucher($id)
    {
        $this->DeleteFromTableById('voucher', $id);
    }
    public function editVoucher($id, $data)
    {
        $this->UpdateTableDataById('voucher', $data, $id);
    }
    public function getAllVoucher()
    {
       return $this->SelectAllFrom('voucher');
    }
}
