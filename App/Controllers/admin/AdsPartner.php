<?php
class AdsPartner extends AdminController
{
    public function __construct()
    {
        $this->model = $this->getModel('admin/AdsPartnerModel');
    }
    public function add()
    {
        $this->data['content'] = 'admin/adsPartner/add';
        $this->data['sub_content']['adsPartner'] = $this->model->SelectAllFrom('useraccount');
        $this->data['title'] = 'View Khach Hang';
        $this->renderView('layouts/admin', $this->data);
    }

    public function addHanle()
    {
        $request = new Request();
        $data = $request->getField();
        $this->model->addadsPartner($data);
        header('location:' . _WEB . "admin/adsPartner/index");
    }
    public function index()
    {
        $this->data['content'] = 'admin/adsPartner/index';
        $this->data['sub_content']['adsPartner_list'] = $this->model->GetAllAdsPartner();
        $this->data['title'] = 'Quản lí Khách Hàng';
        $this->renderView('layouts/admin', $this->data);
    }
    public function delete($id)
    {
        $this->model->deleteadsPartner($id);
        header('location:' . _WEB . "admin/adsPartner/index");
    }
    public function editHandle()
    {
        $request = new Request();

        $data = $request->getField();
        $id = $data['id'];
        unset($data['id']);
        $this->model->EditPartner($id,$data);
        header('location: '._WEB.'/admin/AdsPartner/index');
    }
    public function edit($id)
    {
        $this->data['content'] = 'admin/adsPartner/edit';
        //lấy hàng càng edit
        $this->data['sub_content']['temp'] = $this->model->getrowedit($id);
        $this->data['title'] = 'View edit khach hang';
        $this->renderView('layouts/admin', $this->data);
    }
}
