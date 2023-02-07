<?php
    class Prodotto{
        public $product_name;
        public $price;
        public $image;
        public $category;
        
        public function __construct($_name, $_price, $_image, Categoria $_category){
            $this->product_name = $_name;
            $this->price = $_price;
            $this->image = $_image;
            $this->category = $_category;
        }
    }
?>