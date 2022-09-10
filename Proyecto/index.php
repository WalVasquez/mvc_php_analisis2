<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <title>MVC </title>
        <link rel="stylesheet" href="css/estilos.css">
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
            <a href="index.php">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Inicio</span>
            </a>
        </li>
        <li>
            <a href="views/productos.php">
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
        <div class="text">Integrantes:</div>
        <br>
        <div class="name">
          <ul>
              <li>Marvin Estuardo Leiva Santizo<span style="padding-left:38px;"></span>0910-19-10717</li>
              <li>Bryan Alexander Melgar Caná<span style="padding-left:36px;"></span>0910-19-7991 </li>
              <li>Esdras Natanael Ismatul Roque<span style="padding-left:26px;"></span>0910-19-12558</li>
              <li>Walter Eduardo Vásquez Moya<span style="padding-left:31px;"></span>1290-18-18389</li>
              <li>Wilson Amilkar Curruchich Par<span style="padding-left:33px;"></span>0910-16-10610</li>
              <li>Pablo René López Monzón <span style="padding-left:65px;"></span>0910-18-10621</li>
          </ul>
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