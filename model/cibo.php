<?php
    class Cibo extends Prodotto {
        public $weight;
        public $ingredients;

        public functio __construct($_name, $_price, $_image, Categoria $_category, $_weight, $_ingredients){
            parent::__construct($_name, $_price, $_image, $_category)
            $this->weight = $_weight;
            $this->ingredients = $_ingredients;
        }

    }
?>