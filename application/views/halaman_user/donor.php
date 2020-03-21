<div class="container">
	<div class="row pb-5">
		<div class="col-xl-4">
			<div class="card card-default">
				<div class="card-header ">
					<h3 class="card-title">Pencarian</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<?= form_open('') ?>
						<select class="form-control select2" name="provinsi" style="width: 100%;">
							<option selected="selected">Provinsi</option>
							<?php foreach ($provinsi as $key): ?>
							<option><?= $key->nama_provinsi ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" name="tanggal" class="form-control" data-inputmask-alias="datetime"
								data-inputmask-inputformat="yyyy/mm/dd" data-mask value="<?=set_value('tanggal')?>">
						</div>
					</div>
					<button type="submit" class="btn btn-danger form-control">Cari</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<?php foreach($donor as $d): ?>
			<?php 
			echo form_open('donor/daftar_donor');
			$data = array(
				'instansi' => $d['instansi'],
				'alamat'   => $d['alamat']
			);	
			echo form_hidden('data', $data);
			?>
			<div class="card bg-light">
				<div class="card-body">
					<h4><?= $d['instansi'] ?></h4>
					<?= $d['alamat'] ?>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-md bg-teal">
						<i class="far fa-clock"></i> <?= $d['jam'] ?>
					</a>
					<input type="submit" class="btn btn-md btn-primary" value="Daftar">
				</div>
			</div>
			</form>
			<?php endforeach; ?>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
