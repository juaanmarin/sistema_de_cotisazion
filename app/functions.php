<?php

function get_view($view_name){    
    $view = VIEWS.$view_name.'View.php';

    //se valida el archivo existe
    if(!is_file($view)){
        die('La vista no existe');
    }

    // Existe la vista
    require_once $view;
}

?>