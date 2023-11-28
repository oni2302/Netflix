<?php
class APIModel extends BaseModel
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
    public function getRecommendFilm($id)
    {
        $sql = "SELECT v.*,h.stoppedHour hour,h.stoppedMin minute,h.stoppedSecond second FROM videostorage v 
        left JOIN (
            select * from videohistory where videohistory.accountId = $id) h 
        on v.id = h.videoId 
        order by v.id desc
        limit 1";
        return $this->execute($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function getFilmBanner()
    {
        $sql = "SELECT * FROM `videoStorage` WHERE id = ";
    }
    public function getAllFilm()
    {
        return $this->SelectAllFrom('videostorage');
    }
    public function getIncome()
    {
        $sql =
            "SELECT `month`, `year`, SUM(income) AS income 
        FROM
        (
            SELECT MONTH(purchaseDate) AS `month`, YEAR(purchaseDate) AS `year`, SUM(total) AS income 
            FROM invoice
            GROUP BY MONTH(purchaseDate), YEAR(purchaseDate)
        
            UNION
        
            SELECT MONTH(createDate) AS `month`, YEAR(createDate) AS `year`, SUM(price) AS income 
            FROM adsinvoice
            GROUP BY MONTH(createDate), YEAR(createDate)
        ) AS combined_data
        GROUP BY `month`, `year`
        ";
        return $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function validateLogin($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $sql = "SELECT * FROM `USERACCOUNT` WHERE `username`='$username' AND `pass` = '$password'";
        $result = $this->execute($sql)->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function saveHistory($data)
    {
        extract($data);
        $sql = "call saveHistory($video,$user,$hour,$minute,$second)";
        return $this->execute($sql);
    }
    public function getHistory($id){
        $sql = "SELECT v.*,h.stoppedHour hour,h.stoppedMin minute,h.stoppedSecond second FROM `videoHistory` h JOIN `videoStorage` v ON h.videoId = v.id order by h.lastWatched desc";
        return $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function changeSession($data){
        extract($data);
        $sql = "UPDATE `useraccount` SET `isLoggedIn` = $session WHERE `id` = '$id'";
        $this->execute($sql);
    }
}
