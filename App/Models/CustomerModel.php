<?php
class CustomerModel extends BaseModel
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
    public function addCustomer($data)
    {
        $this->InsertDataInto($data, 'useraccount');
    }
 //hàm lấy hàng cần edit
 public function getrowedit($id)
 {
    $sql = "SELECT * FROM useraccount WHERE id = $id";
    $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
     if (empty($result))
         return false;
     return $result;
 }
    public function deleteCustomer($id)
    {
        $this->DeleteFromTableById('useraccount', $id);
    }
    public function editCustomer($id, $data)
    {
        $this->UpdateTableDataById('useraccount', $data, $id);
    }
    public function GetAllCustomer()
    {
        $sql = "SELECT * FROM useraccount WHERE role = 2";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if(empty($result))
            return false;
        return $result;
    }

}
?>