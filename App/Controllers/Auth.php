<?php
class Auth extends BaseController
{
    public function __construct()
    {
        $this->model = $this->getModel('AuthModel');
    }
    //Đăng nhập
    public function signin()
    {
        $this->data['content'] = 'auth/signin';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Đăng nhập';
        $this->renderView('layouts/auth', $this->data);
    }
    //Xử lí đăng nhập
    public function signinHandle()
    {
        $request = new Request();
        $data = $request->getField();
        $account = $this->model->getAccount($data);
        if (!empty($account)) {
            SessionManager::SetSession(SessionManager::USER_ACCOUNT, $account);
            $role = $this->model->checkRole($account['role']);
            SessionManager::SetSession(SessionManager::USER_ROLE, $role);
            if ($role == "khachhang") {
                header('location:' . _WEB);
            } if($role == "doitacquangcao") {
                header('location:' . _WEB . '/ads/Advertisement/index');
            }else{
                header('location:' . _WEB . '/admin/video/index');
            }
        }
    }
    //Đăng kí
    public function signup()
    {
        $this->data['content'] = 'auth/signup';
        $this->data['sub_content'] = [];
        $this->data['title'] = 'Đăng ký';
        $this->renderView('layouts/auth', $this->data);
    }
    //Xử lí đăng kí
    public function signupHandle()
    {
        $request =  new Request();
        $data = $request->getField();
        if ($data['pass'] == $data['repass']) {
            unset($data['repass']);
            $data['role']=2;
            if ($this->model->createAccount($data)) {
                header('location:' . _WEB . '/auth/signin');
            } else {
                header('location:' . _WEB . '/auth/signup');
            }
        }else{
            header('location:' . _WEB . '/auth/signup');
        }
    }
    //Đăng xuất
    public function signout()
    {
        SessionManager::LogOutSession();
    }
}
