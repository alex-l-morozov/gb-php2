<?php
class Product extends Model
{
    protected static $table = 'products';

    public static function getProductsIndex()
    {
        return db::getInstance()->Select(
            'SELECT id, name, price, img_small FROM products WHERE active=:status LIMIT 8',
            ['status' => 'Y']);
    }
    public static function getProductsAll()
    {
        return db::getInstance()->Select(
            'SELECT id, name, price, img_small FROM products WHERE active=:status',
            ['status' => 'Y']);
    }
}