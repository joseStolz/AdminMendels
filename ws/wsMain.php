<?php header('Access-Control-Allow-Headers: X-Requested-With, origin, content-type'); ?>
<?php
require 'classes/connection.php';
require 'classes/secrets.php';
require 'classes/fileUpload.php';
require 'entities/comercios_amigos.php';



function utf8_converter($array) {
    array_walk_recursive($array, function(&$item, $key) {
        if (!mb_detect_encoding($item, 'utf-8', true)) {
            $item = utf8_encode($item);
        }
    });
    return $array;
}


$action = isset($_GET["action"]) ? $_GET["action"] : (isset($_POST["action"]) ? $_POST["action"] : "0");

switch ($action) {	
	case 'insert_comercioAmigo':
        $business_logo = isset($_FILES["logo_comercio"]) ? $_FILES["logo_comercio"] : (isset($_FILES["logo_comercio"]) ? $_FILES["logo_comercio"] : "0");
        $business_name = isset($_GET["nombre_comercio"]) ? $_GET["nombre_comercio"] : (isset($_POST["nombre_comercio"]) ? $_POST["nombre_comercio"] : "0");
		insert_comercioAmigo($business_logo,$business_name);
	break;
	case 'update_comercioAmigo':
	    $id = isset($_FILES["id"]) ? $_FILES["id"] : (isset($_FILES["id"]) ? $_FILES["id"] : "0");
        $business_logo = isset($_FILES["logo_comercio"]) ? $_FILES["logo_comercio"] : (isset($_FILES["logo_comercio"]) ? $_FILES["logo_comercio"] : "0");
        $business_name = isset($_GET["nombre_comercio"]) ? $_GET["nombre_comercio"] : (isset($_POST["nombre_comercio"]) ? $_POST["nombre_comercio"] : "0");
		update_comercioAmigo($id,$business_logo,$business_name);
	break;
	case 'delete_comercioAmigo':
	    $id = isset($_GET["id"]) ? $_GET["id"] : (isset($_POST["id"]) ? $_POST["id"] : "0");
		delete_comercioAmigo($id,$business_logo,$business_name);
	break;
	case 'select_comercioAmigo':
	    $id = isset($_GET["id"]) ? $_GET["id"] : (isset($_POST["id"]) ? $_POST["id"] : "0");
		select_comercioAmigo($id);
	break;	
}