<?php

class AdminController extends BaseController{
    protected $model;
    protected $data = [];
    public function __construct()
    {
        if(empty(SessionManager::GetSession(SessionManager::USER_ACCOUNT))){
            header('location:'._WEB.'/auth/signin');
            die;                                             
        }
        if(SessionManager::GetSession(SessionManager::USER_ROLE)!="admin"){
            App::$app->showError('no-privilege');
        }
    }
}