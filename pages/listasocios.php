
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0"
    />
    <link rel="icon" href="../assets/logo/logo.png" type="logo" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <title>Tenis Club Correa - Torneo Amistad</title>
  </head>
  <body style="background-color: rgb(207, 207, 207)">
    <div id="inicio" class="container-fluid">
      <header>
        <!--Start Navbar-->
        <nav>
          <div class="navbar">
            <a href="#inicio"
              ><img class="logo" src="../assets/logo/logo.png" alt="logo_TCC"
            /></a>

            <ul>
              <li><a href="nuevosocio.html">Cargar Socios</a></li>
              <li><a href="listasocios.php">Listado de Socios</a></li>
              <li><a href="#!">Asistencias</a></li>
              <li><a href="#!">Dar de baja un Socio</a></li>
              <li><a href="#!">Contacto</a></li>
            </ul>

            <a class="ingreso" href="../index.html">Salir</a>
          </div>
        </nav>

        <!--End Navbar-->

        <!--Start Sidenav-->
        <div
          id="sidenav"
          class="sidenav navbar navbar-light text-center"
          data-mdb-right="true"
        >
          <div class="imgSidenav">
            <img src="../assets/logo/logo.png" alt="logo_TCC" loading="lazy" />
            <button
              id="btnHamburguer"
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
            >
              <i class="fas fa-bars"></i>
            </button>
          </div>
          <div
            class="side-nav collapse collapse-horizontal"
            id="collapseWidthExample"
          >
            <button
              id="btnHamburguer"
              class="btnVisible navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
            >
              <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 sidenav-menu">
              <li class="nav-li nav-item">
                <a class="nav-link active" href="#!">Cargar Socios</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="#!">Listado de Socios</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="#!">Asistencias</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="#!">Dar de baja un Socio</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="#!">Contacto</a>
              </li>
            </ul>

            <a class="ingreso" href="../index.html">Salir</a>
          </div>
        </div>
        <!--End Sidenav-->
      </header>
      <br /><br /><br />

    <form method="POST" class="contact-form row">
        
    <div class="tabla text-center">
        <table class="table">
            <thead class="table-dark">
                <th>numero</th>
                <th>nombre</th>
                <th>domicilio</th>
                <th>localidad</th>
                <th>sexo</th>
                <th>sangre</th>
                <th>dni</th>
                <th>nacimiento</th>
                <th>ingreso</th>
                <th>estado civil</th>
                <th>telefono</th>
                <th>codigo cobrador</th>
            </thead>

        <!--incluir lista desde archivo php-->
            <?php
                include '../php/listasocios.php';
            ?>
    
        </table>
    </div>
    </form>
  
       <!--Start Footer-->
      <footer
      class="footer text-center text-white"
    >
      <!-- Copyright -->
      <div
        class="text-center p-3"
        style="background-color: rgba(0, 0, 0, 0.2)"
      >
        © 2022 Copyright:
        <a
          class="text-white"
          target="_blank"
          href="http://www.mgsolutions.com.ar"
          >MG Solutions</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!--End Footer-->
  </div>

  <script src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>
  <!-- MDB -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>
</html>
