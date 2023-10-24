<?php
class Service extends AdminController
{
    public function __construct(){
        parent::__construct();
        $this->model = $this->getModel('admin/ServiceModel');
    }
    public function serviceIndex(){
        $this->data['title'] = 'Quản lí gói dịch vụ';
        $this->data['content'] = 'admin/service/index';
        $this->data['sub_content']['service_list'] = $this->model->getAllServicePackages();
        $this->renderView('layouts/admin', $this->data);
    }
}