<?php
    class Home extends BaseController{
        public $model;
        public $data = [];
        public function __construct(){
            $this->model = $this->getModel('HomeModel');
        }
        public function index(){
            $this->data['content'] = 'Home/index';
            $this->data['sub_content']=[];
            $this->data['sub_content']['service'] =  $this->model->getAllService();
            $this->data['title']='Trang chủ';
            $this->renderView('layouts/customer',$this->data);
        }
    }
?>