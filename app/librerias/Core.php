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

            //verificar en la carpeta "controladores" si el controlador existe
            if(file_exists('../app/controladores/'.ucwords($url[0]).'.php')) {
                //Si existe se configura como controlador por defecto
                //Si no se escribe se usa el controlador por defecto "welcome", es decir CARGA WELCOME
                //pero si hay entonces ese controlador pasa a ser el controlador por defecto
                $this->controladorDefault = ucwords($url[0]); //ucwords pasa la primera letra a mayuscula
                
                //unset indice 0
                unset($url[0]);
            }

            //requerir el controlador
            //el controlador se puede llamar sin la extension .php
            require_once '../app/controladores/'.$this->controladorDefault. '.php';
            $this->controladorDefault = new $this->controladorDefault;
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
