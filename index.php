<?php
class Products
{
    public $dogs;
    public $cats;

}

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