<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Fruit{
        public $name;
        public $price;
        function set_name($name){
            $name = $this->name;
        }
        function get_name(){
            return $this-> name;
        }
        function set_price($price){
            $price = $this->name;
        }
        function get_price(){
            return $this->price;
        }
    };
    $apple = new Fruit();
    $apple->set_name('apple');
    $apple->set_price('13');
    echo "the name of the fruit is : ". $apple->get_name();
    echo "the price of the fruit is : ". $apple->get_price();
    ?>
</body>
</html>