<?php
    class Octagon extends Shape
    {
        const SHAPE_TYPE = 4;
        protected $side;

        function __construct($side){
            parent::__construct(0,0);
            $this->side = $side;
        }
        
        public function area(){
            return (2 * (1 + sqrt(2) ) * $this->side * $this->side);
        }
        
        public function getFullDescription(){
            return "Octagon<$this->id>: $this->name - $this->side";
        }
    }
?>