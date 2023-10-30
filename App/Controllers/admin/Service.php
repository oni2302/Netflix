<?php
class Service extends AdminController
{
    public function __construct(){
        parent::__construct();
        $this->model = $this->getModel('admin/ServiceModel');
    }
    //Hiển thị view
    public function index(){
        $this->data['content'] = 'admin/service/index';
        $this->data['sub_content']['service_list'] = $this->model->getAllServicePackages();
        $this->data['title'] = 'Quản lí gói dịch vụ'; 
        $this->renderView('layouts/admin', $this->data);
    }
    //Hiển thị view add
    public function viewAdd(){
        $this->data['content'] = 'admin/service/add';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Thêm gói dịch vụ';
        $this->renderView('layouts/admin', $this->data);
    }
    //Hiển thị view eidt
    public function viewEdit(){
        $this->data['content'] = 'admin/service/edit';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Chỉnh sửa gói dịch vụ';
        $this->renderView('layouts/admin', $this->data);
    }
    //Thêm gói dịch vụ
    public function addService(){
        $request = new Request();
        $data = $request->getField();
        $this->model->addServicePackages($data);
        header('location:'._WEB. "/admin/service/index");
    }
    //Sửa gói dịch vụ
    public function editService($id){    
        header('location:'._WEB. "/admin/service/viewEdit");
        $this->model->deleteServicePackages($id); 
        
    }
    //Xóa gói dịch vụ
    public function deleteService($id){
        $this->model->deleteServicePackages($id);
        header('location:'._WEB. "/admin/service/index");
    }
}