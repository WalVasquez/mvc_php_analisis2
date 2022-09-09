
 <?php
   ob_start();
   require_once '../controllers/conexion.php';
      $db_conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_name,$port);
      $db_conexion -> real_query ("SELECT * FROM producto");
      $resultado = $db_conexion -> use_result();
      while ($fila = $resultado ->fetch_assoc()){
         echo "<tr data-id=" . $fila['idProducto'].">";
            echo "<td>". $fila['producto']."</td>";
            echo "<td>". $fila['precio']."</td>";
            echo "<td>". $fila['descripcion']."</td>";
            echo "<td>". $fila['stock']."</td>";
            echo "<td>"."<a href=".'"../controllers/Productos/eliminarProducto.php?idProducto='. $fila['idProducto'].'" class="btn btn-danger" > <i class="fas fa-trash-alt"></i></a><a href="../controllers/Productos/modificarProducto.php?idProducto=' .$fila['idProducto'].'" class="btn btn-secondary"><i class="fas fa-marker"></i></a></td>';
         echo "</tr>";
      }
      $db_conexion -> close();
   
 ?>
