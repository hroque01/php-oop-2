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
class Kennels extends Products
{
    public $materials;
    public $size;
    public $price;

    public function __construct($animal, $materials, $size, $price)
    {

        parent::__construct($animal);

        $this->materials = $materials;
        $this->size = $size;
        $this->price = $price;

    }

    public function getKennelsHTML()
    {
        return parent::getHTML()
            . $this->getKennels();
    }

    public function getKennels()
    {
        return "<h3>Materiale: " . $this->materials . "<br>"
            . "Taglia: " . $this->size . "<br>"
            . "Prezzo: " . $this->price . "</h3>";
    }

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

// Kennels print in html
$kennels = new Kennels("Cane", "Plastica", "XXL", "120 EUR");
echo $kennels->getKennelsHTML();

?>