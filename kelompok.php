<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			Kelompok
		<?php if($_GET[ngapain]!='tambahkelompok'){ ?>
		<a href="?ngapain=tambahkelompok"><button class="btn btn-success btn-sm" style="margin-left:870px;">
			<i class="glyphicon glyphicon-plus"  ></i> Tambah Kelompok
		</button></a>
		<?php }
		else 
		{ ?>
			<a href="?menu=kelompok"><button class="btn btn-success btn-sm" style="margin-left:870px;">
			<i class="glyphicon glyphicon-arrow-left"  ></i> Kembali </button></a>
		<?php }
		?>
		</div>
	</div>

	<div class="panel-body">
	<?php  if($_GET[menu]=='kelompok'){ ?>
		<div class="row">
			<div class="col-md-7">
				<?php if($_GET[menu]=='kelompok'&&$_GET[halaman]=='edit')
				{ 
					
					include 'koneksi.php';
					$a=mysql_fetch_array(mysql_query("SELECT *from kelompok where id='$_GET[id]'"));
					?>

				<form action="proses.php?aksi=editkel&mode=kelompok" class="form-horizontal" method="post">
					<div class="form-group">
						<input type="hidden" value="<?php echo $a[id]; ?>" name='id_kel'>
						<label class="control-label col-sm-5">Nama Matakuliah</label>
						<div class="input-group col-sm-6">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input class="form-control" required name="kel_matkul" value="<?php echo $a[kelompok_matkul]; ?>" type="text" placeholder="Nama Matakuliah" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5">Tujuan/Misi</label>
						<div class="input-group col-sm-6">
							<textarea class="form-control" required name="misi"  type="text" placeholder="Tujuan/misi" ><?php echo $a[objectives]; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5"></label>
						<div class="input-group col-sm-6">
							<button class="btn btn-primary" type="submit"> Update</button> | <a href="index.php?menu=kelompok"><button type="button" class="btn btn-danger"> Batal</button></a>
						</div>
					</div>
				</form>

				<?php } ?>
			</div>
		</div>
		<div class="col-md-12">
			<table class="table table-stripped table-bordered">
			<tr>
				<td width="5%">No</td><td>Nama Matakuliah</td><td>Tujuan / Misi</td><td>Jumlah kelompok</td><td>Aksi</td>
			</tr>
			<?php 
			include 'koneksi.php';
			
			$a=mysql_query("SELECT *from kelompok order by id asc");
			
			if(mysql_num_rows($a)==0)
			{
				echo "<tr><td colspan='5'><div class='alert alert-danger'>Data tidak ada</div></td></tr>";

			}
			else{

			function jumlahkel($id_kel)
			{
				$jmlkel=mysql_num_rows(mysql_query("SELECT *FROM mhs_kelompok where id_kelompok='$id_kel' group by no_kelompok"));
				return $jmlkel;
			}
			
			$no=1;
			while ($b= mysql_fetch_array($a)) {
			$d=mysql_num_rows(mysql_query("SELECT *FROM mhs_kelompok where id_kelompok='$b[id_kelompok]' and no_kelompok ='$b[no_kelompok]'"));
				?>
				<tr>

					<td><?php echo $no; ?></td><td><?php echo $b[kelompok_matkul]; ?></td><td><?php echo $b[objectives]; ?></td><td><?php echo jumlahkel($b[id]); ?></td><td><a href="proses.php?menu=kelompok&aksi=hapuskel&id=<?php echo $b[id]; ?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus ini?')"><span class="glyphicon glyphicon-trash"></span> Hapus</button></a> | <a href="index.php?menu=kelompok&halaman=edit&id=<?php echo $b[id]; ?>"><button class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>| <a href="index.php?ngapain=lihatgrup&id=<?php echo $b[id]; ?>"><button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-zoom-in"></span> Lihat Grup</button></a><?php if(jumlahkel($b[id])==0){ ?> | <a href="index.php?ngapain=buatgrup&id=<?php echo $b[id]; ?>"><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Bagi Grup</button></a> <?php } ?> </td>
				</tr>
				<?php $no++;
				}
			}
			?>
			</table>
		</div>
	<?php } elseif ($_GET[ngapain]=='tambahkelompok') {
		?>
		<form action="proses.php?aksi=tambahkelompok" class="form-horizontal" method="post">
			<div class="form-group">
				<label class="control-label col-sm-3">Nama Matakuliah</label>
				<div class="input-group col-sm-5">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
	l				</div>
					<input class="form-control" required name="matkul" type="text" placeholder="Nama" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Tujuan/Misi</label>
				<div class="input-group col-sm-5">
					
					<textarea rows="5" class="form-control" required name="tujuan" type="text" placeholder="Tujuan /Misi" ></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3"></label>
				<div class="input-group col-sm-5">
					<button class="btn btn-primary" type="submit"> Tambah</button>
				</div>
			</div>
		</form>

	<?php } elseif ($_GET[ngapain]=='lihatgrup') {
		include 'koneksi.php';
		$id=$_GET[id];
		$data= mysql_fetch_array(mysql_query("SELECT *FROM kelompok where id='$id'"));
		?>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2"> Nama Matakuliah</label>
						<div class="col-md-9">
							<?php echo $data[kelompok_matkul]; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2"> Tujuan / misi</label>
						<div class="col-md-9">
							<?php echo $data[objectives]; ?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<?php 
		$a=mysql_query("SELECT *FROM mhs_kelompok where id_kelompok='$id' group by no_kelompok");
		if(mysql_num_rows($a)>0){
		while ( $dom=mysql_fetch_array($a)) { ?>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						<center><h4>Kelompok <?php echo $dom[no_kelompok]; ?></h4></center>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="10%">No</th><th width="30%">NIM</th><th width="60%">Nama</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$sel=mysql_query("SELECT mhs.nim as nu,mhs.nama as na From mhs,mhs_kelompok where mhs_kelompok.anggota=mhs.nim and mhs_kelompok.id_kelompok='$id' and mhs_kelompok.no_kelompok='$dom[no_kelompok]'");
						$no=1;
						while ($k=mysql_fetch_array($sel)) {
						?>
							<tr>
								<td><?php echo $no; ?></td><td><?php echo $k[nu]; ?></td><td><?php echo $k[na]; ?></td>
							</tr>
						<?php 
						$no++;
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php }
		}
		else
		{ ?>
		<div class="alert alert-danger">
			Grup di mata kuliah ini belum ada
		</div>
		<?php }
		?>

	<?php } elseif ($_GET[ngapain]=='buatgrup') {
				include 'koneksi.php';
				error_reporting(1);
					$a=mysql_fetch_array(mysql_query("SELECT *from kelompok where id='$_GET[id]'"));
					?>

				<form action="index.php?ngapain=buatgrup&status=generated&id=<?php echo $a[id]; ?>" class="form-horizontal" method="post">
					<div class="form-group">
						<input type="hidden" value="<?php echo $a[id]; ?>" name='id_kel'>
						<label class=" col-sm-2">Nama Matakuliah</label>
						<div class="input-group col-sm-6">
							<?php echo $a[kelompok_matkul]; ?>
						</div>
					</div>
					<div class="form-group">
						<label class=" col-sm-2">Tujuan/Misi</label>
						<div class="input-group col-sm-6">
							<?php echo $a[objectives]; ?>
						</div>
					</div>
					<div class="form-group">
						<label class=" col-sm-2">Jumlah Grup</label>
						<div class="input-group col-sm-3">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-plus"></span>
							</div>
							<input class="form-control" required name="jumlah"  type="text" placeholder="Jumlah grup" />
						</div>
					</div>
					<div class="form-group">
						<label class=" col-sm-2"></label>
						<div class="input-group col-sm-3">
							<button class="btn btn-primary" type="submit"> Buat Grup</button> | <a href="index.php?menu=kelompok"><button type="button" class="btn btn-danger"> Batal</button></a>
						</div>
					</div>
				</form>
				<?php if($_GET[status]=='generated'){
					
					$c=$_POST[jumlah];
					$a=mysql_query("SELECT * from mhs order by rand()");
					$b=mysql_num_rows($b);
		
					?>
					<form action="proses.php?simpan=kelompok" method="post" onsubmit="return confirm('Yakin Ingin menyimmpan kelompok ini ?')">
					<div class="container-fluid"> 
					<?php
					$i=0;
					while ($b =mysql_fetch_array($a)) {
						
						$q[$i] =$b[nim];
						
 					$i++;
					}
					function ambilnama($nim)
					{
						$bocah=mysql_fetch_array(mysql_query("SELECT nama from mhs where nim='$nim'"));
						echo $bocah[nama];
					}

					
					if($c > 0){
						
						for($i=0,$m=count($q),$result=array_fill(0, $c, array());$i<$m;){
						$j = $c;
						while(--$j > -1){
						if(isset($q[$i]))$result[$j][] = $q[$i];
						++$i;
							}
						} ?>
						<?php for($h=0;$h<count($result);$h++)
						{
						?>
						
							<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<center>Kelompok <?php $kel =$h+1; echo $kel; ?></center>
											<input type="hidden" name="kelompok[]" value="<?php echo $kel; ?>"> 
											<input type="hidden" name="idmatkul" value="<?php echo $_GET[id]; ?>"> 
										</div>
									</div>
									<div class="panel-body">
										<table class="table ">
										<tr align="center">
											<td width="30%">NIM</td><td>Nama Mahasiswa</td>
										</tr>
										<?php
										for ($x=0;$x<count($result[$h]);$x++ ) { ?>
										<tr align="center">
											<td><?php echo $result[$h][$x]; ?></td><td><?php ambilnama($result[$h][$x]); ?></td>
											<input type="hidden" name="nama[<?php echo $h; ?>][]" value="<?php echo $result[$h][$x]; ?>">
										</tr>
										<?php } ?>
										</table>
									</div>
								</div>
							</div>
						
						<?php } ?>
						
					<?php }
					if(isset($kel)){
					?>
					</div>
					<center>
							<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
					</center>
				</form>
				<?php }

				} ?>
	<?php } ?>

	</div>
</div>
