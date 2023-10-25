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
        $sql = "SELECT * FROM `VideoStorage`";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        return $result;
    }
    public function getLanguage()
    {
        $sql = "SELECT * FROM `VideoLanguage`";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        return $result;
    }
    public function getSupplier()
    {
        $sql = "SELECT * FROM `supplier`";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        return $result;
    }
    public function getAny()
    {
        $sql = "SELECT * FROM `supplier`";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        return $result;
    }
    public function addMovie($data)
    {
        $sql = "INSERT INTO videoStorage(";
        foreach ($data as $key => $value) {
            $sql .= $key . ',';
        }
        $sql = rtrim($sql, ',');
        $sql .= ')VALUES(';
        foreach ($data as $key => $value) {
            $sql .= "'" . $value . "',";
        }
        $sql = rtrim($sql, ',');
        $sql .= ')';
        try {
            $this->execute($sql);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
