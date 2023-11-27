<?php
    class history extends BaseController{
        public $model;
        public $data = [];
        public function __construct(){
            $this->model = $this->getModel('cus/historyModel');
        }
        public function index(){
            $this->data['content'] = 'cus/index';
            $this->data['sub_content']['history'] =  $this->model->getHistory();
            $this->data['title']='Lịch sử mua hàng';
            $this->renderView('layouts/customer',$this->data);
        }
    }
?>