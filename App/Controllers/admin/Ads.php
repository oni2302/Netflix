<?php
class Ads extends AdminController
{
    public function __construct()
    {
        $this->model = $this->getModel('admin/AdsModel');
    }
    public function index()
    {
        $this->data['content'] = 'admin/ads/index';
        $this->data['sub_content']['ads_list'] = $this->model->getAllAds();
        $this->data['title'] = 'Quản lí Quảng Cáo';
        $this->renderView('layouts/admin', $this->data);
    }
    public function confirmAds($id)
    {
        $data= ['statusAds'=>'2'];
        $this->model->updateAds($id,$data);
        header('location:' . _WEB . "/admin/Ads/index");
    }
    public function lockAds($id)
    {
        $data= ['statusAds'=>'5'];
        $this->model->updateAds($id,$data);
        header('location:' . _WEB . "/admin/Ads/index");
    }
}
