<?php

class ProductController extends Controller
{
    public $view = 'product';
    public $title;

    function __construct()
    {
        parent::__construct();
        $this->title .= ' | Главная';
    }

    //метод, который отправляет в представление информацию в виде переменной content_data
    function index($data)
    {
        $arProducts = Product::getAll();
        return ['Products' =>$arProducts, ];
    }
    function detail()
    {
        if ($_GET['id']) {
            $arProducts = Product::getDetail($_GET['id']);
            return ['Product' =>$arProducts[0], ];
        }
        header("Location: ./?path=product/index");
    }
}