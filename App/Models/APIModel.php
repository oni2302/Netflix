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
    public function getRecommendFilm(){
        $sql = "SELECT * FROM `videoStorage` WHERE id = 51";
        return $this->execute($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function getFilmBanner(){
        $sql = "SELECT * FROM `videoStorage` WHERE id = ";
    }
    public function getAllFilm(){
        return $this->SelectAllFrom('videostorage');
    }
}