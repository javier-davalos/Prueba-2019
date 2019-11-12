<?php include ('funciones/funciones.php')?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Servicios | Mi empresa <?php echo parametros()['conoce mas']; ?></title>
	<meta name="description" content="">
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!-- INICIO ENCABEZADO -->
	<?php include 'includes/header.php'; ?>
	<!-- FIN ENCABEZADO -->
	
	<!-- INICIO CONTENIDO -->
	<main>
		<section class="servicios p-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="title">Servicios que ofrecemos</h3>
					</div>
					<?php foreach (getServicios(12) as $fila) { ?>	
						<div class="col-sm-4">
							<div class="box-servicios">
								<a href="#">
									<img src="images/servicios/<?php  echo $fila ['imagen'] ?>">
								</a>

								<h4>Nombre del Servicio</h4>

								<a href="detalles.php?id=<?php echo $fila ['id'];  ?> ">conoce más</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
	</main>
	<!-- FIN CONTENIDO -->

	<!-- INICIO PIE -->
	<?php include 'includes/footer.php'; ?>
	<!-- FIN PIE -->

	<!-- INICIO SCRIPT -->
	<?php include 'includes/script.php'; ?>
	<!-- FIN SCRIPT -->
</body>
</html>