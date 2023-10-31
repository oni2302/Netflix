<?php
class Advertisement extends BaseController{
    public function __construct()
    {
        $this->model = $this->getModel('AdsModel');
    }
    public function index(){
        $this->data['content'] = 'ads/index';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Chức năng quảng cáo';
        $this->renderView('layouts/ads', $this->data);
    }

}