<?php
class Voucher extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->model = $this->getModel('admin/VoucherModel');
    }
    public function taoviewadd()
    {
        $this->data['content'] = 'admin/voucher/add';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'View dai';
        $this->renderView('layouts/admin', $this->data);
    }

    public function xuliaddVoucher()
    {
        $request = new Request();
        $data = $request->getField();
        $this->model->addVoucher($data);
        header('location:'._WEB. "/admin/voucher/hienthiview");        
    }
    public function hienthiview()
    {
        $this->data['content'] = 'admin/voucher/index';
        $this->data['sub_content']['voucher_list'] = $this->model->getAllVoucher();
        $this->data['title'] = 'Quản lí Voucher';
        $this->renderView('layouts/admin', $this->data);
    }
    public function deletevoucher($id)
    {   
        $this->model->deleteVoucher($id);
       header('location:'._WEB. "/admin/voucher/hienthiview"  );
    }
    public function xulieditVoucher($id)
    {
        $this->model->deleteVoucher($id);
        $this->data['content'] = 'admin/voucher/add';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'View dai';
        $this->renderView('layouts/admin', $this->data);
    }
}
