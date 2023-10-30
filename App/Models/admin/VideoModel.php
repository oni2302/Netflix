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
    public function getAllVideo()
    {
        return $this->SelectAllFrom('videoStorage');
    }
    public function getLanguage()
    {
        return $this->SelectAllFrom('VideoLanguage');
    }
    public function getSupplier()
    {
        return $this->SelectAllFrom('supplier');
    }
    public function addMovie($data)
    {
        try {
            $this->InsertDataInto($data, 'videoStorage');
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function editMovie($data, $id)
    {
        $this->UpdateTableDataById('videoStorage', $data, $id);
    }
}
