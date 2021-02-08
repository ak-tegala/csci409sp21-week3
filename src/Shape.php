    <?php
        class Shape{
            const   SHAPE_TYPE = 1;
            public $name;
            protected $length,$width;
            private $id;

            function __construct($length, $width){
                $this->length = $length;
                $this->width = $width;
                $this->id = $id->uniqid();
            }

            function getName(){
                return $this->name;
            }

            function setName($name){
                $this->name = $name;
            }

            function getId(){
                return $this->id;
            }

            public function area(){
                return $this->length * $this->width;
            }

            public static function getTypeDescription(){
                return "Type: ".static::SHAPE_TYPE."";
            }

            public function getFullDescription(){
                return "Shape<$this->id>: $this->name - $this->length * $this->width";
            }

        }
    ?>