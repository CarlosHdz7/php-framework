<?php
    //Controlador principal del cual heredan todos los controladores
    //Se encarga de cargar las vistas y los modelos
    
    class Controlador{
        //Cargar modelo
        public function modelo($modelo){
            //Cargamos el modelo que queremos dentro de la carpeta modelos
            require_once '../app/modelos/'.$modelo.'.php';

            //Retornamos una instancia del modelo para poder usar sus funciones
            return new $modelo();
        }

        //Cargar vista
        public function vista($vista, $datos = []){
            //Cargamos el modelo que queremos dentro de la carpeta modelos
    
            //Validar si la vista existe
            if(file_exists('../app/vistas/'.$vista.'.php')){
                require_once '../app/vistas/'.$vista.'.php';
            } else {
                die('La vista no existe');
            }
        }
    }