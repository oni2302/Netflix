<?php
class AdsModel extends BaseModel
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
    public function addAds($data)
    {
        $this->InsertDataInto($data, 'advertisement');
    }
    public function deleteAds($id)
    {
        $this->DeleteFromTableById('advertisement', $id);
    }
    public function editVoucher($id, $data)
    {
        $this->UpdateTableDataById('advertisement', $data, $id);
    }
    public function getAllAds()
    {
       return $this->SelectAllFrom('advertisement');
    }
   
}