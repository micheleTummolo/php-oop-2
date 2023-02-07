<?php
    class Cibo extends Prodotto {
        public $weight;
        public $ingredients;
        
         /**
         * Costruttore della classe Cibo
         *
         * @param string $_name
         * @param float $_price
         * @param img $_image
         * @param Categoria $_category
         * @param float $_weight
         * @param string $_ingredients
         */
        public function __construct($_name, $_price, $_image, Categoria $_category, $_weight, $_ingredients){
            parent::__construct($_name, $_price, $_image, $_category);
            $this->weight = $_weight;
            $this->ingredients = $_ingredients;
        }

    }
?>