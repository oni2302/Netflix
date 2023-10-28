<?php
class API extends BaseController
{
    public function __construct()
    {
    }
    public function getData()
    {
        $contentData = array(
            "name" => "Onepiece",
            "imageUrl" => "/public/assets/images/One-Piece-Live-Action/image2/onepiece-live-action-banner.png",
            "titleImageUrl" => "/public/assets/images/One-Piece-Live-Action/banner/onepiece-live-action-title.png",
            "videoUrl" => "/public/assets/images/One-Piece-Live-Action/link/onepiece-live-action-video.mp4",
            "description" => "Description for Content 1",
            "color" => "0xFF000000"
        );

        // Trả về dữ liệu dưới dạng JSON
        header("Access-Control-Allow-Origin: *");
        echo json_encode($contentData);
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
