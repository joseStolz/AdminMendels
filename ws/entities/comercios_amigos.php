<?php 

function insert_comercioAmigo($business_logo, $business_name) {
    global $con;
    $query = "INSERT INTO `comercios_amigos` (`id_comercio`, `nombre_comercio`, `logo_comercio`) VALUES (NULL, '$business_name', '$business_logo');";
    $result = mysqli_query($con, $query);
    if ($result === true) {
        echo 1;
    } else {
        echo mysqli_error($con);
    }
}

function update_comercioAmigo($id,$business_logo, $business_name) {
    global $con;
    $query = "UPDATE `comercios_amigos` SET `logo_comercio` = '$business_logo',SET `nombre_comercio` = '$business_name'  WHERE `comercios_amigos`.`id_comercio` = $id;";
    $result = mysqli_query($con, $query);
    if ($result === true) {
        echo 1;
    } else {
        echo mysqli_error($con);
    }
}

function delete_comercioAmigo($id) {
    global $con;
    $query = "DELETE FROM `comercios_amigos` WHERE id_comercio = $id";
    $result = mysqli_query($con, $query);
    if ($result === true) {
        echo 1;
    } else {
        echo mysqli_error($con);
    }
}

function select_comercioAmigo($id){
	global $con;
    $query = "SELECT * FROM `comercios_amigos`";
    $result = mysqli_query($con, $query);
    if ($result === true) {
        echo 1;
    } else {
        echo mysqli_error($con);
    }
}