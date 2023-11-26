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
    public function getRecommendFilm()
    {
        $sql = "SELECT * FROM `videoStorage` WHERE id = 51";
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
}
