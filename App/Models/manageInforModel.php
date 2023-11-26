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
        $sql = "SELECT * FROM useraccount";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        return $result;
    }
    
}