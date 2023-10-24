<?php
class ServiceModel extends BaseModel{
    public int $id;
    public string $name;
    public float $price;
    public DateTime $createDate;
    public int $maxResolution;
    public bool $haveAds;
    public bool $haveHistory;

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
    //Thêm gói dịch vụ
    public function addServicePackages($data)
    {
        extract($data);
        $sql = "INSERT INTO service(id, name, price, createDate, maxResolution, haveAds, haveHistory)
            VALUES ('$id', '$name', '$price', '$createDate', '$maxResolution', '$haveAds', '$haveHistory')";
        $this->execute($sql);
    }
    //Sửa gói dịch vụ
    public function editServicePackages($data){
        extract($data);
        $sql = "UPDATE service(id, name, price, createDate, maxResolution, haveAds, haveHistory)
            VALUES ('$id', '$name', '$price', '$createDate', '$maxResolution', '$haveAds', '$haveHistory')";
        $this->execute($sql);
    }
    //Xóa gói dịch vụ
    public function deleteServicePackages($id){
        $sql = "DELETE FROM service WHERE id=$id";
        $this->execute($sql);
    }
}