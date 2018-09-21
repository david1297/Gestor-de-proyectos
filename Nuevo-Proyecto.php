<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	require_once ("config/db.php");
	require_once ("config/conexion.php");
	$Inicio="";
	$Proyectos="active";
	$PCrear="active";
	$PConsultar="";
	$Usuarios="";
	$UCrear="";
	$UConsultar="";
	$Notificaciones="";
	$Reportes="";
?>
<!doctype html>
<html lang="es">
<head>
	<?php include("head.php");?>
</head>
<body>
	<div id="wrapper">
		<?php
		include("Menu.php");
		?>
		<div id="main-content">
			<div class="container-fluid">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Nuevo Proyecto</h4>
					</div>
					<div class="panel-body">
					<?php 
						include("modal/buscar_productos.php");
						include("modal/registro_clientes.php");
						include("modal/registro_productos.php");
						include("modal/Buscar_Clientes.php");
					?>
						<form class="form-horizontal" role="form" id="datos_factura">
							<div class="form-group container-fluid">
								<div class="row">
									<div class="col-md-4">
										<label for="nombre_cliente" class="control-label">Cliente</label>
								 		<div class="input-group">
								 			<input class="form-control hidden" type="text" id="Nit_cliente"  required readonly>
											<input class="form-control" type="text" id="Nombre_cliente" placeholder="Selecciona un cliente" required readonly>
											<span class="input-group-btn">
												<button type="button" class="btn btn-default" data-toggle="modal" data-target="#BuscarCliente"><span class="glyphicon glyphicon-search"></span></button>
											</span>
										</div>
									</div>
									<div class="col-md-4">
										<label for="tel1" class="control-label">Teléfono</label>
										<input type="text" class="form-control " id="Telefono_cliente" placeholder="Teléfono" readonly>
									</div>
									<div class="col-md-4">
										<label for="mail" class="control-label">Correo</label>
										<input type="text" class="form-control" id="Correo_cliente" placeholder="Email" readonly>
									</div>	
								</div>
								<div class="row">
									<div class="col-md-4">
										<label for="empresa" class="control-label">Vendedor</label>
										<select class="form-control" id="id_vendedor">
											<?php
												$sql_vendedor=mysqli_query($con,"select * from users order by lastname");
												while ($rw=mysqli_fetch_array($sql_vendedor)){
													$id_vendedor=$rw["user_id"];
													$nombre_vendedor=$rw["firstname"]." ".$rw["lastname"];
													if ($id_vendedor==$_SESSION['user_id']){
														$selected="selected";
													} else {
														$selected="";
													}
													?>
													<option value="<?php echo $id_vendedor?>" <?php echo $selected;?>><?php echo $nombre_vendedor?></option>
													<?php
												}
											?>
										</select>
									</div>	
									<div class="col-md-4">
										<label for="tel2" class="control-label">Fecha</label>
										<input type="text" class="form-control" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
									</div>	
									<div class="col-md-4">
										<label for="email" class="col-md-1 control-label">Pago</label>
										<select class='form-control' id="condiciones">
											<option value="1">Efectivo</option>
											<option value="2">Cheque</option>
											<option value="3">Transferencia bancaria</option>
											<option value="4">Crédito</option>
										</select>
									</div>										
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<div class="pull-right">
											<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
									 			<span class="glyphicon glyphicon-plus"></span> Nuevo producto
											</button>
											<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
									 			<span class="glyphicon glyphicon-user"></span> Nuevo cliente
											</button>
											<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
									 			<span class="glyphicon glyphicon-search"></span> Agregar productos
											</button>						
											<button type="submit" class="btn btn-default">
									  			<span class="glyphicon glyphicon-print"></span> Imprimir
											</button>
										</div>	
									</div>
								</div>
							</div>	
						</form>		
						<div id="resultados" class='col-md-12' style="margin-top:10px">
						<!-- Carga los datos ajax -->		
						</div>		
					</div>
				</div>		
		  		<div class="row-fluid">
					<div class="col-md-12">
					</div>	
		 		</div>
			</div>
			<div class="clearfix"></div>
			<footer>
				<p class="copyright">&copy; Copyright <a href="https://www.tupro.com.co/" target="_blank">TuPro Creativo. </a>Todos los derechos reservados</p>
			</footer>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/metisMenu/metisMenu.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/scripts/common.js"></script>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/nueva_factura.js"></script>
	<script type="text/javascript" src="js/BuscarCliente.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
	$(function() {
		// photo upload
		$('#btn-upload-photo').on('click', function() {
			$(this).siblings('#filePhoto').trigger('click');
		});

		// plans
		$('.btn-choose-plan').on('click', function() {
			$('.plan').removeClass('selected-plan');
			$('.plan-title span').find('i').remove();

			$(this).parent().addClass('selected-plan');
			$(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
		});
	});
	</script>
	<script>
		$(function() {
						$("#nombre_cliente").autocomplete({
							source: "./ajax/autocomplete/clientes.php",
							minLength: 2,
							select: function(event, ui) {
								event.preventDefault();
								$('#id_cliente').val(ui.item.id_cliente);
								$('#nombre_cliente').val(ui.item.nombre_cliente);
								$('#tel1').val(ui.item.telefono_cliente);
								$('#mail').val(ui.item.email_cliente);
																
								
							 }
						});
						 
						
					});
					
	$("#nombre_cliente" ).on( "keydown", function( event ) {
						if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
						{
							$("#id_cliente" ).val("");
							$("#tel1" ).val("");
							$("#mail" ).val("");
											
						}
						if (event.keyCode==$.ui.keyCode.DELETE){
							$("#nombre_cliente" ).val("");
							$("#id_cliente" ).val("");
							$("#tel1" ).val("");
							$("#mail" ).val("");
						}
			});	
	</script>
</body>

</html>
