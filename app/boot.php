<?php
    //Cargar todas las librerias
    require_once 'config/Configurar.php';

    //Autoload
    //Cargamos todas las clases dentro de la carpeta "librerias/"
    
    //require_once 'librerias/Controlador.php';
    //require_once 'librerias/Core.php';
    //require_once 'librerias/Database.php';

    spl_autoload_register(function($nombreClase){
        require_once 'librerias/'. $nombreClase.'.php';
    });
    //NOTA: el nombre dentro de la clase debe conrresponder con el nombre del archivo