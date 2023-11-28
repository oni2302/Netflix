<?php
class HomeModel extends BaseModel
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
    public function getAllService(){
        $sql="call getAllService()";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($result)){
            return $result;
        }
        return [];
    }
    public function purchase($id){
        SessionManager::SetSession('callbackUrl', _WEB . '/ads/Advertisement/purchased');
        SessionManager::SetSession('purchaseFor', $id);
        Payment::Purchase($id,$id , true);
    }
    public function purchased(){
        
    }
}
