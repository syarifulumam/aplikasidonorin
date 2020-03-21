<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
<div class="row">
	<div class="col-md-3">
		<!-- Profile Image -->
		<div class="card card-secondary card-outline">
			<div class="card-body box-profile">
				<div class="text-center">
					<img class="profile-user-img img-fluid img-circle " src="<?= base_url('uploads/'.$user->foto) ?>"
						alt="User profile picture">
				</div>

				<h3 class="profile-username text-center"><?= $user->nama ?></h3>

				<a href="<?= base_url('pengaturan/edit') ?>" class="btn btn-secondary btn-block"><b>Edit Profile</b></a>
				<button type="button" class="btn btn-secondary btn-block" data-toggle="modal"
					data-target="#modal-edit"><b>Edit Password</b>
				</button>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
	<div class="col-md-9">
		<div class="card card-secondary card-outline">
			<div class="card-header p-0 border-bottom-0">
			</div>
			<div class="card-body">
				<div class="tab-content" id="custom-tabs-three-tabContent">
					<div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
						aria-labelledby="custom-tabs-three-home-tab">
						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap">
								<tbody>
									<tr>
										<th style="width:200px">Alamat</th>
										<td><?= $user->alamat ?></td>
									</tr>
									<tr>
										<th style="width:200px">Nomor Telepon</th>
										<td><?= $user->nomor_hp ?></td>
									</tr>
									<tr>
										<th style="width:200px">Email</th>
										<td><?= $user->email ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
				</div>
			</div>
			<!-- /.card -->
		</div>
	</div>
</div>
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
			<?= form_open('pengaturan/edit_password') ?>
			<div class="modal-body">
				<div class="form-group">
					<label>Password lama</label>
					<input type="password" class="form-control" autocomplete="off" name="password_lama">
				</div>
				<div class="form-group">
					<label>Password baru</label>
					<input type="password" class="form-control" autocomplete="off" name="password_baru">
				</div>
				<div class="form-group">
					<label>Masukan password baru</label>
					<input type="password" class="form-control" autocomplete="off" name="password_verif">
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
