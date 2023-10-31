<?php 
    class Supplier extends AdminController {
        public function __construct(){
            parent::__construct();
            $this->model = $this->getModel('admin/SupplierModel');
        }
        public function index(){
            $this->data['content'] = 'admin/supplier/index';
            $this->data['sub_content']['supplier_list'] = $this->model->getAllSupplier();
            $this->data['title'] = 'Quản lí nhà cung cấp'; 
            $this->renderView('layouts/admin', $this->data);
        }
        //Hiển thị view add
        public function viewAdd(){
            $this->data['content'] = 'admin/supplier/add';
            $this->data['sub_content'] = [];
            $this->data['title'] = 'Thêm nhà cung cấp';
            $this->renderView('layouts/admin', $this->data);
        }
        //Thêm gói nhà cung cấp
        public function addSupplier(){
            $request = new Request();
            $data = $request->getField();
            $this->model->addSupplier($data);
            header('location:'._WEB. "/admin/supplier/index");
        }
        //Hiển thị view edit
        public function viewEdit($id=''){
            if(empty($id)){
                App::$app->showError();
            }
            $this->data['content'] = 'admin/supplier/edit';
            $this->data['sub_content']['id'] = $id;
            $this->data['title'] = 'Chỉnh sửa nhà cung cấp';
            $this->renderView('layouts/admin', $this->data);
        }
        //Sửa nhà cung cấp
        public function EditSupplier($id){    
            $request= new Request();
            $data = $request->getField();
            $this->model->editSupplier($id,$data);
            header('location:'._WEB. "/admin/supplier/index");
        }
        //Xóa nhà cung cấp
        public function deleteSupplier($id){
            $this->model->deleteSupplier($id);
            header('location:'._WEB. "/admin/supplier/index");
        }
    }