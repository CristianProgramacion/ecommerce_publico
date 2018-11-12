<?php include '../extend/header.php'; 

?>
<div class="container" style="margin-top: 3%;">
	<h2>Pantalones</h2>
	<div class="row">
		<?php 
			$sel_pantalones = $con->prepare("SELECT foto,precio, producto, clave FROM inventario WHERE categoria = 'PANTALONES' AND cantidad>0 ORDER BY id DESC LIMIT 4");
			$sel_pantalones->execute();
			  	while ($f_pantalones = $sel_pantalones->fetch()) { 
		 ?>
		 <div class="col-md-6 col-sm-12 col-lg-3">
		 	<div class="card" style="margin-top: 1%;">
		 			<img class="card-img-top" src="../../ecommerce/admin/<?php echo $f_pantalones['foto'] ?>" width="200" height="200">
		 			<div class="card-body">
		 				<h4 class="card-title"><?php echo $f_pantalones['producto']; ?></h4>
		 				<p class="card-text"><?php echo "S/.".number_format($f_pantalones['precio'], 2) ?></p>
		 				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_pantalones['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>
		 				<button class="btn btn-danger text-white float-right" onclick="enviar(this.value)" value="<?php echo $f_pantalones['clave'] ?>"><i class="fa fa-heart"></i></button>
		 			</div>
		 		</div>
		 </div>
		 <?php 
		}

		$sel_pantalones=null;
		  ?>
	</div>
</div>
<hr>


<div class="container" style="margin-top: 3%;">
	<h2>Casacas</h2>
	<div class="row">
		<?php 
			$sel_casacas = $con->prepare("SELECT foto,precio, producto, clave FROM inventario WHERE categoria = 'casacas' AND cantidad>0 ORDER BY id DESC LIMIT 4");
			$sel_casacas->execute();
			  	while ($f_casacas = $sel_casacas->fetch()) { 
		 ?>
		 <div class="col-md-6 col-sm-12 col-lg-3">
		 	<div class="card" style="margin-top: 1%;">
		 			<img class="card-img-top" src="../../ecommerce/admin/<?php echo $f_casacas['foto'] ?>" width="200" height="200">
		 			<div class="card-body">
		 				<h4 class="card-title"><?php echo $f_casacas['producto']; ?></h4>
		 				<p class="card-text"><?php echo "S/.".number_format($f_casacas['precio'], 2) ?></p>
		 				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_casacas['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>
		 				<button class="btn btn-danger text-white float-right" onclick="enviar(this.value)" value="<?php echo $f_casacas['clave'] ?>"><i class="fa fa-heart"></i></button>
		 			</div>
		 		</div>
		 </div>
		 <?php 
		}

		$sel_casacas=null;
		  ?>
	</div>
</div>
<hr>


<div class="container" style="margin-top: 3%;">
	<h2>Vestidos</h2>
	<div class="row">
		<?php 
			$sel_vestidos = $con->prepare("SELECT foto,precio, producto, clave FROM inventario WHERE categoria = 'vestidos' AND cantidad>0 ORDER BY id DESC LIMIT 4");
			$sel_vestidos->execute();
			  	while ($f_vestidos = $sel_vestidos->fetch()) { 
		 ?>
		 <div class="col-md-6 col-sm-12 col-lg-3">
		 	<div class="card" style="margin-top: 1%;">
		 			<img class="card-img-top" src="../../ecommerce/admin/<?php echo $f_vestidos['foto'] ?>" width="200" height="200">
		 			<div class="card-body">
		 				<h4 class="card-title"><?php echo $f_vestidos['producto']; ?></h4>
		 				<p class="card-text"><?php echo "S/.".number_format($f_vestidos['precio'], 2) ?></p>
		 				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_vestidos['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>
		 				<button class="btn btn-danger text-white float-right" onclick="enviar(this.value)" value="<?php echo $f_vestidos['clave'] ?>"><i class="fa fa-heart"></i></button>
		 			</div>
		 		</div>
		 </div>
		 <?php 
		}

		$sel_vestidos=null;
		  ?>
	</div>
</div>
<hr>


<div class="container" style="margin-top: 3%;">
	<h2>Blusas</h2>
	<div class="row">
		<?php 
			$sel_blusas = $con->prepare("SELECT foto,precio, producto, clave FROM inventario WHERE categoria = 'blusas' AND cantidad>0 ORDER BY id DESC LIMIT 4");
			$sel_blusas->execute();
			  	while ($f_blusas = $sel_blusas->fetch()) { 
		 ?>
		 <div class="col-md-6 col-sm-12 col-lg-3">
		 	<div class="card" style="margin-top: 1%;">
		 			<img class="card-img-top" src="../../ecommerce/admin/<?php echo $f_blusas['foto'] ?>" width="200" height="200">
		 			<div class="card-body">
		 				<h4 class="card-title"><?php echo $f_blusas['producto']; ?></h4>
		 				<p class="card-text"><?php echo "S/.".number_format($f_blusas['precio'], 2) ?></p>
		 				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_blusas['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>
		 				<button class="btn btn-danger text-white float-right" onclick="enviar(this.value)" value="<?php echo $f_blusas['clave'] ?>"><i class="fa fa-heart"></i></button>
		 			</div>
		 		</div>
		 </div>
		 <?php 
		}

		$sel_blusas=null;
		  ?>
	</div>
</div>
<hr>

<div class="container" style="margin-top: 3%;">
	<h2>Casacas</h2>
	<div class="row">
		<?php 
			$sel_camisas = $con->prepare("SELECT foto,precio, producto, clave FROM inventario WHERE categoria = 'camisas' AND cantidad>0 ORDER BY id DESC LIMIT 4");
			$sel_camisas->execute();
			  	while ($f_camisas = $sel_camisas->fetch()) { 
		 ?>
		 <div class="col-md-6 col-sm-12 col-lg-3">
		 	<div class="card" style="margin-top: 1%;">
		 			<img class="card-img-top" src="../../ecommerce/admin/<?php echo $f_camisas['foto'] ?>" width="200" height="200">
		 			<div class="card-body">
		 				<h4 class="card-title"><?php echo $f_camisas['producto']; ?></h4>
		 				<p class="card-text"><?php echo "S/.".number_format($f_camisas['precio'], 2) ?></p>
		 				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_camisas['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>
		 				<button class="btn btn-danger text-white float-right" onclick="enviar(this.value)" value="<?php echo $f_camisas['clave'] ?>"><i class="fa fa-heart"></i></button>
		 			</div>
		 		</div>
		 </div>
		 <?php 
		}

		$sel_camisas=null;
		  ?>
	</div>
</div>


<?php include '../extend/footer.php'; ?>



<script src="../js/deseos.js"></script>
</body>
</html>