<?php
    class Circle extends Shape
    {
        const SHAPE_TYPE = 3;
        protected $radius;

        function __construct($radius){
            parent::__construct(0,0);
            $this->radius = $radius;
        }
        
        public function area(){
            return pi() * $this->radius * $this->radius;
        }
        
        public function getFullDescription(){
            return "Circle<$this->id>: $this->name - $this->radius";
        }
    }
?>