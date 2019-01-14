<?php
    class Welcome extends Controlador{
        public function __construct(){
            echo "Controlador: Welcome" . "</br>";
            $this->articuloModelo = $this->modelo('Articulo');
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

//El nombre de los controladores va en plural y modelo en singular 