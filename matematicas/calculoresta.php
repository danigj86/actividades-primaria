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
  <link rel="stylesheet" href="css/calculosuma.css">

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
        <h4>Mantener a los más pequeños/as a la hora de hacer ejercicios que desarrollen sus capacidades
         de atención o de resolución de problemas es difícil. Sobretodo si queremos que no se aburran,
          pero gracias a los juegos de puzzles que ofrecemos en Actividades Primaria,
           ahora puedes hacerlo online, de forma gratuita y desde cualquier dispositivo.</h4>
           <br>
           <br>
           <br>
           <div class="container-botones">
           <button id="empezar">Empieza a calcular</button>
           <button id="corregir">Corregir</button>
           <button id="reiniciar">Reiniciar</button>
           </div>
           
           <br><br>
           <div class="container-tabla">
           <table>

          </table>
           </div>
           <br><br>
      </div>
      <!--container-fluid-->
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
   <!-- Sweet Alert -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <!-- Include a polyfill for ES6 Promises (optional) for IE11 -->
   <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/calculoresta.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
