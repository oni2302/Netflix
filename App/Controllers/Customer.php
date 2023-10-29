<?php
class Customer extends BaseController{
    public $model;
    public $data = [];
    public function __construct(){
        $this->model = $this->getModel('CustomerModel');
    }
    public function ViewAdd()
    {
        $this->data['content'] = 'admin/customer/addcustomer';
        $this->data['sub_content']['customer'] = $this->model->SelectAllFrom('useraccount');
        $this->data['title'] = 'View Khach Hang';
        $this->renderView('layouts/admin', $this->data);
    }

    public function HandleAddCustomer()
    {
        $request = new Request();
        $data = $request->getField();
        $this->model->addCustomer($data);
        header('location:'._WEB. "/customer/hienthiview");        
    }
    public function hienthiview()
    {
        $this->data['content'] = 'admin/customer/index';
        $this->data['sub_content']['customer_list'] = $this->model->GetAllCustomer();
        $this->data['title'] = 'Quản lí Khách Hàng';
        $this->renderView('layouts/admin', $this->data);
    }
    public function deletecustomer($id)
    {   
        $this->model->deletecustomer($id);
       header('location:'._WEB. "/customer/hienthiview"  );
    }
    public function xulieditcustomer($id)
    {
        $this->model->deletecustomer($id);
        $this->data['content'] = 'admin/customer/addcustomer';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'View edit khach hang';
        $this->renderView('layouts/admin', $this->data);
    }
}
