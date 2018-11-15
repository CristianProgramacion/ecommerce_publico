<?php 
	include '../conexion/conexion.php';
	$clave= htmlentities($_GET['clave']);

	$sel = $con->prepare("SELECT * FROM inventario WHERE clave = ?");
	$sel->execute(array($clave));
	  	if ($f = $sel->fetch()) {
	  	}

	  	 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>

<body class="bg-light" >
<div class="conteiner" style="margin-top: 1%; margin-bottom: 1%;">
	<div class="card text-white bg-secondary">
			<div class="card-header"><h4 class="card-title"><?php echo $f['producto'] ?></h4></div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img  class="d-block w-100" src="../../ecommerce/admin/<?php echo $f['foto'] ?>" width="100%" height="70%">
								</div>
								<?php 
									$sel_img = $con->prepare("SELECT ruta FROM imagenes WHERE clave_producto = ?");
									$sel_img->execute(array($clave));
									  	while ($f_img = $sel_img->fetch()) { 
									  	
								 ?>

								 <div class="carousel-item">
									<img  class="d-block w-100" src="../../ecommerce/admin/<?php echo $f_img['ruta'] ?>" width="100%" height="70%">
								</div>

								 <?php  }
								 	$sel_img = null;
								  ?>
							</div>

							<a class="carousel-control-prev" href="#carouselExampleControls" rol="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hideen="true"></span>
								<span class="sr-only">Previous</span>
							</a>

							<a class="carousel-control-next" href="#carouselExampleControls" rol="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hideen="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-6">
						<h3><?php echo "S/.". number_format($f['precio'], 2) ?></h3>
		                <input type="hidden" id="clave_producto" value="<?php echo $clave ?>">
		                <input type="hidden" id="producto" value="<?php echo $f['producto'] ?>">
		                <input type="hidden" id="foto" value="<?php echo $f['foto'] ?>">
		                <input type="hidden" id="descripcion" value="<?php echo $f['descripcion'] ?>">
		                <input type="hidden" id="precio" value="<?php echo $f['precio'] ?>">
		                <div class="form-group">
		                  <input type="number" requred id="cantidad" class="form-control" placeholder="Cantidad" min="1" max="<?php echo $f['cantidad'] ?>" >
		                </div>
		                <button id="agregar_carrito" class="btn btn-primary" >Agregar al carrito</button>
		                <div class="res_carrito" ></div>
		                <p class="text-justify" ><?php echo $f['descripcion'] ?></p>
					</div>
				</div>
			</div>
		</div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js" ></script>
<script src="../js/bootbox.min.js" ></script>
</body>
</html>