<?php
class API extends BaseController
{
    public function __construct()
    {
        $this->model = $this->getModel('APIModel');
    }
    public function getData()
    {
        $contentData = $this->model->getRecommendFilm();
        $contentData['color'] = '0xFF000000';

        // Trả về dữ liệu dưới dạng JSON
        header("Access-Control-Allow-Origin: *");
        echo json_encode($contentData);
    }
    public function getAllMovie(){
        $data = $this->model->getAllFilm();
        header("Access-Control-Allow-Origin: *");
        echo json_encode($data);
    }
    public function getImage()
    {
        $url = (new Request())->getField()['url'];
        $imageData = file_get_contents(_WEB . $url);
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $contentType = $finfo->buffer($imageData);
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET');
        echo $imageData;

        header("Content-Type: $contentType");
    }
}
