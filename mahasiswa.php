<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			Mahasiswa
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6">
				<?php if($_GET[halaman]=='edit')
				{ 
					
					include 'koneksi.php';
					$a=mysql_fetch_array(mysql_query("SELECT *from mhs where id='$_GET[id]'"));
					?>

				<form action="proses.php?aksi=edit" class="form-horizontal" method="post">
					<div class="form-group">
						<input type="hidden" value="<?php echo $a[id]; ?>" name='i'>
						<label class="control-label col-sm-5">Nama Mahasiswa</label>
						<div class="input-group col-sm-6">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input class="form-control" required name="a" value="<?php echo $a[nama]; ?>" type="text" placeholder="Nama" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5">NIM</label>
						<div class="input-group col-sm-6">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input class="form-control" required name="n" value="<?php echo $a[nim]; ?>" type="text" placeholder="Nomor Induk Mahasiswa" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5"></label>
						<div class="input-group col-sm-6">
							<button class="btn btn-primary" type="submit"> Update</button> | <a href="index.php"><button type="button" class="btn btn-danger"> Batal</button></a>
						</div>
					</div>
				</form>

				<?php }
				else
				{ ?>
				<form action="proses.php?aksi=tambahmhs" class="form-horizontal" method="post">
					<div class="form-group">
						<label class="control-label col-sm-5">Nama Mahasiswa</label>
						<div class="input-group col-sm-6">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input class="form-control" required name="nama" type="text" placeholder="Nama" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5">NIM</label>
						<div class="input-group col-sm-6">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input class="form-control" required name="nim" type="text" placeholder="Nomor Induk Mahasiswa" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5"></label>
						<div class="input-group col-sm-6">
							<button class="btn btn-primary" type="submit"> Tambah</button>
						</div>
					</div>
				</form>

				<?php } ?>
			</div>
		</div>
		<div class="col-md-12">
			<table class="table table-stripped table-bordered">
			<tr>
				<td width="5%">No</td><td>Nama</td><td>NIM</td><td>Aksi</td>
			</tr>
			<?php 
			include 'koneksi.php';
			
			$a=mysql_query("SELECT *from mhs order by nim asc");
			$jumlahdata=mysql_num_rows($a);
			if($jumlahdata==0)
			{
				echo "<tr><td colspan='4'><div class='alert alert-danger'>Data tidak ada</div></td></tr>";

			}
			else{
			$p= new PagingMahasiswa;
			$batas=10;
			$posisi=$p->cariPosisi($batas);
			$a=mysql_query("SELECT *from mhs order by nim asc limit $posisi,$batas");
			$no=$posisi+1;
			while ($b= mysql_fetch_array($a)) {
				?>
				<tr>
					<td><?php echo $no; ?></td><td><?php echo $b[nama]; ?></td><td><?php echo $b[nim]; ?></td><td><a href="proses.php?aksi=hapus&id=<?php echo $b[id]; ?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus ini?')"><span class="glyphicon glyphicon-trash"></span> Hapus</button></a> | <a href="index.php?halaman=edit&id=<?php echo $b[id]; ?>"><button class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</button></a> </td>
				</tr>
				<?php $no++;
				}
				$jmlhalaman  = $p->jumlahHalaman($jumlahdata, $batas);
				$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
			}
			?>
			</table>
			<ul class="pagination">
					<?php echo "$linkHalaman"; ?>
				</ul>
		</div>
	</div>
</div>