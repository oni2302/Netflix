<?php
class VideoModel extends BaseModel
{
    public int $id;
    public string $videoName;
    public string $desciprtion;
    public int $videoLength;
    public string $link;
    public string $banner;
    public string $image1;
    public string $image2;
    public int $videoLanguage;
    public float $licenseCost;
    public DateTime $releaseDate;
    public DateTime $purchaseDate;
    public int $watchedTimes;
    public int $supplier;
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
    public function getAllVideo(){
        $sql = "SELECT * FROM `VideoStorage`";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if(empty($result))
            return false;
        return $result;
    }
}