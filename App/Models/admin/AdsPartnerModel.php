<?php
class AdsPartnerModel extends BaseModel
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
    public function addAdsPartner($data)
    {
        $data['role'] = 3;
        $this->InsertDataInto($data, 'useraccount');
    }
    //hàm lấy hàng cần edit
    public function getrowedit($id)
    {
        $sql = "SELECT * FROM useraccount WHERE `id` = $id and `role`=3 ";
        $result = $this->execute($sql)->fetch(PDO::FETCH_ASSOC);
        if (empty($result))
            return [];
        return $result;
    }
    public function deleteAdsPartner($id)
    {
        $this->DeleteFromTableById('useraccount', $id);
    }
    public function EditPartner($id, $data)
    {
        $this->UpdateTableDataById('useraccount', $data, $id);
    }
    public function GetAllAdsPartner()
    {
        $sql = "SELECT * FROM `useraccount` WHERE role = 3";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return [];
        return $result;
    }
   
}