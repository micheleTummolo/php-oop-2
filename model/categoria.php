<?php
    class Categoria {
        public $name;
        public $icon;

        /**
         * Costruttore della classe Categoria
         *
         * @param string $_name
         * @param string $_icon
         * @return void
         */
        public function __construct($_name, $_icon){
            $this->name = $_name;
            $this->icon = $_icon;
        }
    }
?>