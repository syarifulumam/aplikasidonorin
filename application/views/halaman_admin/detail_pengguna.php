<div class="card">
	<div class="card-header">
		<h3 class="card-title">Detail Pengguna</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th style="width:200px">Nama Pasien</th>
					<td><?= $detail->nama ?></td>
				</tr>
				<tr>
					<th style="width:200px">Golongan</th>
					<td><?= $detail->golongan_darah ?></td>
				</tr>
				<tr>
					<th style="width:200px">Rhesus</th>
					<td><?= $detail->rhesus ?></td>
				</tr>
				<tr>
					<th style="width:200px">Jenis Kelamin</th>
					<td><?= $detail->jenis_kelamin ?></td>
				</tr>
				<tr>
					<th style="width:200px">Alamat</th>
					<td><?= $detail->alamat ?></td>
				</tr>
				<tr>
					<th style="width:200px">Tempat Lahir</th>
					<td><?= $detail->tempat_lahir ?></td>
				</tr>
				<tr>
					<th style="width:200px">Tanggal Lahir</th>
					<td><?= $detail->tanggal_lahir ?></td>
				</tr>
				<tr>
					<th style="width:200px">Nomor HP</th>
					<td><?= $detail->nomor_hp ?></td>
				</tr>
				<tr>
					<th style="width:200px">Email</th>
					<td><?= $detail->email ?></td>
				</tr>
				<tr>
					<th style="width:200px">Tanggal Terakhir Donor</th>
					<td><?= $detail->tanggal_mulai_donor ?></td>
				</tr>
				<tr>
					<th style="width:200px">Tanggal Donor Selanjutnya</th>
					<td><?= $detail->tanggal_donor ?></td>
				</tr>
				<tr>
					<th style="width:200px">Foto</th>
					<td><?= $detail->foto ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<div class="card-footer clearfix">
		<a href="<?= base_url('pengguna') ?>" class="btn btn-default">Kembali</a>
		</form>
	</div>
</div>
<!-- /.card -->
