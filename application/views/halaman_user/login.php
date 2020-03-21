<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-xl-4 mt-5 mb-5 pb-5">
			<div class="card">
				<div class="card-body">
					<h2 class="p-2 text-center">Masuk ke Donorin</h2>
					<?php if(!empty($this->session->flashdata('gagal'))): ?>
					<div class="alert alert-danger" role="alert">
						<?= $this->session->flashdata('gagal') ?>
					</div>
					<?php elseif(!empty($this->session->flashdata('success'))): ?>
					<div class="alert alert-success" role="alert">
						<?= $this->session->flashdata('success') ?>
					</div>
					<?php endif;?>
					<?= form_open('login')?>
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Masukan E-mail"
							autocomplete="off" value="<?= set_value('email')?>">
						<?= form_error('email',"<small class='text-danger'>","</small>")?>
					</div>
					<div class=" form-group">
						<input type="password" name="password" class="form-control" placeholder="Masukan Password">
						<?= form_error('password',"<small class='text-danger'>","</small>")?>
					</div>
					<div class="form-group">
						<?=form_submit('submit','Masuk',"class='btn btn-primary'")?>
					</div>
					<div class="form-check" style="display: inline-block;">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Ingat saya |<a href=""> Lupa kata
								sandi?</a></label>
					</div>
					</form>
				</div>
				<div class="card-footer">
					<span class="text-muted">Belum Punya Akun ? </span><a href="<?= base_url('register')?>">Daftar
						Sekarang</a>
				</div>
			</div>
		</div>
	</div>
</div>
