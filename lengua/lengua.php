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
        <h4>En los últimos años, Internet se ha convertido en una herramienta imprescindible.
           Con las TIC’s cada vez más integradas en la educación, 
           Actividades Primaria surge como una fuente de juegos y otros recursos didácticos 
		   gratuitos de gran calidad para alumnos y alumnas de primer ciclo de Educación Primaria.</h4>
           <br>
           <br>
           <br>
   <div class="main-container">
		
			<div class="card">
				<h5 class="card-header">
					Silabas
				</h5>
				<div class="card-body">
                  <a href="silabas.php">
				      <img src="img/silabas.jfif" alt="">
				  </a>
				</div>
				<div class="card-footer">
					<span>Construye palabras</span>
				</div>
			</div>
		
		
			<div class="card">
				<h5 class="card-header">
					Punto y mayúscula
				</h5>
				<div class="card-body">
                <a href="calculoresta.php">
				      <img src="img/construccion.jpg" alt="">
				  </a>
				</div>
				<div class="card-footer">
					Escribe donde corresponda
				</div>
			</div>
		
			<div class="card">
				<h5 class="card-header">
					Abecedario
				</h5>
				<div class="card-body">
                <a href="animales.php">
				      <img src="img/construccion.jpg" alt="">
				  </a>
				</div>
				<div class="card-footer">
					Aprende el abecedario
				</div>
			</div>
		
	</div>
    <!--row-->
      </div>
      <!--container-fluid-->
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
