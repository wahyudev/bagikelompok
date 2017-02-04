<?php
include 'koneksi.php';


$u=$_POST['username'];
$p=md5($_POST['password']);
$sql=mysql_query("SELECT *FROM admin where username='$u' and password='$p'");
$cek=mysql_num_rows($sql);
if($cek>0)
{
	session_start();
	$data=mysql_fetch_array($sql);
	$_SESSION[username]=$data[username];
	$_SESSION[password]=$data[password];
	$_SESSION[to]=time()+6000;
	header("location:index.php");

}
else
{
	session_start();
	$_SESSION[warning]='no';
	header("location:index.php");
}
