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
						<select class="form-control select2" name="golongan" style="width: 100%;">
							<option selected="selected">Golongan Darah</option>
							<option value="a_pos">A</option>
							<option value="b_pos">B</option>
							<option value="ab_pos">AB</option>
							<option value="o_pos">O</option>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control select2" name="komponen" style="width: 100%;">
							<option selected="selected">Komponen</option>
							<option>AHF</option>
							<option>BC</option>
							<option>FFP</option>
							<option>FP</option>
							<option>Lekosit Aferesis</option>
							<option>Leucodepleted</option>
							<option>Leucodepletet</option>
							<option>Leucoreduced</option>
							<option>LP</option>
							<option>LP Aferesis</option>
							<option>PCL</option>
							<option>PCLs</option>
							<option>PRC</option>
							<option>PRC Aferesis</option>
							<option>TC</option>
							<option>TC Aferesis</option>
							<option>TC Apheresi</option>
							<option>TC APR</option>
							<option>TCP</option>
							<option>WB</option>
							<option>WB FRESH</option>
							<option>WE</option>
						</select>
					</div>
					<button type="submit" class="btn btn-danger form-control">Cari</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<?php 
				foreach ($donor as $d):
				$data_tempat = array('id'=>$d['id'],'nama_tempat'=>$d['unit']);
				echo form_open('permintaan_darah', '', $data_tempat);
			?>
			<div class="card bg-light">
				<div class="card-body">
					<h4><?= $d['unit'] ?></h3>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-md bg-teal">
						<i class="fas fa-medkit"></i> <?= $d['jumlah'] ?>
					</a>
					<button type="submit" class="btn btn-md btn-primary">Submit</button>
				</div>
			</div>
			</form>
			<?php endforeach; ?>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
