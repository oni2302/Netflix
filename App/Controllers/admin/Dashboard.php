<?php
class Dashboard extends AdminController{
    public function __construct(){
        $this->model = $this->getModel('admin/DashboardModel');
    }
    public function index()
    {
        $this->data['content'] = 'admin/dashboard/index';
        $this->data['sub_content']['incomeAds'] = $this->model->SelectAllFrom('adsinvoice');
        $this->data['sub_content']['incomePlan'] = $this->model->SelectAllFrom('invoice');
        $this->data['title'] = 'Thống kê';
        $this->renderView('layouts/admin', $this->data);
    }
}
