<?php
class Cart extends Model
{
    protected static $table = 'cart';

    static public function getAll()
    {
        return db::getInstance()->Select(
            'SELECT products.id, products.name, products.price, products.img_small, cart.count FROM cart LEFT JOIN products ON cart.product_id = products.id WHERE cart.session_id=:session_id AND order_id=0',
            ['session_id' => session_id()]);
    }

    static public function add($product_id)
    {
        $arCart = db::getInstance()->Select(
            'SELECT id, count FROM cart WHERE product_id=:product_id AND session_id=:session_id AND order_id=0',
            [
                'product_id' => $product_id,
                'session_id' => session_id(),
            ]
        );

        if (count($arCart) > 0){
            db::getInstance()->Query("UPDATE `cart` SET `count` = :count WHERE id=:id",
                [
                    'id' => $arCart[0]['id'],
                    'count' => $arCart[0]['count'] + 1,
                ]);
        } else {
            db::getInstance()->Query("INSERT INTO `cart` SET `product_id` = :product_id, `session_id` = :session_id, `count` = :count",
                [
                    'product_id' => $product_id,
                    'session_id' => session_id(),
                    'count' => 1,
                ]);
        }
    }

    static public function delete($product_id)
    {
        db::getInstance()->Query("DELETE FROM cart WHERE product_id=:product_id AND session_id=:session_id AND order_id=0",
            [
                'product_id' => $product_id,
                'session_id' => session_id(),
            ]);
    }
}