<?php
class VoucherModel extends BaseModel
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
    public function addVoucher($data)
    {
        extract($data);
        $sql = "INSERT INTO voucher (name, discount, remaining, startdate, enddate, specificfor, createdate)
            VALUES ('$name', '$discount', '$remaining', '$startDate', '$endDate', '$specificFor', '$createDate')";
        $this->execute($sql);
        
    }

    public function deleteVoucher($id)
    {   
        $sql = "DELETE FROM voucher WHERE id = $id";
        $this->execute($sql); 
    }
    public function editVoucher($id ,$data)
    {
        extract($data);
        $sql = "UPDATE voucher(name, discount, remaining, startdate, enddate, specificfor, createdate) SET  
        VALUES ('$name', '$discount', '$remaining', '$startDate', '$endDate', '$specificFor', '$createDate') 
        Where id = $id";
        $this-> execute($sql);
    }
    public function getAllVoucher(){
        $sql = "SELECT * FROM `voucher`";
        // fetchall để nó in
        // execute chỉ để cho nó thực thị cacsi câu querry này thui
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if(empty($result))
            return false;
        return $result;
    }         
}