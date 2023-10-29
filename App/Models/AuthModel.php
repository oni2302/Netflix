<?php
class AuthModel extends BaseModel
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
    public function checkRole($id):string{
        $sql = "SELECT * FROM `userrole` where id = '$id'";
        $role = $this->execute($sql)->fetch(PDO::FETCH_ASSOC);
        if(empty($role)){
            return '';
        }else{
            return $role['roleName'];
        }
    }
    public function getAccount($data){
        $sql = "SELECT * FROM `useraccount` WHERE username='".$data['username']."' AND pass = '".$data['pass']."'";
        return $this->execute($sql)->fetch(PDO::FETCH_ASSOC);
    }
}