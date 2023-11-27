<?php
class historyModel extends BaseModel
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
    public function getHistory(){
        $id = SessionManager::GetSession(SessionManager::USER_ACCOUNT)['id'];
        $sql = "SELECT * from purchasehistory where idUser= '$id'";
        return $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
}