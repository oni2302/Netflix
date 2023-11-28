<?php
class serviceModel extends BaseModel
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
    public function getService(){
        $id = SessionManager::GetSession(SessionManager::USER_ACCOUNT)['id'];
        $sql = "SELECT a.* FROM service a JOIN useraccount s ON a.id = s.currentService where s.id=$id";
        return $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
}