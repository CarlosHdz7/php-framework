<?php
    class Welcome extends Controlador{
        public function __construct(){
            echo "Controlador: Welcome" . "</br>";
        }

        public function index(){
            $datos = [
                'titulo' => "Bienvenido"
            ];
            $this->vista('paginaweb/home',$datos);
        }

        public function Articulo(){

        }

        public function Actualizar($num,$num2){
            echo "Parametro: ".$num;
            echo "Parametro: ".$num2;
        }
    }