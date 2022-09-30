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

//obtener la cotizacion
function get_quote(){
    if(!isset($_SESSION['new_quote'])){
        return $_SESSION['new_quote'] = 
        [
            'number' => rand(111111, 999999),
            'name' => '',
            'company' => '',
            'email' => '',
            'items' => [],
            'suptotal' => 0,
            'txes' => 0,
            'shipping' => 0,
            'total' => 0
        ];
    }

    //calcular todos los totales
    recalculate_quote();

    return $_SESSION['new_quote'];

}

//calcular valor total de todos los items
function recalculate_quote(){
    $item = [];
    $suptotal = 0;
    $taxes = 0;
    $shipping = 0;
    $total = 0;

    if(!isset($_SESSION['new_quote'])){
        return false;
    }
    //validar item
    $items = $_SESSION['new_quote']['item'];

    //si la liste de items esta vacia no se calcula nada
    if(!empty($items)){
        foreach ($items as $item) {
            $suptotal += $item['total'];
            $taxes += $item['taxes'];
        }
    }

    $shipping = $_SESSION['new_quote']['shipping'];
    $total = $suptotal + $taxes + $shipping;

    $_SESSION['new_quote']['suptotal'] = $suptotal;
    $_SESSION['new_quote']['taxes'] = $taxes;
    $_SESSION['new_quote']['shipping'] = $shipping;
    $_SESSION['new_quote']['total'] = $total;
    
    return true;
}

//reiniciar cotizacion
function restart_quote(){
    $_SESSION['new_quote'] = 
    [
        'number' => rand(111111, 999999),
        'name' => '',
        'company' => '',
        'email' => '',
        'items' => [],
        'suptotal' => 0,
        'txes' => 0,
        'shipping' => 0,
        'total' => 0
    ];
    return true;
}

//obtener los items
function get_items(){
    $items = [];
    //si no existe la cotizacion y el array esta vacio
    if(!isset($_SESSION['new_quote']['items'])){
        return $items;
    }
    //se asigna el valor si la otizacion existe
    $items = $_SESSION['new_quote']['item'];
    return $items;
}

//obtener items por id
function get_item($id){
    $items = get_items();

    //si no hay items
    if(empty($items)){
        return false;
    }

    //si hay items
    foreach($items as $item){
        //se busca en el array de items el id del parametro
        if($item['id'] === $id){
            return $item;
        }
    }

    //no hubo un resultado
    return false;
}

//eliminar item
function delete_items(){
    $_SESSION['new_quote']['items'] = [];

    recalculate_quote();

    return true;
}

//eliminar item por id
function delete_item($id){
    $items = get_items();

    //si no hay items
    if(empty($items)){
        return false;
    }

    //si hay items
    foreach($items as $i => $item){
        //se busca en el array de items el id del parametro y la posicion 
        if($item['id'] === $id){
            unset($_SESSION['new_quote']['items'][$i]);
            return true;
        }
    }

    //no hubo un resultado
    return false;
}

//agregar itms 
//separar la actualizacion
function add_item($item){
    $items = get_items();

    //si el id existe actualizamos la informacion 
    if(get_item($item['id']) !== false ){
        foreach ($items as $i => $e_item) {
            if($item['id'] === $e_item['id']){
                $_SESSION['new_quote']['items'][$i] = $item;
            }
            return  true;
        }
    }

    //si no existe en la lista se agrega
    $_SESSION['new_quote']['items'][] = $item;
    return true;
}

//creamos un json
function json_buold($status = 200, $data = null, $message = ''){
    if(empty($msj) || $msj == ''){
        switch ($status) {
            case 200:
                $msj = 'OK';
                break;
            case 201:
                $msj = 'Created';
                break;
            case 400:
                $msj = 'Invalid request';
                break;
            case 403:
                $msj = 'Access denied';
                break;
            case 404:
                $msj = 'Not found';
                break;
            case 500:
                $msj = 'Internal Server Error';
                break;
            case 550:
                $msj = 'Permission denied';
                break;
            default:
                break;
        }
    }

    $json = 
    [
        'status' => $status,
        'data' => $data,
        'msj' => $msj
    ];

    return json_encode($json);
}

//mostrar el json
function json_output($json){
    header('Acces-Control-Allow-Origin: *');
    header('Content-type: aplication/json;charset=utf-8');

    if(is_array($json)){
        $json = json_encode($json);
    }

    echo $json;

    return true;
}
?>