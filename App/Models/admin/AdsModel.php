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
    public function updateAds($id, $data)
    {
        $this->UpdateTableDataById('advertisement', $data, $id);
    }
    public function getAllAds()
    {
        $sql = "SELECT a.*,s.statusTitle FROM advertisement a JOIN adsstatus s ON a.statusAds = s.id";
        return $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
