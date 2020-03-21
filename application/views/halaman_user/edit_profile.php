<div class="container">
	<div class="row  justify-content-center">
		<div class="col-xl-7 mb-5 mt-5">
			<?php if(!empty($this->session->flashdata('gagal'))): ?>
			<div class="alert alert-danger" role="alert">
				<?= $this->session->flashdata('gagal') ?>
			</div>
			<?php endif;?>
			<?= form_open_multipart('') ?>
			<div class="form-group">
				<label for="exampleInputEmail1">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_lengkap" autocomplete="off"
					value="<?= $user->nama ?>">
				<?= form_error('nama_lengkap','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="row pb-2">
				<div class="col">
					<label for="exampleInputEmail1">Jenis Kelamin</label>
					<select class="form-control custom-select" name="jenis_kelamin"
						value="<?=set_value('jenis_kelamin')?>">
						<option value="">-- Pilih Jenis Kelamin --</option>
						<option <?= $user->jenis_kelamin == "Pria" ? 'selected':''; ?>>Pria</option>
						<option <?= $user->jenis_kelamin == "Wanita" ? 'selected':''; ?>>Wanita</option>
					</select>
					<?= form_error('jenis_kelamin','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label for="exampleInputEmail1">Tempat Lahir</label>
					<input type="text" class="form-control" name="tempat_lahir" autocomplete="off"
						value="<?=$user->tempat_lahir?>">
					<?= form_error('tempat_lahir','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label for="exampleInputEmail1">Tanggal Lahir</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
						</div>
						<input type="text" name="tanggal_lahir" class="form-control" data-inputmask-alias="datetime"
							data-inputmask-inputformat="yyyy/mm/dd" data-mask value="<?=$user->tanggal_lahir?>">
					</div>
					<?= form_error('tanggal_lahir','<small class="text-danger pl-1">','</small>') ?>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Alamat</label>
				<textarea class="form-control" rows="3" name="alamat"><?=$user->alamat?></textarea>
				<?= form_error('alamat','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="row pb-2">
				<div class="col">
					<label for="exampleInputEmail1">Golongan</label>
					<?php
                        $options = array(
                            'a' => 'A',
                            'b' => 'B',
                            'ab'=> 'AB',
                            'o' => 'O'
                        );
                        echo form_dropdown('golongan_darah', $options, $user->golongan_darah,"class='form-control custom-select'"); 
                    ?>
					<?= form_error('golongan_darah','<small class="text-danger pl-1">','</small>') ?>
				</div>
				<div class="col">
					<label>Rhesus</label>
					<select class="form-control custom-select" name="rhesus" value="<?=set_value('rhesus')?>">
						<option value="">-- Pilih Rhesus --</option>
						<option <?= $user->rhesus == "Positif" ? 'selected':''; ?>>Positif</option>
						<option <?= $user->rhesus == "Negatif" ? 'selected':''; ?>>Negatif</option>
					</select>
					<?= form_error('rhesus','<small class="text-danger pl-1">','</small>') ?>
				</div>
			</div>
			<div class="form-group">
				<label>Nomor HP</label>
				<input type="text" class="form-control" name="nomor_hp" autocomplete="off" value="<?=$user->nomor_hp?>">
				<?= form_error('nomor_hp','<small class="text-danger pl-1">','</small>') ?>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" name="email" autocomplete="off" value="<?=$user->email?>">
				<?= form_error('email','<small class="text-danger pl-1">','</small>') ?>
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
