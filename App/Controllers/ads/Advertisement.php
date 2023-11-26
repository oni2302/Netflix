<?php
class Advertisement extends BaseController
{
    public function __construct()
    {
        $this->model = $this->getModel('ads/AdvertisementModel');
    }
    public function index()
    {
        $this->data['content'] = 'ads/index';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Chức năng quảng cáo';
        $this->renderView('layouts/ads', $this->data);
    }
    public function up()
    {
        $this->data['content'] = 'ads/up';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Đăng tải quảng cáo';
        $this->renderView('layouts/ads', $this->data);
    }
    public function upHandle()
    {
        $req =  new Request();
        $data = $req->getField();
        $data['adsFrom'] = SessionManager::GetSession(SessionManager::USER_ACCOUNT)['id'];
        $this->model->up($data);
        header('location:'._WEB.'/ads/advertisement/list');
    }
    public function list()
    {
        $this->data['content'] = 'ads/list';
        $this->data['sub_content']['ads'] = $this->model->getUserAds();
        $this->data['title'] = 'Danh sách quảng cáo';
        $this->renderView('layouts/ads', $this->data);
    }
    public function detail()
    {
    }
    public function purchase($id)
    {
        $invoice = $this->model->getInvoice($id);
        SessionManager::SetSession('callbackUrl', _WEB . '/ads/Advertisement/purchased');
        SessionManager::SetSession('purchaseFor',$invoice['id']);
        Payment::Purchase($invoice['id'], $invoice['price'], true);
    }
    public function purchased(){
        $inv = $this->model->getInvoiceById(SessionManager::GetSession('purchaseFor'));
        $status = SessionManager::GetSession('status');
        if($status){
            $invoice = ['paymentStatus'=>'2'];
            $ads = ['statusAds'=>'3'];
            $this->model->updateStatus($invoice,$inv['id'],$ads,$inv['adsId']);
            header('location:'._WEB.'/ads/advertisement/list');
        }else{
            header('location:'._WEB.'/ads/advertisement/list');
        }
    }
}
