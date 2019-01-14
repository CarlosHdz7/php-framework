# **Framework MVC** v1.0
##Importante
Al utilizar el framework MVC se debe recordar modificar el archivo **.htaccess** dentro de la carpeta **public** y cambiar la ruta que debe coincidir con el nombre de la carpeta de su proyecto
~~~ 
RewriteBase /framework/public 
~~~

Donde "framework" seria el nombre de su carpeta.

También se debe modificar el archivo **Configurar.php** dentro de la carpeta **config** y ahi deberemos colocar el nombre de nuestro proyecto

~~~ 
define('RUTA_URL', 'http://localhost/framework/');
~~~ 

Donde "framework" seria el nombre de su carpeta.