<?php

//удочки,спиннинги
// донные удочки: фидорные,карповые,пикерные
// летние удочки: маховые,матчевые,штекерные,балонские
// спининги: кастинговые,троллинговые
// зимние удочки: мормышечные,поплавочные, с самоподсекателем


abstract class RodElement
{

    public function update()
    {
        if ($this->checkState()) {
            echo get_class($this) . ' updated';
        } else {
            echo get_class($this) . ' state is new';
        }


    }

    abstract function checkState();

}


class Rod extends RodElement
{

    public $title;
    public $sku;
    public $description;
    public $rating;
    public $price;
    public $category;
    public $subCategory;
    public $type;

    function init(array $info)
    {

        $vars = get_class_vars(get_class($this));
        foreach ($vars as $prop => $value) {

            $this->$prop = $info[$prop];

        }

    }

    function checkState()
    {

        return (rand(1, 2) % 2) ? true : false;

    }

}


$rod1 = ['title' => 'carp', 'sku' => 17, 'description' => 'shimana sound carp', 'rating' => 4.9, 'price' => 6000, 'category' => 'bottom rod', 'subCategory' => 'carp', 'type' => 'fishing rod'];
$rod2 = ['title' => 'fider', 'sku' => 23, 'description' => 'sport', 'rating' => 4.8, 'price' => 6500, 'category' => 'bottom rod', 'subCategory' => 'fider', 'type' => 'fishing rod'];
$rod3 = ['title' => 'picker', 'sku' => 55, 'description' => 'flagman light', 'rating' => 4.7, 'price' => 7000, 'category' => 'bottom rod', 'subCategory' => 'picker', 'type' => 'fishing rod'];
$a = new Rod();
$a->init($product1);
print_r($a);


