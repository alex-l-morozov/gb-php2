<?php
/*
 * 1. Создать структуру классов ведения товарной номенклатуры.
 * а) Есть абстрактный товар.
 * б) Есть цифровой товар, штучный физический товар и товар на вес.
 * в) У каждого есть метод подсчета финальной стоимости.
 * г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.
 * д) Что можно вынести в абстрактный класс, наследование?
 */

abstract class Product
{
    protected static float $cost = 55.5;

    abstract public function getFinalCost();
}

class DigitalProduct extends Product
{
    public function getFinalCost() : float
    {
        return self::$cost / 2;
    }
}

class PieceProduct extends Product
{
    public function getFinalCost() : float
    {
        return self::$cost;
    }
}

class WeightProduct extends Product
{
    private float $weight;

    public function __construct(float $weight = 0)
    {
        $this->setWeight($weight);
    }

    private function setWeight($weight) : void
    {
        $this->weight = $weight;
    }

    private function getWeight() : float
    {
        return $this->weight;
    }

    public function getFinalCost() : float
    {
        return self::$cost * $this->getWeight();
    }
}

$product_1 = new DigitalProduct();
$product_2 = new PieceProduct();
$product_3 = new WeightProduct(0.5);

echo "Стоимость цифрового товара {$product_1->getFinalCost()} <br/>";
echo "Стоимость штучного товара {$product_2->getFinalCost()} <br/>";
echo "Стоимость весового товара {$product_3->getFinalCost()} <br/>";