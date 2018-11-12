<?php include '../extend/header.php'; 
$name = htmlentities($_GET['name']);

?>
<div class="container" style="margin-top: 1%;">
	<h1><?php echo $name ?></h1>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>