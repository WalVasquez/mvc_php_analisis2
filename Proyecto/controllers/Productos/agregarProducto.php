<?php
    if(isset($_POST["btn_agregar_producto"])){
        ob_start();
        require_once '../conexion.php';
     
        $db_conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_name,$port);
        $txt_producto = utf8_decode($_POST["txt_producto"]);
        $txt_precio = utf8_decode($_POST["txt_precio_costo"]);
        $txt_descripcion = utf8_decode($_POST["txt_descripcion"]);
        $txt_existencias = utf8_decode($_POST["txt_stock"]);

        $sql= "INSERT INTO producto (producto,precio,descripcion,stock) 
                VALUES ('".$txt_producto."', '".$txt_precio."', '".$txt_descripcion."', '".$txt_existencias."')";
        if($db_conexion -> query($sql) === true){
            $db_conexion -> close();
            echo "Exito";
            header('Location: ../../views/productos.php');

        }else{
            echo "Error" . $sql."<br>".$db_conexion -> close();
        }
    }
?>