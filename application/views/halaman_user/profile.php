<div class="container">
	<div class="row">
		<div class="col-md-3">
			<!-- Profile Image -->
			<div class="card card-danger card-outline">
				<div class="card-body box-profile">
					<div class="text-center">
						<img class="profile-user-img img-fluid img-circle" src="<?=base_url('uploads/'.$user->foto)?>"
							alt="User profile picture">
					</div>

					<h3 class="profile-username text-center"><?= $user->nama ?></h3>

					<ul class="list-group list-group-unbordered mb-3">
						<li class="list-group-item">
							<b>Golongan Darah</b> <a class="float-right"><?= strtoupper($user->golongan_darah) ?></a>
						</li>
					</ul>

					<a href="<?= base_url('profile/edit') ?>" class="btn btn-danger btn-block"><b>Edit
							Profile</b></a>
					<button type="button" class="btn btn-danger btn-block" data-toggle="modal"
						data-target="#modal-edit">
						<b>Edit Password</b>
					</button>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->

			<!-- modal edit  -->
			<div class="modal fade" id="modal-edit">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Edit Data</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?= form_open('profile/edit_password') ?>
						<div class="modal-body">
							<div class="form-group">
								<label>Password lama</label>
								<input type="password" class="form-control" autocomplete="off" name="password_lama">
								<?= form_error('password_lama','<small class="text-danger pl-1">','</small>') ?>
							</div>
							<div class="form-group">
								<label>Password baru</label>
								<input type="password" class="form-control" autocomplete="off" name="password_baru">
								<?= form_error('password_baru','<small class="text-danger pl-1">','</small>') ?>
							</div>
							<div class="form-group">
								<label>Masukan password baru</label>
								<input type="password" class="form-control" autocomplete="off" name="password_verif">
								<?= form_error('password_verif','<small class="text-danger pl-1">','</small>') ?>
							</div>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->

			<!-- About Me Box -->
			<div class="card card-danger">
				<div class="card-header">
					<h3 class="card-title">Jadwal</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<strong><i class="far fa-calendar-alt"></i> Terakhir Donor</strong>

					<p class="text-muted"><?= $user->tanggal_mulai_donor ?></p>

					<hr>

					<strong><i class="far fa-calendar-alt"></i> Donor Selanjutnya</strong>

					<p class="text-muted"><?= $user->tanggal_donor ?></p>

				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
		<div class="col-md-9">
			<!-- alert  -->
			<?php if(!empty($this->session->flashdata('gagal'))): ?>
			<div class="alert alert-danger" role="alert">
				<?= $this->session->flashdata('gagal') ?>
			</div>
			<?php elseif(!empty($this->session->flashdata('success'))): ?>
			<div class="alert alert-success" role="alert">
				<?= $this->session->flashdata('success') ?>
			</div>
			<?php endif;?>
			<div class="card card-danger card-outline card-outline-tabs">
				<div class="card-header p-0 border-bottom-0">
					<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
								href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
								aria-selected="true">Riwayat Donor</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
								href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile"
								aria-selected="false">Riwayat Minta Darah</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-three-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
							aria-labelledby="custom-tabs-three-home-tab">
							<div class="card-body table-responsive p-0">
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											<th>#</th>
											<th>Tempat Donor</th>
											<th>Tanggal</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php  
											$no = 1;
											if ($donor_darah != null):
											foreach ($donor_darah as $key): 
										?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $key->nama_tempat ?></td>
											<td><?= $key->tanggal_donor ?></td>
											<td><?= $key->status == 0 ? "<span class='badge badge-primary'>Proses</span>":"<span class='badge badge-success'>Selesai</span>"; ?>
											</td>
										</tr>
										<?php 
											$no++; endforeach;
											else:
										?>
										<tr>
											<td colspan="4" class="text-center">Belum ada data</td>
										</tr>
										<?php endif; ?>

									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
							aria-labelledby="custom-tabs-three-profile-tab">
							<div class="card-body table-responsive p-0">
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Tempat</th>
											<th>Jumlah Darah</th>
											<th>Kebutuhan</th>
											<th>Batas Waktu Konfirmasi</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php  
											$no = 1;
											if ($minta_darah != null):
											foreach ($minta_darah as $key): 
										?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $key->nama_tempat ?></td>
											<td><?= $key->jumlah_darah ?></td>
											<td><?= $key->kebutuhan ?></td>
											<td><?= $key->batas_waktu ?></td>
											<td><?= $key->status == 0 ? "<span class='badge badge-primary'>Proses</span>":"<span class='badge badge-success'>Selesai</span>"; ?>
											</td>
										</tr>
										<?php 
											$no++; endforeach;
											else:
										?>
										<tr>
											<td colspan="6" class="text-center">Belum ada data</td>
										</tr>
										<?php endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>
</div>
