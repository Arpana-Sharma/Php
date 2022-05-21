<html>
    <body>
        <?php
            class vegetables{
                public $name;
                public $color;
                function __construct($name,$color) {
                    $this->name = $name;
                    $this->color = $color;
                  }
                public function introduce_self(){
                    echo "My name is " . $this->name . "<br>";
                    echo "I am " . $this->color . " in color <br>";
                }
                function __destruct(){
                    echo "I am dying";
                }
            } 
            $tomato = new vegetables("tomato","red");
            $tomato->introduce_self();
        ?>
    </body>
</html>