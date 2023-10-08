<?php
class Video extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->model = $this->getModel('admin/VideoModel');
    }
    public function index(){
        $this->data['content'] = 'admin/video/index';
        $this->data['sub_content']['video_list'] = $this->model->getAllVideo();
        $this->data['title'] = 'Quản lí phim';
        $this->renderView('layouts/admin', $this->data);
    }
}
