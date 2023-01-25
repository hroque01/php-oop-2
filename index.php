<?php
class Products
{
    public $animal;

    public function __construct($animal)
    {
        $this->animal = $animal;
    }

    public function getHTML()
    {
        return "<h1>" . $this->animal . "</h1>";
    }

}
$products = new Products("cane");
echo $products->getHTML();
class Kennels extends Products
{
    public $materials;
    public $size;
    public $price;
}

class Foods extends Products
{
    public $dryfood;
    public $pate;
    public $prize;
    public $brand;

}

class Games extends Products
{
    public $tennisball;
    public $scratchingpost;
}

?>