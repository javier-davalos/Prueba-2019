<?php include ('funciones/funciones.php')?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Clientes | Mi empresa</title>
	<meta name="description" content="">
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!-- INICIO ENCABEZADO -->
	<?php include 'includes/header.php'; ?>
	<!-- FIN ENCABEZADO -->
	
	<!-- INICIO CONTENIDO -->
	<main>
		<section class="section-clientes">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="title">Clientes</h3>
					</div>
					<?php for ($i=0; $i < 20; $i++) { ?>
						<div class="col-sm-4">
							<div class="box-clientes">
								<a href="#">
									<img src="images/clientes/1.png">
								</a>
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