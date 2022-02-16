<?php

include_once('conexion.php');
if(isset($_POST['add'])){
    $database = new ConectarDB();
    $db = $database->open();
    try{
        $stmt = $db->prepare("INSERT INTRO personas (Nombre,Telefono,Correo,Direccion) VALUES
         (:nombre,:telefono,:correo,:direccion)");
        $_SESSION['message'] = ($stmt->execute(array(':nombre'=>$_POST['Nombre'],
            ':nombre'=>$_POST['Nombre'])));
    }catch (Exception $e){
    echo $e->getMessage();
    }

}else{

}


?>
