<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-btn" >
					<button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
				</div>
      <div id="logo" class="pull-left logo-ini hidden-xs"><a href="#intro" class="scrollto">
        <img src="img/tupro.png" class="img-fluid" alt="" style="height: 40px;">
     </a></div>
				<div class="navbar-right">
					<div id="navbar-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="far fa-bell"></i>
									<span class="notification-dot"></span>
								</a>
								<ul class="dropdown-menu notifications">
									<li class="header"><strong>Tiene 7 Notificaciones</strong></li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left">
													<i class="fa fa-fw fa-flag-checkered text-muted"></i>
												</div>
												<div class="media-body">
													<p class="text">Tu campaña <strong>Venta de vacaciones</strong> está comenzando a involucrar a clientes potenciales.</p>
													<span class="timestamp">Hace 24 minutos</span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left">
													<i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
												</div>
												<div class="media-body">
													<p class="text">Campaña <strong>Venta de vacaciones</strong> está a punto de alcanzar el límite presupuestario.</p>
													<span class="timestamp">Hace 2 Horas</span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left">
													<i class="fa fa-fw fa-bar-chart text-muted"></i>
												</div>
												<div class="media-body">
													<p class="text">Las visitas al sitio web de Facebook son un 27% más altas que la semana pasada.</p>
													<span class="timestamp">Ayer</span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left">
													<i class="fa fa-fw fa-check-circle text-success"></i>
												</div>
												<div class="media-body">
													<p class="text">Tu campaña <strong>Venta de vacaciones</strong> esta aprobado.</p>
													<span class="timestamp">Hace 2 Dias</span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<div class="media-left">
													<i class="fa fa-fw fa-exclamation-circle text-danger"></i>
												</div>
												<div class="media-body">
													<p class="text">Error en las configuraciones analíticas del sitio web</p>
													<span class="timestamp">Hace 3 Dias</span>
												</div>
											</div>
										</a>
									</li>
									<li class="footer"><a href="#" class="more">Ver todas las notificaciones</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="fas fa-user-cog"></i>
								</a>
								<ul class="dropdown-menu user-menu menu-icon">
									<li class="menu-heading">CONFIGURACIONES DE LA CUENTA</li>
									<li><a href="#"><i class="fa fa-fw fa-bell"></i> <span>Notificaciones</span></a></li>
									<li><a href="Perfil.php"><i class="fas fa-sliders-h"></i> <span>Preferencias</span></a></li>
									<li><a href="login.php?logout"><i class="fa fa-fw fa-sign-out-alt"></i> <span>Cerrar Sesion</span></a></li>
								</ul>
							</li>
					</div>
				</div>
			</div>
		</nav>
		<div id="left-sidebar" class="sidebar">
			<button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
				<span class="sr-only">Toggle Fullwidth</span>
				<i class="fa fa-angle-left"></i>
			</button>
			<div class="sidebar-scroll">
				<div class="user-account">
				<!--	<img src="img/<?php echo $_SESSION['Imagen'];?>" width="50%" class="img-responsive img-circle user-photo" alt="User Profile Picture">
					<div class="dropdown">
						<a href="#" class="dropdown-toggle user-name">Hola, <strong><?php echo $_SESSION['Nombre'];?></strong></a>
						
					</div>-->
				</div>
				<nav id="left-sidebar-nav" class="sidebar-nav">
					<ul id="main-menu" class="metismenu">
					<!--<i class="fas fa-cogs"></i> <i class="fas fa-dolly"></i> -->
						<li class="<?php echo $Inicio;?>"><a href="index.php"><i class="fas fa-home"></i> <span>Inicio</span></a></li>
						<li class="<?php echo $Administracion;?>"><a href="Administracion.php"><i class="fab fa-jedi-order"></i> <span>Administracion</span></a></li>
						<li class="<?php echo $Clientes;?>"><a href="Consultar-Clientes.php"><i class="fas fa-user-tie"></i><span>Clientes</span></a></li>
						<li class="<?php echo $Productos;?>"><a href="Consultar-Productos.php"><i class="fas fa-parachute-box"></i><span>Productos</span></a></li>
						<li class="<?php echo $Proyectos;?>"><a href="Consultar-Proyectos.php"><i class="fas fa-rocket"></i><span>Proyectos</span></a></li>
						<li class="<?php echo $Garantias;?>"><a href="Consultar-Garantias"><i class="fas fa-wrench"></i> <span>Garantias</span></a></li>
						<li class="<?php echo $Ajustes;?>"><a href="Consultar-Ajustes"><i class="fas fa-exchange-alt"></i>  <span>Ajustes</span></a></li>
						<li class="<?php echo $Usuarios;?>"><a href="Consultar-Usuarios"><i class="fas fa-users"></i>  <span>Usuarios</span></a></li>
						<li class="<?php echo $Notificaciones;?>"><a href="Consultar-Notificaciones"><i class="fas fa-bell"></i> <span>Notificaciones</span> <span class="badge bg-danger">15</span></a></li>
						<li class="<?php echo $Reportes;?>"><a href="Consultar-Reportes"><i class="fas fa-book"></i> <span>Reportes</span></a></li>
					</ul>
				</nav>
				
			</div>
		</div>