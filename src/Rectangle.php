<?php
    class Rectangle extends Shape
    {
        const SHAPE_TYPE = 2;

        function __construct($length, $width){
            $this->length = $length;
            $this->width = $width;
            $this->id = $id->uniqid();
        }
        
        public function getFullDescription(){
            return "Rectangle<$this->id>: $this->name - $this->length * $this->width";
        }
    }
?>