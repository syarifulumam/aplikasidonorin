<div class="card">
	<div class="card-header">
		<h3 class="card-title">Detail Riwayat</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th style="width:200px">Nama Pasien</th>
					<td><?= $detail->nama_pasien ?></td>
				</tr>
				<tr>
					<th style="width:200px">Golongan</th>
					<td><?= $detail->golongan ?></td>
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
					<th style="width:200px">Nama Tempat</th>
					<td><?= $detail->nama_tempat ?></td>
				</tr>
				<tr>
					<th style="width:200px">Jumlah Darah</th>
					<td><?= $detail->jumlah_darah ?></td>
				</tr>
				<tr>
					<th style="width:200px">Kebutuhan</th>
					<td><?= $detail->kebutuhan ?></td>
				</tr>
				<tr>
					<th style="width:200px">Batas Waktu</th>
					<td><?= $detail->batas_waktu ?></td>
				</tr>
				<tr>
					<th style="width:200px">Foto Surat</th>
					<td>
						<a href="<?= base_url('uploads/'.$detail->foto) ?>" target="_blank"
							class="btn btn-default btn-xs">
							<i class="fa fa-image"></i> Lihat <?= $detail->foto ?>
						</a>
						<button type="button" class="btn btn-default btn-xs">
							<i class="fa fa-download"></i> download
						</button>
					</td>
				</tr>
				<tr>
					<th style="width:200px">Status</th>
					<td>
						<?=form_open('riwayat_minta_darah/edit/'.$detail->id_riwayat_minta_darah);?>
						<select class="form-control custom-select" name="status">
							<option value="0" <?= $detail->status == 0 ? "selected":""; ?>>Proses</option>
							<option value="1" <?= $detail->status == 1 ? "selected":""; ?>>Selesai</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<div class="card-footer clearfix">
		<a href="<?= base_url('riwayat_minta_darah') ?>" class="btn btn-default">Kembali</a>
		<button type="submit" class="btn btn-primary float-right">Submit</button>
		</form>
	</div>
</div>
<!-- /.card -->
