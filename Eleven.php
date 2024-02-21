<html>
<body>
    <?php
    class Birds
    {
        // properties
        public $name;
        public $color;

        //Constructors
        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        // Functions
        function get_name()
        {
            return $this->name;
        }
        function get_color()
        {
            return $this->color;
        }
    }

    $bird = new Birds("Parrot","Green");
    echo $bird->get_name();
    echo "<br>";
    echo $bird->get_color();

    ?>
</body>
</html>