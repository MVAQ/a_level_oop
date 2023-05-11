<?php


include_once 'Line.php';
include_once 'Reel.php';
include_once 'Bait.php';
include_once 'Rod.php';
include_once 'RodElement.php';

class Fishing
{

    private Rod $rod;

    public function mountFishingRod(Line $line, Reel $reel, Bait $bait): Rod
    {
        $this->rod = new Rod ($line, $reel, $bait);

        return $this->rod;
    }


}

$line = new Line('Steel Line', 'normal', 'Light Cyan');
$reel = new Reel('Cobra', 'inertial', 2);
$bait = new Bait('RapalPredator', 'Wood', 'Green');


$myFirstFishing = new Fishing();
$myFirstFishing . mountFishingRod($line, $reel, $bait);

var_dump($myFirstFishing);

//$reel = ['title' => 'Steel Line', 'type' => 'inertial', 'color' => 'Light Cyan'];
//$bait = ['title' => 'Steel Line', 'type' => 'inertial', 'color' => 'Light Cyan'];
