<!DOCTYPE>
<html lang="es">
<head>
    <title>Registro Minutos</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
    <script src="js/bootstrap.js"></script>
    <style>
    	label{
    		font-size: 20px;
    		font-weight: bold;
    	}
    	h2{
    		color: red;
    	}
    	#tam{
			font-size: 20px;
    	}
    </style>
    <script>
    	$(document).ready(function(){
    		//alert("bien");
    		$('#na').keyup(function(){
    			var valor = $(this).val();
    			//alert("valor"+valor);
    			total = valor * 150;
    			$('#totalN').val(total);

    		}).keyup();

    		$('#ve').keyup(function(){
    			var valor = $(this).val();
    			//alert("valor"+valor);
    			   total = valor * 200;
    			   $('#totalV').val(total);
    		}).keyup();

    		$('#es').keyup(function(){
    			var valor = $(this).val();
    			//alert("valor"+valor);
    			   total = valor * 300;
    			$('#totalE').val(total);
    		}).keyup();

    		$('#ar').keyup(function(){
    			var valor = $(this).val();
    			//alert("valor"+valor);
    			   total = valor * 400;
    			$('#totalA').val(total);
    		}).keyup();

    		$('#ee').keyup(function(){
    			var valor = $(this).val();
    			//alert("valor"+valor);
    			   total = valor * 200;
    			$('#totalU').val(total);
    		}).keyup();

    		$('#otr').keyup(function(){
    			var valor = $(this).val();
    			var otro = $('#otroValor').val();
    			//alert("valor"+valor);
    			   total = valor * otro;
    			$('#totalO').val(total);
    		}).keyup();
    		
    	});
		//var cont =0;
		function contador(){
    		var contador = document.getElementById("totalDia");
    		var nac = $('#totalN').val();
    		var ven = $('#totalV').val();
    		var esp = $('#totalE').val();
    		var arg = $('#totalA').val();
    		var eeu = $('#totalU').val();
    		var otr = $('#totalO').val();
    		var totaldia = parseInt(nac) + parseInt(ven) + parseInt(esp)
    			+ parseInt(arg)+ parseInt(eeu) + parseInt(otr);
    		//contador.value= totaldia;
    		$("#totalDia").val(totaldia);
    		//cont++;
    	}
    </script>
</head>
	<body onLoad="setInterval('contador()',1000);">
		<header>
			<div class="container">
				<p class="page-header">
					<h1 class="text-center">Registrar Dia Minutos</h1><br><br>
				</p>
				<strong id="tam"><?php date_default_timezone_set('America/Bogota'); 
						                          $fecha = date("Y-m-d"); echo $fecha;?></strong>
			</div>
		</header>
		<section class="container">
			<section class="row">
				<div class="class7">
					<form action="includes/acciones.php" method="post">
						<table class="table table-bordered table-condensed">
							<thead>
								<tr>
									<th>
										<label>Fecha</label>
									</th>
									<th>
										<label>Nacionales</label>
									</th>
									<th>
										<label>Venezuela</label>
									</th>
									<th>
										<label>España</label>
									</th>
									<th>
										<label>Argentina</label>
									</th>
									<th>
										<label>EE.UU</label>
									</th>
									<th>
										<label><input type="text" name="nomOtro" placeholder="Otro" class="input-small"></label>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong><input type="date" name="fecha"></strong></td>
									<td>150</td>
									<td>200</td>
									<td>300</td>
									<td>400</td>
									<td>200</td>
									<td><input type="text" name="otroValor" id="otroValor" class="input-small"></td>
								</tr>
								<tr>
									<td>N° de Minutos</td>
									<td><input type="text" name="nacionales" id="na" class="input-small" autofocus></td>
									<td><input type="text" name="venezuela" id="ve" class="input-small"></td>
									<td><input type="text" name="españa" id="es" class="input-small"></td>
									<td><input type="text" name="argentina" id="ar" class="input-small"></td>
									<td><input type="text" name="eeuu" id="ee" class="input-small"></td>
									<td><input type="text" name="otro" id="otr" class="input-small"></td>
								</tr>
								<tr>
									<td>Total</td>
									<td><input type="text" name="totalN" id="totalN" class="input-small" ></td>
									<td><input type="text" name="totalV" id="totalV" class="input-small" ></td>
									<td><input type="text" name="totalE" id="totalE" class="input-small" ></td>
									<td><input type="text" name="totalA" id="totalA" class="input-small" ></td>
									<td><input type="text" name="totalU" id="totalU" class="input-small" ></td>
									<td><input type="text" name="totalO" id="totalO" class="input-small" ></td>
								</tr>
								<tr>
									<td><label>Total del Dia</label></td>
									<td><input type="text" name="totaldia" id="totalDia" class="input-small"></td>
									<td></td>
								</tr>
							</tbody>
						</table> <br><br>
						<input type="hidden" name="regMinutos">
						<button type="submit" class="btn btn-primary">Guardar</button> <a href="registros.php" target="_blank" class="btn btn-success">ver registro</a> <button id="eli" class="btn btn-danger" name="limpiar">Limpiar Base de Datos</button> <input type="text" required class="input-small">
					</form>
				</div>
			</section>
			<section class="row">
				<div class="span6"> <br><br>
					<h2>Total: <?php
											require_once('includes/funciones.php');
											$objeto = new funciones();
											$objeto->totalmesgatos();
					                    ?>
					        </h2>
				</div>
					<div class="span6">
						<h2 class="text-center">Gastos</h2>
						<form action="includes/acciones.php" method="post" class="form-horizontal">
							<div class="control-group">
						          <div class="controls">
						          	<strong><?php date_default_timezone_set('America/Bogota'); 
						          	$fecha = date("Y-m-d"); echo $fecha; ?></strong>
						          </div>
							</div>
						    <div class="control-group">
							    <div class="controls">
							      <textarea name="concepto" id="" cols="5" rows="3" required placeholder="Concepto"></textarea>
							    </div>
							</div>
							<div class="control-group">
								<div class="controls">
									<input type="text" name="monto" required placeholder="Monto">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button class="btn btn-primary" name="guarGasto">Guardar</button>
									<a href="gastos.php" target="_blank" class="btn btn-success">Ver Gastos</a>
								</div>
							</div>
						</form>
					</div>
			</section>
		</section>
	</body>
</html>