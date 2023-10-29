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
    public function getFilmBanner(){
        $sql = "SELECT * FROM `videoStorage` WHERE id = ";
    }
}