<?php

class Order extends Model {
    protected static $table = 'orders';

    protected static function setProperties()
    {
        self::$properties['phone'] = [
            'type' => 'varchar',
            'size' => 512
        ];

        self::$properties['address'] = [
            'type' => 'varchar',
            'size' => 512
        ];

        self::$properties['email'] = [
            'type' => 'float'
        ];
    }

    static public function getList($userId = 0)
    {
        return db::getInstance()->Select(
            'SELECT * FROM orders WHERE user_id=:user_id ORDER BY date DESC',
            ['user_id' => $userId]);
    }

    static public function getDetail($orderId)
    {
        return db::getInstance()->Select(
            'SELECT products.id, products.name, products.price, products.img_small, cart.count FROM cart LEFT JOIN products ON cart.product_id = products.id WHERE cart.order_id=:order_id',//
            ['order_id' => $orderId]);
    }
}