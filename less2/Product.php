<?php

class Product
{
    public $title;
    public $sku;
    public $description;
    public $rating;
    public $price;
    public $category;
    public $subCategory;

    function init(array $info)
    {
        $vars = get_class_vars(get_class($this));
        foreach ($vars as $prop => $value) {

            $this->$prop = $info[$prop];


        }
    }

}

$product1 = ['title' => 'spinning', 'sku' => 17, 'description' => 'light',
    'rating' => 4.9, 'price' => 6000, 'category' => 'spinning', 'subCategory' => 'casting'];

$a = new Product();
$a->init([$product1]);
print_r($a);