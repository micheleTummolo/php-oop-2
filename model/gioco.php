<?php
    class Gioco extends Prodotto{
        public $size;
        public $features;

        /**
         * Costruttore della classe Gioco
         *
         * @param string $_name
         * @param float $_price
         * @param img $_image
         * @param Categoria $_category
         * @param string $_size
         * @param string $_features
         */
        public function __construct($_name, $_price, $_image, Categoria $_category, $_size, $_features){
            parent::__construct($_name, $_price, $_image, $_category);
            $this->size = $_size;
            $this->features = $_features;
        }
    }
?>