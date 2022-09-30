<?php

session_start();

//para saber si estamos en servidor local 
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1']));

define('URL', (IS_LOCAL ? 'http://127.0.0.1/proyectos/Sistema%20cotizador/' : 'La url de su servidor en produccion'));

//Rutas para carpetas en disco
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);
define('APP', ROOT.'app'.DS);
define('ASSETS', ROOT.'assets'.DS);
define('TEMPLATES', ROOT.'templates'.DS);
define('INCLUDES', TEMPLATES.'includes'.DS);
define('MODULES', TEMPLATES.'modules'.DS);
define('VIEWS', TEMPLATES.'views'.DS);
define('UPLOADS', ROOT.'uploads'.DS);

//Para archivos que vayamos a incluir en un header o footer (css, js)
define('CSS', URL.'assents/css/');
define('IMG', URL.'assents/img/');
define('JS', URL.'assents/js/');

//personalizacion
define('APP_NAME', 'Cotizador');
define('TAXES_RATE', 16); //porsentage para calcular los inpuestos
define('SHIPPING', 99.50); //para calcular los precios


//Aqui de cargan las funciones
require_once APP.'functions.php';

?>