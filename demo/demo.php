<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Fruit{
    //properties:thuoc tinh
    public $name;
    public $color;
    public $taste;
    public $smell;

  function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    function __destruct(){
        echo "the fruit is {$this->name}";
    }


    //methods:phuong thuc
    public function set_name($name){
        $this->name=$name;
    }
    public function set_color($color){
        $this->color= $color;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_color(){
        return $this->color;
    }
}
/*$apple=new Fruit("Apple","Red");
$orange=new Fruit("Orange","Orange");*/
$banana=new Fruit("banana","red");


$banana->set_name("");
echo $banana->get_name();
//echo $banana->get_color();
$banana->set_color("yellow");
echo $banana->get_color();


*/?><!--<!--
-->--><?php
/*/*class Fruit {
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
*/*/?>






</body>
</html>
