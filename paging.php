<?php
include 'koneksi.php';
class PagingMahasiswa{
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas){
		if(empty($_GET[halaman])){
			$posisi=0;
			$_GET[halaman]=1;
		}
		else{
			$posisi = ($_GET[halaman]-1) * $batas;	
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";

		// Link halaman 1,2,3, ...
		for ($i=1; $i<=$jmlhalaman; $i++){
			if ($i == $halaman_aktif){
				$link_halaman .= "<li class='active'><a href='$_SERVER[PHP_SELF]?menu=mahasiswa'>$i</a></li>  ";
			}
			else{
				$link_halaman .= "<li><a href='$_SERVER[PHP_SELF]?menu=mahasiswa&halaman=$i'>$i</a> </li>";
			}
			$link_halaman .= " ";
		}
		return $link_halaman;
	}
}