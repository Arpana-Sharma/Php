<html>
    <body>
        <?php
            class Fruit {
                public $name;
                protected $color;
                private $weight;
                              
                function set_name($n) {  // a public function (default)
                  $this->name = $n;
                }
                protected function set_color($n) { // a protected function
                  $this->color = $n;
                }
                private function set_weight($n) { // a private function
                  $this->weight = $n;
                }
                function get_name(){
                    echo $this->name . "<br>";
                }
            }
            
            $mango = new Fruit();
            $mango->name = 'Mango'; // OK
            // $mango->color = 'Yellow'; // ERROR
            // $mango->weight = '300'; // ERROR
            // $mango->set_color("yellow"); //fatal ERROR

            // Strawberry is inherited from Fruit
            class Strawberry extends Fruit {
                public function message() {
                  echo "Am I a fruit or a berry? <br>";
                  $this->get_name();
                }
            }
            $strawberry = new Strawberry("Strawberry", "red");
            $strawberry->message();
            // $strawberry->set_color("red");
        ?>
    </body>
</html>