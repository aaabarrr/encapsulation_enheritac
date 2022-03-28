<?php
class Fruit{
    // public $name;
    // protected $color;
    // private $weight;

    public $name;
    public $color;
    public $weight;

    function set_name($n){ // a public function (default)
        $this->name=$n;
    }
    protected function set_color($n){ // a protected function
        $this->color=$n;
    }
    private function set_weight($n){ // a private function
        $this->weight=$n;
    }
}



// $manggo = new Fruit();
// $manggo->name= 'Manngo'; //ok
// $manggo->color= 'yellow'; //erorr
// $manggo->weight= '300';//errorr

$manggo = new Fruit();
echo $manggo->set_name('Manggo'); //ok
echo $manggo->set_color('yellow'); //erorr
echo $manggo->set_weight('300');//errorr

//Stawberry is inheritech from fruit

class Strawberry extends Fruit{
    public function message(){
        echo"Am I Fruit or a berry";
    } 
}

$strawberry = new Strawberry('Strawberry','red');
$strawberry->message();
$strawberry->intro();


?>