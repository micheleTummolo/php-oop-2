<?php
    class Gioco extends Prodotto{
        public $size;
        public $features;

        public function __construct($_name, $_price, $_image, Categoria $_category, $_size, $_features){
            parent::__construct($_name, $_price, $_image, $_category)
            $this->size = $_size;
            $this->features = $_features;
        }
    }
?>