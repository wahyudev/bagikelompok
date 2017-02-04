<?php
include 'koneksi.php';
error_reporting(1);
$aksi =$_GET[aksi];
$mode=$_GET[mode];
if($aksi=='tambahmhs')
{
	$nim=strtoupper($_POST[nim]);
	$nama=strtoupper($_POST[nama]);

	$a=mysql_query("INSERT INTO mhs(nim,nama) Values('$nim','$nama')");
	if($a)
	{
		header("location:index.php");
	}
}
elseif($aksi=='hapus')
{

	$a=mysql_query("DELETE FROM mhs WHERE id='$_GET[id]'");
	if($a)
	{
		header("location:index.php");
	}

}
elseif($aksi=='edit')
{

	$nim=strtoupper($_POST[n]);
	$nama=strtoupper($_POST[a]);
	$l=mysql_query("UPDATE mhs SET nim = '$nim',nama = '$nama' where id='$_POST[i]'");
	if($l)
	{
		header("location:index.php");
	}
	else 
	{
		echo "gagal";
	}

}
elseif($aksi=='tambahkelompok')
{
	$a=mysql_query("INSERT INTO kelompok(kelompok_matkul,objectives) Values('$_POST[matkul]','$_POST[tujuan]')");
	if ($a) {
		header("location:index.php?menu=kelompok");
	}
}
elseif ($aksi=='editkel' and $mode=='kelompok') {
	$l=mysql_query("UPDATE kelompok SET kelompok_matkul = '$_POST[kel_matkul]',objectives = '$_POST[misi]' where id='$_POST[id_kel]'");
	if($l)
	{
		header("location:index.php?menu=kelompok");
	}
	else 
	{
		echo "gagal";
	}

}
elseif($_GET[menu]=='kelompok' and $aksi=='hapuskel')
{

	$a=mysql_query("DELETE FROM kelompok WHERE id='$_GET[id]'");
	if($a)
	{
		header("location:index.php?menu=kelompok&pesan=Berhasil Hapus kelompok");
	}

}
elseif($_GET[simpan]=='kelompok'){

	$count=count($_POST[kelompok]);
	for($p=0;$p<$count+1;$p++){
		$count2=count($_POST[nama][$p]);
		for($j=0;$j<$count2;$j++){
			$id=$_POST[idmatkul];
			$l=$_POST[kelompok][$p]-1;
			$kelom=$l+1;
			$anggota=$_POST[nama][$p][$j];

			$sql =mysql_query("INSERT INTO mhs_kelompok(id_kelompok,no_kelompok,anggota) VALUES('$id','$kelom','$anggota')");			
		}
	header("location:index.php?menu=kelompok&pesan=Berhasil Buat kelompok");
	}
}

