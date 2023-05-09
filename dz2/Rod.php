<?php

namespace dz2;

//include_once "Bait.php";
//include_once "Line.php";
//include_once "Reel.php";
//include_once "RodElement.php";

//удочки,спиннинги
// донные удочки: фидорные,карповые,пикерные
// летние удочки: маховые,матчевые,штекерные,балонские
// спининги: кастинговые,троллинговые
// зимние удочки: мормышечные,поплавочные, с самоподсекателем

class Rod
{

    private $title;
    private Bait $bait;
    private Line $line;
    private Reel $reel;


    public function __construct($title, $bait, $line, $reel)
    {
        $this->title = $title;
        $this->bait = $bait;
        $this->line = $line;
        $this->reel = $reel;
        $this->status = true;
    }

    public function checkState()
    {
        if ($this->size >= 5) {

            echo "Congrat, line bait OK" . PHP_EOL;

        } else {
            $this->status == false;
            echo "Your line lost!" . PHP_EOL;
        }


    }



    //function checkState()
    //   {

    //    return (rand(1, 2) % 2) ? true : false;

    // }
}
//    private function init(array $info)
//    {
//
//        $vars = get_class_vars(get_class($this));
//        foreach ($vars as $prop => $value) {
//
//            $this->$prop = $info[$prop];
//
//        }
//
//    }
//
//}
//
//
//$rod1 = ['title' => 'carp', 'sku' => 17, 'description' => 'shimana sound carp', 'rating' => 4.9, 'price' => 6000, 'category' => 'bottom rod', 'subCategory' => 'carp', 'type' => 'fishing rod'];
//$rod2 = ['title' => 'fider', 'sku' => 23, 'description' => 'sport', 'rating' => 4.8, 'price' => 6500, 'category' => 'bottom rod', 'subCategory' => 'fider', 'type' => 'fishing rod'];
//$rod3 = ['title' => 'picker', 'sku' => 55, 'description' => 'flagman light', 'rating' => 4.7, 'price' => 7000, 'category' => 'bottom rod', 'subCategory' => 'picker', 'type' => 'fishing rod'];
//$a = new Rod();
//$a->init($rod1);
//print_r($a);


