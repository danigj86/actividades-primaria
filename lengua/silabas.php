<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Actividades Primaria - Sílabas</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets/css/index.css" rel="stylesheet">
  <link rel="stylesheet" href="css/silabas.css">

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
        <h4>La sílaba es la emisión de fonemas en un mismo núcleo fónico. Es la división fonológica de 
        una palabra. Por ejemplo: a-mi-go, ca-ba-llo. La separación en sílabas de una palabra es 
        importante ya que de esto dependerá que la palabra sea aguda, grave, esdrújula o sobreesdrújula.</h4>
           <br>
           <br>
           <h2>Las sílabas</h2>
           <h3>Fíjate en la imagen e intenta colocar las sílabas en el orden adecuado para formar la palabra. ¡Ánimo, puedes conseguirlo!</h3>
           <div class="main-container">
        <img src="img/pizarra.png" alt="">
        <table>
            <tr>
                <td id="c1" class="border"></td>
                <td id="c2" class="border"></td>
                <td id="c3" class="border"></td>
            </tr>
            <tr>
                <td><p id="ca2" draggable="true"  alt="">ZA</p></td>
                <td><p id="ca3" draggable="true"  alt="">RRA</p></td>
                <td><p id="ca1" draggable="true"  alt="">PI</p></td>
            </tr>
        </table>
        
        </div>
        <br><br><br><br><br><br><br>
        <hr>
        <p>Footer aquí</p>
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
<script src="js/silabas.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
