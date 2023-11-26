<?php
class AdvertisementModel extends BaseModel
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
    public function getUserAds(){
        $id = SessionManager::GetSession(SessionManager::USER_ACCOUNT)['id'];

        $sql = "SELECT a.*,s.statusTitle FROM advertisement a JOIN adsstatus s ON a.statusAds = s.id where a.adsFrom = '$id'";
        return $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function createInvoice($data){
        $this->InsertDataInto($data,'adsinvoice');
    }
    public function up($data){
        $this->InsertDataInto($data,'advertisement');
    }
    public function getInvoice($id){
        $sql = "SELECT * FROM `adsinvoice` where adsId = '$id' and paymentStatus = 1";
        return $this->execute($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function updateStatus($invoice,$idI,$ads,$idA){
        $this->UpdateTableDataById('adsinvoice',$invoice,$idI);
        $this->UpdateTableDataById('advertisement',$ads,$idA);
    }
    public function getInvoiceById($id){
        $sql = "SELECT * FROM `adsinvoice` where id = '$id'";
        return $this->execute($sql)->fetch(PDO::FETCH_ASSOC);
    }
}