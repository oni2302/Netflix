<?php
class customerservice extends BaseController
{
    public function __construct()
    {
        $this->model = $this->getModel('admin/ServiceModel');
    }
    public function index(){
        $this->data['content'] = 'customerservice/index';
        $this->data['sub_content'] = [];
        $this->data['sub_content']['packages'] = $this->model->getCheapestServicePackages();
        $this->data['title'] = 'Mua Dịch Vụ'; 
        $this->renderView('layouts/customer', $this->data);
    }

    public function recommend(){
        $this->data['content'] = 'customerservice/recommend';
        $this->data['sub_content'] = [];
        $this->data['sub_content']['remainingPackages'] = $this->model->getRemainingServicePackages();
        $this->data['sub_content']['packages'] = $this->model->getCheapestServicePackages();
        $this->data['title'] = 'Mua Dịch Vụ'; 
        $this->renderView('layouts/customer', $this->data);
    }
}   