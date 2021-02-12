<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Actividades Primaria</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets/css/index.css" rel="stylesheet">
  <link href="puzzle.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include '../partials/sidebar.php'; ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

   <?php include '../partials/nav.php'; ?>

 <div class="container-fluid">
        <h1 class="mt-4">Actividades Primaria, el portal educativo para aprender jugando</h1> <br><br>
        <h4>Mantener a los niños centrados y atentos a la hora de hacer ejercicios que desarrollen sus capacidades
         de atención o de resolución de problemas es difícil. Sobretodo si queremos que no se aburran,
          pero gracias a los juegos de puzzles gratis para niños que ofrecemos en Actividades Primaria,
           ahora puedes hacerlo online, de forma gratuita y desde cualquier dispositivo.</h4>
           <br>
           <br>
           <br>
<div class="row">
		<div class="col-md-4">
        <img src="animales-img/animales.jpg" alt="">
		</div>
		<div class="col-md-4">
        <table>
        <tr>
            <td><img id="caja7" draggable="true" src="animales-img/siete.jpg" alt=""></td>
            <td><img id="caja6" draggable="true" src="animales-img/seis.jpg" alt=""></td>
            <td><img id="caja9" draggable="true" src="animales-img/nueve.jpg" alt=""></td>
        </tr>
        <tr>
            <td><img id="caja1" draggable="true" src="animales-img/uno.jpg" alt=""></td>
            <td><img id="caja5" draggable="true" src="animales-img/cinco.jpg" alt=""></td>
            <td><img id="caja3" draggable="true" src="animales-img/tres.jpg" alt=""></td>
        </tr>
        <tr>
            <td><img id="caja4" draggable="true" src="animales-img/cuatro.jpg" alt=""></td>
            <td><img id="caja2" draggable="true" src="animales-img/dos.jpg" alt=""></td>
            <td><img id="caja8" draggable="true" src="animales-img/ocho.jpg" alt=""></td>
        </tr>
    </table>
		</div>
		<div class="col-md-4">
        <table>
        <tr>
            <td id="contenedor1"></td>
            <td id="contenedor2"></td>
            <td id="contenedor3"></td>
        </tr>
        <tr>
            <td id="contenedor4"></td>
            <td id="contenedor5"></td>
            <td id="contenedor6"></td>
        </tr>
        <tr>
            <td id="contenedor7"></td>
            <td id="contenedor8"></td>
            <td id="contenedor9"></td>
        </tr>
    </table>
		</div>
</div>
    <!--row-->
      </div>
      <!--container-fluid-->
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

<script src="animales.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="sweetalert2.min.js"></script>

    <!-- Include a polyfill for ES6 Promises (optional) for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
