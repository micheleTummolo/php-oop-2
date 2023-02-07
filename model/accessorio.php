<?php
    class Accessorio extends Prodotto {
        public $material;
        public $size;

         /**
         * Costruttore della classe Accessorio
         *
         * @param string $_name
         * @param float $_price
         * @param img $_image
         * @param Categoria $_category
         * @param string $_material
         * @param string $_size
         */
        public function __construct($_name, $_price, $_image, Categoria $_category, $_material, $_size){
            parent::__construct($_name, $_price, $_image, $_category);
            $this->material = $_material;
            $this->size = $_size;
        }

    }
?>