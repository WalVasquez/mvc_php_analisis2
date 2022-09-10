<?php
    if(isset($_GET['idProducto'])) {
        ob_start();
        require_once '../conexion.php';
     
            $db_conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_name,$port);
            $id = $_GET['idProducto'];
            $sql= " DELETE FROM producto WHERE idProducto= $id";
            if($db_conexion -> query($sql) === true){
                $db_conexion -> close();
                header('Location: ../../views/productos.php');

            }else{
                echo "Error" . $sql."<br>".$db_conexion -> close();
            }
        }
?>