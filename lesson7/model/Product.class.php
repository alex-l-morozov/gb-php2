<?php
class Product extends Model
{
    protected static $table = 'products';

    public static function getIndex()
    {
        return db::getInstance()->Select(
            'SELECT id, name, price, img_small FROM products WHERE active=:status LIMIT 8',
            ['status' => 'Y']);
    }
    public static function getAll()
    {
        return db::getInstance()->Select(
            'SELECT id, name, price, img_small FROM products WHERE active=:status',
            ['status' => 'Y']);
    }
    public static function getDetail($id)
    {
        return db::getInstance()->Select(
            'SELECT id, name, price, img_big FROM products WHERE id=:id',
            ['id' => $id]);
    }
}