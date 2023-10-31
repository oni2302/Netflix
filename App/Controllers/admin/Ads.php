<?php
class Ads extends AdminController
{
    public function __construct(){
        $this->model = $this->getModel('admin/AdsModel');
    }
    public function taoviewadd()
    {
        $this->data['content'] = 'admin/ads/add';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'View adsAdd';
        $this->renderView('layouts/admin', $this->data);
    }

    public function xuliaddAds()
    {
        $request = new Request();
        $data = $request->getField();
        $this->model->addAds($data);
        header('location:'._WEB. "/admin/Ads/hienthiview");        
    }
    public function hienthiview()
    {
        $this->data['content'] = 'admin/ads/index';
        $this->data['sub_content']['ads_list'] = $this->model->getAllAds();
        $this->data['title'] = 'Quản lí Quảng Cáo';
        $this->renderView('layouts/admin', $this->data);
    }
    public function deleteAds($id)
    {   
        $this->model->deleteAds($id);
       header('location:'._WEB. "/admin/Ads/hienthiview"  );
    }
    public function xulieditAds($id)
    {
        $this->model->deleteAds($id);
        $this->data['content'] = 'admin/ads/add';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'View them quang cao';
        $this->renderView('layouts/admin', $this->data);
    }
}
?>