<?php
class Service extends AdminController
{
    public function service(){
        parent::service();
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
        $this->data['content'] = 'admin/service/add';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Thêm gói dịch vụ';
        $this->renderView('layouts/admin', $this->data);
        $request = new Request();
        $data = $request->getField();
        $this->model->addServicePackages($data);
        header('location:'._WEB. "/admin/service/index");
    }
    //Sửa gói dịch vụ
    public function editService($data){
        $this->data['content'] = 'admin/service/edit';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Chỉnh sửa gói dịch vụ';
        $this->renderView('layouts/admin', $this->data);
        $this->model->editServicePackages($data);
        header('location'._WEB. "/admin/service/index");
    }
    //Xóa gói dịch vụ
    public function deleteService($id){
        $this->model->deleteServicePackages($id);
        header('location'._WEB. "/admin/service/index");
    }
}