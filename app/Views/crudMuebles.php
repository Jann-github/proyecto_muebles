<!DOCTYPE html>
<html>
<head>
	<title>Curd con ajax</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/librerias/bootstrap/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/librerias/fontawesome/css/all.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/librerias/datatable/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/librerias/datatable/dataTables.bootstrap4.min.css'); ?>">

	
</head>
<body>
	<div class="container">
		<h2 class="text-center">Crud de venta de muebles</h2>
		<div class="row">
			<div class="col-sm-12">
				<div id="tablaCrudMuebles"></div>
			</div>
		</div>
	</div>
	

	<script src="<?php echo base_url('/librerias/jquery-3.5.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('/librerias/bootstrap/popper.min.js'); ?>"></script>
	<script src="<?php echo base_url('/librerias/bootstrap/bootstrap.min.j'); ?>s"></script>
	<script src="<?php echo base_url('/librerias/datatable/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('/librerias/datatable/dataTables.bootstrap4.min.js'); ?>"></script>
	<script src="<?php echo base_url('/librerias/sweetalert.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/muebles.js'); ?>"></script>
	<script>
		var base_url = "<?php echo base_url(); ?>"
	</script>
</body>
</html>