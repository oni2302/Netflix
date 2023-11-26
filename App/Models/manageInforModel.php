<?php
class manageInforModel extends BaseModel
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
    public function editInfo($id,$data){
        $this->UpdateTableDataById('useraccount', $data, $id);
    }
    public function getInfor(){
        $id = SessionManager::GetSession(SessionManager::USER_ACCOUNT)['id'];
        $sql = "SELECT * from useraccount where id='$id'";
        return $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
}