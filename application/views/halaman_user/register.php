<div class="container">
	<div class="row  justify-content-center">
		<div class="col-xl-7 mb-5 mt-5">
			<?php if(!empty($this->session->flashdata('gagal'))): ?>
			<div class="alert alert-danger" role="alert">
				<?= $this->session->flashdata('gagal') ?>
			</div>
			<?php endif;?>
			<?= form_open_multipart('register') ?>
			<div class="form-group">
				<label for="exampleInputEmail1">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_lengkap" autocomplete="off"
					value="<?=set_value('nama_lengkap')?>">
				<?= form_error('nama_lengkap','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="row pb-2">
				<div class="col">
					<label for="exampleInputEmail1">Jenis Kelamin</label>
					<select class="form-control custom-select" name="jenis_kelamin"
						value="<?=set_value('jenis_kelamin')?>">
						<option value="">-- Pilih Jenis Kelamin --</option>
						<option>Pria</option>
						<option>Wanita</option>
					</select>
					<?= form_error('jenis_kelamin','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label for="exampleInputEmail1">Tempat Lahir</label>
					<input type="text" class="form-control" name="tempat_lahir" autocomplete="off"
						value="<?=set_value('tempat_lahir')?>">
					<?= form_error('tempat_lahir','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label for="exampleInputEmail1">Tanggal Lahir</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
						</div>
						<input type="text" name="tanggal_lahir" class="form-control" data-inputmask-alias="datetime"
							data-inputmask-inputformat="yyyy/mm/dd" data-mask value="<?=set_value('tanggal_lahir')?>">
					</div>
					<?= form_error('tanggal_lahir','<small class="text-danger pl-1">','</small>') ?>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Alamat</label>
				<textarea class="form-control" rows="3" name="alamat"><?=set_value('alamat')?></textarea>
				<?= form_error('alamat','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Terakhir kali Donor</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
					</div>
					<input type="text" name="terakhir_donor" class="form-control" data-inputmask-alias="datetime"
						data-inputmask-inputformat="yyyy/mm/dd" data-mask value="<?=set_value('terakhir_donor')?>">
				</div>
				<?= form_error('terakhir_donor','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="row pb-2">
				<div class="col">
					<label for="exampleInputEmail1">Golongan</label>
					<select class="form-control custom-select" name="golongan_darah"
						value="<?=set_value('golongan_darah')?>">
						<option value="">-- Pilih Golongan --</option>
						<option value="a">A</option>
						<option value="b">B</option>
						<option value="ab">AB</option>
						<option value="o">O</option>
					</select>
					<?= form_error('golongan_darah','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label>Rhesus</label>
					<select class="form-control custom-select" name="rhesus" value="<?=set_value('rhesus')?>">
						<option value="">-- Pilih Rhesus --</option>
						<option>Positif</option>
						<option>Negatif</option>
					</select>
					<?= form_error('rhesus','<small class="text-danger pl-1">','</small>') ?>
				</div>
			</div>
			<div class="form-group">
				<label>Nomor HP</label>
				<input type="text" class="form-control" name="nomor_hp" autocomplete="off"
					value="<?=set_value('nomor_hp')?>">
				<?= form_error('nomor_hp','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" name="email" autocomplete="off"
					value="<?=set_value('email')?>">
				<?= form_error('email','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Password</label>
				<input type="password" class="form-control" name="password" autocomplete="off"
					value="<?=set_value('password')?>">
				<?= form_error('password','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Foto</label>
				<input type="file" class="form-control-file" name="foto">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
