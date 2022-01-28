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
        if ($userId > 0) {
            return db::getInstance()->Select(
                'SELECT * FROM orders WHERE user_id=:user_id ORDER BY date DESC',
                ['user_id' => $userId]);
        } else {
            return db::getInstance()->Select(
                'SELECT * FROM orders ORDER BY date DESC',
                []);
        }
    }

    static public function getDetail($orderId)
    {
        return db::getInstance()->Select(
            'SELECT products.id, products.name, products.price, products.img_small, cart.count FROM cart LEFT JOIN products ON cart.product_id = products.id WHERE cart.order_id=:order_id',
            ['order_id' => $orderId]);
    }

    static public function add()
    {
        $arCart = db::getInstance()->Select(
            'SELECT id FROM cart WHERE session_id=:session_id AND order_id=0',
            [
                'session_id' => session_id(),
            ]
        );

        if (count($arCart) > 0){
            db::getInstance()->Query("INSERT INTO `orders` SET `status` = :status, `date` = :date, `user_id` = :user_id",
                [
                    'status' => 1,
                    'date' => date('Y-m-d H:i:s'),
                    'user_id' => $_SESSION['id'],
                ]);
            $orderId = db::getInstance()->lastInsertId();

            foreach ($arCart as $item) {
                db::getInstance()->Query("UPDATE cart SET order_id=:order_id WHERE id=:id",
                    [
                        'id' => $item['id'],
                        'order_id' => $orderId,
                    ]);
            }
        }
    }
}