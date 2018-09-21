<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	require_once ("config/db.php");
	require_once ("config/conexion.php");
	$Inicio="active";
	$Proyectos="";
	$PCrear="";
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
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Perfil Del Usuario</h1>
				</div>
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#myprofile" role="tab" data-toggle="tab">Mi Perfil</a></li>
					<li><a href="#account" role="tab" data-toggle="tab">Cuenta</a></li>
					<!--<li><a href="#billings" role="tab" data-toggle="tab">Billings &amp; Plans</a></li>
					<li><a href="#preferences" role="tab" data-toggle="tab">Preferences</a></li>-->
				</ul>
				<form>
					<div class="tab-content content-profile">
						<!-- MY PROFILE -->
						<div class="tab-pane fade in active" id="myprofile">
							<div class="profile-section">
								<h2 class="profile-heading">Foto De Perfil</h2>
								<div class="media">
									<div class="media-left">
										<img src="assets/img/user.png" class="user-photo media-object" alt="User">
									</div>
									<div class="media-body">
										<p>Subir Foto.
											<br> <em>La imagen debe ser al menos 140px x 140px</em></p>
										<button type="button" class="btn btn-default-dark" id="btn-upload-photo">Subir Foto</button>
										<input type="file" id="filePhoto" class="sr-only">
									</div>
								</div>
							</div>
							<div class="profile-section">
								<h2 class="profile-heading">Informacion Basica</h2>
								<div class="clearfix">
									<!-- LEFT SECTION -->
									<div class="left">
										<div class="form-group">
											<label>Nombres</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Apellidos</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Genero</label>
											<div>
												<label class="fancy-radio">
													<input name="gender2" value="male" type="radio" checked>
													<span><i></i>Masculino</span>
												</label>
												<label class="fancy-radio">
													<input name="gender2" value="female" type="radio">
													<span><i></i>Femenino</span>
												</label>
											</div>
										</div>
										<div class="form-group">
											<label>fecha de Nacimiento</label>
											<div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<!-- END LEFT SECTION -->
									<!-- RIGHT SECTION -->
									<div class="right">
										<div class="form-group">
											<label>Direccion</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Telefono</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Ciudad</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group">
											<label>Pais</label>
											<select class="form-control">
												<option value="">-- Seleccione su Pais --</option>
												<option value="CO">Colombia</option>
												
											</select>
										</div>
									</div>
									<!-- END RIGHT SECTION -->
								</div>
								<p class="margin-top-30">
									<button type="button" class="btn btn-primary">Guardar</button> &nbsp;&nbsp;
									<button type="button" class="btn btn-default">Cancelar</button>
								</p>
							</div>
						</div>
						<!-- END MY PROFILE -->
						<!-- ACCOUNT -->
						<div class="tab-pane fade" id="account">
							<div class="profile-section">
								<div class="clearfix">
									<!-- LEFT SECTION -->
									<div class="left">
										<h2 class="profile-heading">Cuenta</h2>
										<div class="form-group">
											<label>Nombre de Usuario</label>
											<input type="text" class="form-control" value="Administrador" disabled>
										</div>
										<div class="form-group">
											<label>Correo</label>
											<input type="email" class="form-control" value="juandavid.andrade1997@gmail.com">
										</div>
										<div class="form-group">
											<label>Rol</label>
											<input type="text" class="form-control" value="Administrador" disabled>
										</div>
									</div>
									<!-- END LEFT SECTION -->
									<!-- RIGHT SECTION -->
									<div class="right">
										<h2 class="profile-heading">Cambiar Contraseña</h2>
										<div class="form-group">
											<label>Contraseña Actual</label>
											<input type="password" class="form-control">
										</div>
										<div class="form-group">
											<label>Nueva Contraseña</label>
											<input type="password" class="form-control">
										</div>
										<div class="form-group">
											<label>Confirme Contraseña</label>
											<input type="password" class="form-control">
										</div>
									</div>
									<!-- END RIGHT SECTION -->
								</div>
								<p class="margin-top-30">
									<button type="button" class="btn btn-primary">Guardar</button> &nbsp;&nbsp;
									<button class="btn btn-default">Cancelar</button>
								</p>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
		<div class="clearfix"></div>
		<footer>
			<p class="copyright">&copy; Copyright <a href="https://www.tupro.com.co/" target="_blank">TuPro Creativo. </a>Todos los derechos reservados</p>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/metisMenu/metisMenu.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/scripts/common.js"></script>
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
</body>

</html>
