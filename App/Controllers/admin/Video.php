<?php
class Video extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->model = $this->getModel('admin/VideoModel');
    }
    public function index()
    {
        $this->data['content'] = 'admin/video/index';
        $this->data['sub_content']['video_list'] = $this->model->getAllVideo();
        $this->data['title'] = 'Quản lí phim';
        $this->renderView('layouts/admin', $this->data);
    }
    public function add()
    {
        $this->data['content'] = 'admin/video/add';
        $this->data['sub_content']['lang'] = $this->model->getLanguage();
        $this->data['sub_content']['supplier'] = $this->model->getSupplier();
        $this->data['title'] = 'Thêm phim';
        $this->renderView('layouts/admin', $this->data);
    }
    public function addHandle()
    {
        $req = new Request();
        $data = $req->getField();
        $link = $this->uploadFiles($_FILES, $data['videoName']);
        foreach ($link as $key => $value) {
            $data[$key] = $value;
        }
        if($this->model->addMovie($data)){
            header('location:'._WEB.'/admin/video/index');
        }
    }
    public function update($id)
    {
    }
    public function delete()
    {
    }

    private function uploadFiles($files, $name)
    {
        $link = [];
        foreach ($files as $key => $file) {
            $link[$key] = $this->uploadFile($file, $key, $name);
        }
        return $link;
    }
    public function uploadFile($file, $key, $name)
    {
        $uploadDir = _ROOT . "/public/assets/images/"; // Thư mục lưu trữ tệp tin tải lên
        $targetDir = $uploadDir . $this->createFolderName($name) . "/" . $key . '/'; // Thư mục con để lưu tệp tin
        $targetFile = $targetDir . basename($file["name"]);
        $link = _WEB.'/public/assets/images/'.$this->createFolderName($name) . "/" . $key . '/'. basename($file["name"]);
        // Tạo thư mục con nếu nó chưa tồn tại
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $link;
        } else {
            return '';
        }
    }
    private function createFolderName($str): string
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);

        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = str_replace(array(' ', '_'), '-', $str);
        $str = str_replace(array('\'', '"', ',', ';', '<', '>'), '', $str);
        return $str;
    }
}
