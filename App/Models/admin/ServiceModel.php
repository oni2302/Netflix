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
}