<?php
/*
 * 1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов
 * продукт, ценник, посылка и т.п.
 * 2. Описать свойства класса из п.1 (состояние).
 * 3. Описать поведение класса из п.1 (методы).
 * 4. Придумать наследников класса из п.1. Чем они будут отличаться?
 */
class Product
{
    protected $article;
    protected $category;
    protected $title;
    protected $description;
    protected $price;

    public function __construct($article, $category, $title, $description, $price)
    {
        $this->setArticle($article);
        $this->setCategory($category);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setPrice($price);
    }

    protected function setArticle($article)
    {
        $this->article = $article;
    }
    protected function getArticle()
    {
        return $this->article;
    }
    protected function setCategory($category)
    {
        $this->category = $category;
    }
    protected function getCategory()
    {
        return $this->category;
    }
    protected function setTitle($title)
    {
        $this->title = $title;
    }
    protected function getTitle()
    {
        return $this->title;
    }
    protected function setDescription($description)
    {
        $this->description = $description;
    }
    protected function getDescription()
    {
        return $this->description;
    }
    protected function setPrice($price)
    {
        $this->price = $price;
    }
    protected function getPrice()
    {
        return $this->price;
    }
    public function getJSON()
    {
        return json_encode([
            "title" => $this->getTitle(),
            "article" => $this->getArticle(),
            "category" => $this->getCategory(),
            "price" => $this->getPrice(),
            "description" => $this->getDescription(),
        ]);
    }
}

class ProductView extends Product {

    public function getCard()
    {
        return "
            <h3>{$this->getTitle()}</h3>
            <b>Артикул:</b> {$this->getArticle()}<br>
            <b>Категория:</b> {$this->getCategory()}<br>
            <b>Цена:</b> {$this->getPrice()} руб.<br>
            <b>Описание:</b> {$this->getDescription()}<br>
        ";
    }

}

$product1 = new Product(
    326166,
    "Неттопы",
    "Lenovo ThinkCentre M710q",
    "ПЭВМ Lenovo ThinkCentre M710q <10MRS04600> Intel Core i3-7100T 4ГБ RAM 128Гб SSD DOS",
    28087
);
echo $product1->getJSON();

$product2 = new ProductView(
    326166,
    "Неттопы",
    "Lenovo ThinkCentre M710q",
    "Lenovo ThinkCentre M710q <10MRS04600> Intel Core i3-7100T 4ГБ RAM 128Гб SSD DOS",
    28087
);
echo $product2->getCard();