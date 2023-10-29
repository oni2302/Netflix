<?php
class Auth extends BaseController
{
    public function __construct()
    {
        $this->model = $this->getModel('AuthModel');
    }
    //Đăng nhập
    public function signin(){
        $this->data['content'] = 'auth/signin';
        $this->data['sub_content']=[];
        $this->data['title'] = 'Đăng nhập';
        $this->renderView('layouts/auth', $this->data);
    }
    //Xử lí đăng nhập
    public function signinHandle(){
        $request = new Request();
        $data = $request->getField();
        $account = $this->model->getAccount($data);
        if(!empty($account)){
            SessionManager::SetSession(SessionManager::USER_ACCOUNT,$account);
            $role = $this->model->checkRole($account['role']);
            SessionManager::SetSession(SessionManager::USER_ROLE, $role);
            if($role == "khachhang"){
                header('location:'._WEB);
            }else{
                header('location:'._WEB.'/admin/video/index');
            }
        }
    }
    //Đăng kí
    public function signup(){

    }
    //Xử lí đăng kí
    public function signupHandle(){

    }
    //Đăng xuất
    public function signout(){

    }
}