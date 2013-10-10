<!DOCTYPE>
<html lang="es">
<head>
    <title>Gastos</title>
    <meta charset="UTF-8"/>
     <link rel="stylesheet" href="css/bootstrap.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
    <script src="js/bootstrap.js"></script>
    <style>
    	h2{
    		color: red;
    	}
    </style>
</head>
	<body>
		<header>
			<div class="container">
				<p class="page-header">
					<h1 class="text-center">Lista de Gastos</h1>
				</p>
			</div>
			<h2 class="text-center">Total Mes: <?php 
													require_once('includes/funciones.php');
													$objeto = new funciones();
													$objeto->totalgastos();
											    ?>
			</h2>
		</header>
		<section class="container">
			<section class="row">
				<section class="span12">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>Fecha</th>
								<th>Concepto</th>
								<th>Monto</th>
							</tr>
						</thead>
						<body>
							<?php 
								require_once('includes/funciones.php');
								$objeto = new funciones();
								$objeto->vergastos();
							?>
						</body>
					</table>
				</section>
			</section>
		</section>
	</body>
</html>