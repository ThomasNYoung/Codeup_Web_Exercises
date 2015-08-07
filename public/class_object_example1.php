<?php

class BakeryItem
{
    public $nameOfBakery
}

class Pastry extends BakeryItem
{
    public $ingredients = ['flour', 'sugar', 'eggs'];
    public $typeOfPastry;

    public function __construct($typeOfPastry)
    {
        $this->typeOfPastry = $typeOfPastry;
        $this->bake();
    }

    public function bake()
    {

    }

    public function serve()
    {

    }
}


class Doughnut extends Pastry()
{
    public $typeOfPastry = 'doughnut';

    public function __construct($flavor)
    {
        $this->flavor = $flavor;
        $this->bake();
    }

    public function glaze($glazeFlavor)
    {

    }
}



// this would be on seperate page
require_once 'Auth.php';
require_once 'class_object_example1.php';
require_once 'Input.php';
require_once 'Log.php';

if(Auth::check() && Input::gas('pastry')) {
    $pastryDesired = $_POST['pastry'];
    $pastry = new Pastry($pastryDesired);
    $pastry->serve();
}

$doughnut = new Doughnut('cake');
$doughnut->glaze('chocolate');
$doughnut->serve();
