<?php
class ServiceModel extends BaseModel{
    public int $id;
    public string $name;
    public float $price;
    public DateTime $createDate;
    public int $maxResolution;
    public bool $haveAds;
    public bool $haveHistory;
    public int $duration;

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

    //Lấy danh sách các gói dịch vụ

    public function getAllServicePackages(){
        $sql = "SELECT * FROM `service`";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if(empty($result))
            return false;
        return $result;
    }
    public function getResolution(){
        
    }
 
     
    //Thêm gói dịch vụ
    public function addServicePackages($data)
    {
        extract($data);
        $sql = "INSERT INTO service(id, name, price, createDate, maxResolution, haveAds, haveHistory,duration)
        VALUES ('$id', '$name', '$price', '$createDate', '$maxResolution', '$haveAds', '$haveHistory','$duration')";
         $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    //Xóa gói dịch vụ
    public function deleteServicePackages($id){
        $sql = "DELETE FROM service WHERE id=$id";
        $this->execute($sql);
    }
    //Sua gói dịch vụ
    public function editServicePackages($id,$data){
        $sql = "UPDATE service set ";
        $fieldEdit = "";
        foreach ($data as $key => $value) {
            $fieldEdit.=$key."= '".$value."',";
        }
        $fieldEdit= rtrim($fieldEdit,',');
        $sql.=$fieldEdit." WHERE id=$id";
        $this->execute($sql);
    }
    // Lấy 3 gói dịch vụ rẻ nhất đê view cho khách hàng 
    public function getCheapestServicePackages() {
        $sql = "SELECT * FROM service ORDER BY price ASC LIMIT 3";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result)) {
            return false;
        }
        return $result;
    }
    // Hàm lấy 3 gói dịch vụ ngoài 3 gói rẻ nhất để gợi ý cho customer
    public function getRemainingServicePackages() {
        $sql = "SELECT * FROM service WHERE id NOT IN (SELECT id FROM (SELECT id FROM service ORDER BY price ASC LIMIT 3) AS subquery)";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result)) {
            return false;
        }
        return $result;
    }
    
    

}