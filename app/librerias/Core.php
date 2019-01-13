<?php
    //Mapear la url ingresada y dividirla 
    //En controlador/metodo/parametro

    //mientras en al url no se digite un controlador y un metodo se cargaran los por defecto
    class Core{
        protected $controladorDefault = 'welcome';
        protected $metodoDefault      = 'index';
        protected $parametroDefault   = [];

        public function __construct() {
            //print_r($this->obtenerUrl());
            //$url = $this->obtenerUrl();
        }
        
        public function obtenerUrl() {
            //echo $_GET['url'];

            if(isset($_GET['url'])){
                //Cortar espacios a la derecha de la url y validar la url
                $url = rtrim($_GET['url'],'/');
                $url = filter_var($url,FILTER_SANITIZE_URL);
                $url = explode('/',$url);
                 return $url;
            }
        }
    }
