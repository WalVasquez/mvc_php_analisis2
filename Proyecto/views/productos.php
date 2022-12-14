<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <title>MVC </title>
        <link rel="stylesheet" href="../css/estilos.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-code-block icon'></i>
        <div class="logo_name">ANALISIS II</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="../index.php">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Inicio</span>
            </a>
        </li>
        <li>
            <a href="productos.php">
                    <i class='bx bxl-apple'></i>
                    <span class="links_name">Productos</span>
                    <span class="tooltip">Productos</span>
            </a>
            
        </li>
    </ul>
  </div>
  <section class="home-section">
         <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Font Awsome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

      <div class="text">Formulario Productos</div>
      <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm">
                        <form class="form-horizontal" action="../controllers/Productos/agregarProducto.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label for="lbl_producto" class="form-label"><b>Producto</b></label>
                                        <input id="txt_producto" name="txt_producto" type="text" placeholder="Producto: producto" class="form-control">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="lbl_precio_costo" class="form-label"><b>Precio Costo</b></label>
                                        <input id="txt_precio_costo" name="txt_precio_costo" type="number" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="lbl_descripcion" class="form-label"><b>Descripci??n</b></label>
                                        <input class="form-control" id="txt_descripcion" name="txt_descripcion" placeholder="Ingrese la descripcion del producto." ></input>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="lbl_descripcion" class="form-label"><b>Existencias</b></label>
                                        <input class="form-control" id="txt_stock" name="txt_stock" placeholder="Existencias: 10" ></input>
                                    </div>
                                    <div class="mb-3">
                                        <br>
                                        <input type="submit" name="btn_agregar_producto" id="btn_agregar_producto" class="btn btn-success" value="Agregar">
                                        
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <table class="table table-striped table-responsive">
                            <thead class="table-dark">
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Descripci??n</th>
                                    <th>Existencias</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                            ob_start();

                                            require_once '../controllers/Productos/ListarProductos.php';

                                        ?>                 
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   }
  }
  </script>
</body>
</html>