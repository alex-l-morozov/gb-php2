<?php

class CartController extends Controller
{
    public $view = 'cart';

    public function index($data)
    {
        $arCart = Cart::getAll();
        //echo "<pre>" . print_r($arCart, true) . "</pre>";
        return [
            "Cart" => $arCart,
            "CartCount" => count($arCart),
            "isAuth" => User::isAuth(),
            ];
    }

    public function add()
    {
        if ($_GET['id']) {
            $arCart = Cart::add($_GET['id']);
        }
        return ['isSuccess' => true];
    }

    public function delete()
    {
        if ($_GET['id']) {
            Cart::delete($_GET['id']);
        }
        return ['isSuccess' => true];
    }
}