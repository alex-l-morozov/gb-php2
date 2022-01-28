<?php

class UserController extends Controller
{
    public $view = 'user';

    public function index(){
        return [];
    }

    public function login(){
        if (!User::isAuth()) {
            if($_POST){
                $info = User::login($_POST['login'], $_POST['password']);
                if (User::isAuth()) {
                    header("Location: ./?path=user/info");
                }
            }
            else{
                header("Location: ./?path=user/index");
            }
        } else {
            header("Location: ./?path=user/info");
        }
    }

    public function register()
    {
        if (!User::isAuth()) {
            if($_POST){
                User::registeration($_POST['login'], $_POST['password'], $_POST['email']);
                if (User::isAuth()) {
                    header("Location: ./?path=user/info");
                }
            }
            header("Location: ./?path=user/index");
        } else {
            header("Location: ./?path=user/info");
        }
    }

    public function logout()
    {
        User::logout();
        header("Location: ./");
    }

    public function info()
    {
        if (User::isAuth()) {
            //echo "<pre>" . print_r($_SESSION, true) . "</pre>";
            if ($_SESSION['role'] == "admin") {
                $arOrders = Order::getList();
            } else {
                $arOrders = Order::getList($_SESSION['id']);
            }
            foreach ($arOrders as $key => &$arOrder) {
                $arOrderDetail = Order::getDetail($arOrder['id']);
                $arOrder['detail'] = $arOrderDetail;
            }
            //echo "<pre>" . print_r($arOrders, true) . "</pre>";
            return ["Orders" => $arOrders, "Role" => $_SESSION['role']];
        } else {
            header("Location: ./?path=user/index");;
        }
    }
}