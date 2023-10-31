<?php
class SessionManager {
    const USER_ACCOUNT = 'user';
    const USER_ROLE = 'role';
    const USER_MENU_LIST= 'menu';

    const ROLE_KHACH = 'khachhang';
    const ROLE_ = '';
    public static function SetSession($sesionKey,$value){
        $_SESSION[$sesionKey] = $value;
    }
    public static function UnsetSession($sesionKey){
        unset($_SESSION[$sesionKey]);
    }
    public static function GetSession($sesionKey){
        if(isset($_SESSION[$sesionKey])){
            return $_SESSION[$sesionKey];
        }
        return null;
    }
    public static function LogOutSession(){
        unset($_SESSION[self::USER_ACCOUNT]);
        unset($_SESSION[self::USER_ROLE]);
    }
}
