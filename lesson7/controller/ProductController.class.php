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
    function index(){
        $arProducts = Product::getProductsAll();
        return ['Products' =>$arProducts, ];
    }
    function detail(){
        return [];
    }
}