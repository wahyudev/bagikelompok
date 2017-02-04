<!DOCTYPE html>
<?php error_reporting(1);
include 'koneksi.php';
include 'paging.php';
?>
<html>
<head>
	<title>Bagi kelompok</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<?php session_start(); if(!empty($_SESSION['username'])&&!empty($_SESSION['password'])&&$_SESSION[to]>time())
{ ; ?>
<div class="container">
	<div class="jumbotron">
		<div class="container">
			<h1>Sistem Informasi Bagi Kelompok</h1>
		</div>	
	</div>
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li ><a href="?menu=mahasiswa">Mahasiswa</a></li>
			<li><a href="?menu=kelompok">Kelompok</a></li>
		</ul>
		<ul class="nav navbar-nav ">
			<li class=""><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	<?php if($_GET[menu]=='mahasiswa')
	{
		include 'mahasiswa.php';
	}
	elseif($_GET[menu]=='kelompok')
	{
		include 'kelompok.php';
	}
	elseif($_GET[ngapain]=='buatgrup')
	{
		include 'kelompok.php';
	}
	elseif($_GET[ngapain]=='lihatgrup')
	{
		include 'kelompok.php';
	}
	elseif($_GET[ngapain]=='tambahkelompok')
	{
		include 'kelompok.php';
	}

	else
	{
		include 'mahasiswa.php';
	}?>
</div>
<?php } 
else{
	?>
<div class="container-special">
	<div class="panel panel-primary ">
		<div class="panel-heading">
			<div class="panel-title">
				Login
			</div>
		</div>
		<div class="panel-body">
			<?php
			error_reporting(1);
			session_start();
			if(!empty($_SESSION[warning]))
			{ ?>
			<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss='alert'>&times;</button>
				Username dan Password Salah
			</div>
			<?php 
				session_destroy();}
			?>
			<div class="well">
				<center><h4>Selamat Datang di Aplikasi <br> Bagi Kelompok Berbasis Web v1.0</h4></center>
			</div>
			<form class="form-horizontal" action="ceklogin.php" method="post">
				<div class="form-group">
					<label class="control-label col-sm-3">Username</label>
					<div class="input-group col-sm-6">
						<input class="form-control" name="username" type="text" placeholder="Username" />
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</div>
						
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Password</label>
					<div class="input-group col-sm-6">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</div>
						<input placeholder="Password" class="form-control" type="password" name="password"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3"></label>
					<div class="col-sm-6">
						<button class="btn btn-primary" type="submit"><span  class="glyphicon glyphicon-log-in"></span> Masuk</button>
					</div>
				</div>
			</form>
		</div>
		<div class="panel-footer">
			
			<center><i>Created and developed by Wahyu Budiman</i></center>
			<center><i>Copyright 2016, All rights reserved</i></center>
		</div>
	</div>
</div>

	<?php
}
?>

</body>
</html>