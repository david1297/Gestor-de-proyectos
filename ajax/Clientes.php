<?php
	include('is_logged.php');
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
         $Busc_Cliente = mysqli_real_escape_string($con,(strip_tags($_REQUEST['Busc_Cliente'], ENT_QUOTES)));
		 $aColumns = array('id_cliente', 'nombre_cliente');
		 $sTable = "clientes";
		 $sWhere = "";
		if ( $_GET['Busc_Cliente'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$Busc_Cliente."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		include 'pagination.php'; 
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 5; 
		$adjacents  = 4; 
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './index.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="warning">
					<th>Nit</th>
					<th>Nombre</th>
					<th><span>Telefono</span></th>
					<th><span>Correo</span></th>
					<th class='text-center' style="width: 36px;">Seleccionar</th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$id_cliente=$row['id_cliente'];
					$nombre_cliente=$row['nombre_cliente'];
					$telefono_cliente=$row['telefono_cliente'];
					$email_cliente=$row["email_cliente"];
					?>
					<tr>
						<td><?php echo $id_cliente; ?></td>
						<td><?php echo $nombre_cliente; ?></td>
						<td><?php echo $telefono_cliente; ?></td>
						<td><?php echo $email_cliente; ?></td>
						
						
						<td class='text-center'><a class='btn btn-success'href="#" data-dismiss="modal" onclick="Seleccionar('<?php echo $id_cliente ?>','<?php echo $nombre_cliente ?>','<?php echo $telefono_cliente ?>','<?php echo $email_cliente ?>')"><i class="glyphicon glyphicon-ok"></i></a></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=5><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>