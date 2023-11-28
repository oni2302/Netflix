<?php
    class manageInfor extends BaseController{
        public $model;
        public $data = [];
        public function __construct(){
            $this->model = $this->getModel('manageInforModel');
        }
        public function index(){
            $this->data['content'] = '/user/manage/index';
            $this->data['sub_content']['manageInfor'] =  $this->model->getInfor();
            $this->data['title']='Quản lí thông tin cá nhân';
            $this->renderView('layouts/customer',$this->data);
        }
        //Chỉnh sửa thông tin cá nhân
        public function edit(){
            $request = new Request();
            $data = $request->getField();
            $this->model->editInfo($data); 
            header('location:'._WEB. "/manageInfor/index");
        }
        //Hiển Thị view edit
        public function viewEdit($id=''){
            if(empty($id)){
                App::$app->showError();
            }
            $this->data['content'] = 'user/manage/editInfor';
            $this->data['sub_content']['manageInfor'] = $this->model->getInfor();
            $this->data['title'] = 'Chỉnh sửa thông tin cá nhân';
            $this->renderView('layouts/admin', $this->data);
        }
    }
?>