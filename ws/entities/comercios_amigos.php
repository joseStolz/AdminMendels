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
    global $ip;
    $query = "SELECT * FROM `comercios_amigos`";
    $sth = mysqli_query($con, $query);
    $comercios = array();
    $finalArray = array();
    while ($r = mysqli_fetch_assoc($sth)) {
        $comercios['id_comercio'] = $r['id_comercio'];
        $comercios['nombre_comercio'] = $r['nombre_comercio'];              
        $comercios['logo_comercio'] = $r['logo_comercio'];
        $comercios['places']= array();
        $query2 = "SELECT * FROM `comerciosxlugares` WHERE id_comercio = ".$r['id_comercio'];

        $sth2 = mysqli_query($con, $query2);
         while ($r2 = mysqli_fetch_assoc($sth2)) {
            $comercios['places'] = $r2;      
         }
         array_push($finalArray,$comercios);
    }
    print json_encode($finalArray);
}