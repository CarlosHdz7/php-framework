<?php
    //Mapear la url ingresada y dividirla 
    //En controlador/metodo/parametro

    //mientras en al url no se digite un controlador y un metodo se cargaran los por defecto
    class Core{
        protected $controladorDefault = 'welcome';
        protected $metodoDefault      = 'index';
        protected $parametroDefault   = [];

        public function __construct() {
            $url = $this->obtenerUrl();
        }
        
        public function obtenerUrl() {
            echo $_GET['url'];
        }
    }
