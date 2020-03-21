<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Data Donor Darah</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Tempat</th>
					<th>Tanggal</th>
					<th>Golongan</th>
					<th>Rhesus</th>
					<th>Status</th>
					<th style="width:50px;">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ($pendonor as $key): ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $key->nama ?></td>
					<td><?= $key->nama_tempat ?></td>
					<td><?= $key->tanggal_donor ?></td>
					<td><?= strtoupper($key->golongan_darah) ?></td>
					<td><?= $key->rhesus ?></td>
					<td><?= $key->status == 0 ? "<span class='badge badge-primary'>Proses</span>":"<span class='badge badge-success'>Selesai</span>"; ?>
					</td>
					<td>
						<button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
							data-target="#modal-edit<?= $key->id_riwayat_donor ?>"><i class="fa fa-edit"></i>
						</button>
						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
							data-target="#modal-delete<?= $key->id_riwayat_donor ?>"><i class="fa fa-trash"></i>
						</button>
					</td>
				</tr>
				<!-- modal edit  -->
				<div class="modal fade" id="modal-edit<?= $key->id_riwayat_donor ?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Edit Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?= form_open('pendonor/edit/'.$key->id_riwayat_donor) ?>
							<div class="modal-body">
								<select class="form-control custom-select" name="status">
									<option value="0" <?= $key->status == 0 ? "selected":""; ?>>Proses</option>
									<option value="1" <?= $key->status == 1 ? "selected":""; ?>>Selesai</option>
								</select>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- modal delete  -->
				<div class="modal fade" id="modal-delete<?= $key->id_riwayat_donor ?>">
					<div class="modal-dialog">
						<div class="modal-content bg-danger">
							<div class="modal-header">
								<h4 class="modal-title">Hapus Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Apa anda yakin ingin menghapus data ini?</p>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
								<a href="<?= base_url('pendonor/delete/'.$key->id_riwayat_donor) ?>">
									<div class="btn btn-outline-light toastrDefaultSuccess">Hapus</div>
								</a>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<?php $no++; endforeach; ?>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->
