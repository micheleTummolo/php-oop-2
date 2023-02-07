<?php
    class Accessorio extends Prodotto {
        public $material;
        public $size;

        public functio __construct($_name, $_price, $_image, Categoria $_category, $_material, $_size){
            parent::__construct($_name, $_price, $_image, $_category)
            $this->material = $_material;
            $this->size = $_size;
        }

    }
?>