<div class="container">
	<div class="row">
		<div class="col-lg-12 mb-5 mt-5">
			<?php if(!empty($this->session->flashdata('gagal'))): ?>
			<div class="alert alert-danger" role="alert">
				<?= $this->session->flashdata('gagal') ?>
			</div>
			<?php endif;?>
			<?php $data = array('id'=>$this->input->post('id'),'nama_tempat'=>$this->input->post('nama_tempat')) ?>
			<?= form_open_multipart('permintaan_darah/daftar','',$data) ?>
			<div class="form-group">
				<label for="exampleInputEmail1">Nama Pasien</label>
				<input type="text" class="form-control" name="nama_pasien" autocomplete="off"
					value="<?= set_value('nama') ?>">
				<?= form_error('nama_pasien','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="row pb-2">
				<div class="col">
					<label for="exampleInputEmail1">Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin">
						<option value="">-- Pilih Jenis Kelamin --</option>
						<option>Pria</option>
						<option>Wanita</option>
					</select>
					<?= form_error('jenis_kelamin','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label for="exampleInputEmail1">Nomor Hp</label>
					<input type="text" class="form-control" name="nomor_hp" autocomplete="off"
						value="<?= set_value('nomor_hp') ?>">
					<?= form_error('nomor_hp','<small class="text-danger pl-1">','</small>') ?>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Kebutuhan</label>
				<input type="text" class="form-control" name="kebutuhan" placeholder="Contoh : operasi jantung"
					autocomplete="off" value="<?= set_value('kebutuhan') ?>">
				<?= form_error('kebutuhan','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Alamat</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"
					value="<?= set_value('alamat') ?>"></textarea>
				<?= form_error('alamat','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="row pb-2">
				<div class="col">
					<label for="exampleInputEmail1">Golongan</label>
					<select class="form-control" name="golongan" value="<?= set_value('golongan') ?>">
						<option value="">-- Pilih Golongan Darah --</option>
						<option value="a">A</option>
						<option value="b">B</option>
						<option value="ab">AB</option>
						<option value="o">O</option>
					</select>
					<?= form_error('golongan','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label>Rhesus</label>
					<select class="form-control" name="rhesus" value="<?= set_value('rhesus') ?>">
						<option value="">-- Pilih Golongan Rhesus --</option>
						<option>Positif</option>
						<option>Negatif</option>
					</select>
					<?= form_error('rhesus','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label>Jumlah Darah</label>
					<input type="text" class="form-control" name="jumlah_darah" autocomplete="off"
						value="<?= set_value('jumlah_darah') ?>">
					<?= form_error('jumlah_darah','<small class="text-danger pl-1">','</small>') ?>
				</div>
			</div>
			<div class="form-group">
				<label>Foto Surat</label>
				<input type="file" class="form-control-file" name="foto">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
