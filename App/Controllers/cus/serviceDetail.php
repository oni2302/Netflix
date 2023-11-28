<?php
    class serviceDetail extends BaseController{
        public $model;
        public $data = [];
        public function __construct(){
            $this->model = $this->getModel('cus/serviceModel');
        }
        public function index(){
            $this->data['content'] = 'cus/serviceDetail/index';
            $this->data['sub_content']['servicePackage'] =  $this->model->getService();
            $this->data['title']='Chi tiết gói dịch vụ';
            $this->renderView('layouts/customer',$this->data);
        }
    }
?>