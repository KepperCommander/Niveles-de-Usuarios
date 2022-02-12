<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>
</head>
<body>
<body>
<?php include("../header.php");?>

<div class="wrapper">
<div class="container">
<div class="col-lg-12">
<center>
<h1>Pagina Administrativa</h1>
<h3>
<?php
session_start();

?>
Bienvenido, <?php echo $_SESSION['admin_login']; } ?>
</h3>

</center>
<a href="../cerrar_sesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
<hr>
</div>

<br><br><br>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
Panel de usuarios
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th width="4%">ID</th>
<th width="18%">Usuario</th>
<th width="24%">Email</th>
<th width="19%">Rol</th>
<th width="24%">Password</th>
<th colspan="2">Opciones</th>
</tr>
</thead>
<tbody>
<?php
require_once '../DBconect.php';
$select_stmt=$db->prepare("SELECT id,username,email,role FROM mainlogin");
$select_stmt->execute();

while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
{
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["role"]; ?></td>
<td>*******</td>
<td width="4%"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
<td width="7%"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
</tr>
<?php 
}
?>
</tbody>
</table>
</div>
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</body>
</html>