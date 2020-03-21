<div class="card">
	<div class="card-header">
		Add Artikel
	</div>
	<div class="card-body">
		<?=form_open('');?>
		<div class="form-group">
			<label for="judul">Judul</label>
			<input type="hidden" class="form-control " name="id" value="<?= $artikel->id_artikel ?>" autocomplete="off">
			<input type="text" class="form-control " name="judul" value="<?= $artikel->judul ?>" autocomplete="off">
			<?= form_error('judul','<small class="text-danger pl-1">','</small>') ?>
		</div>
		<div class="form-group">
			<label for="konten">Konten</label>
			<textarea id="summernote" class="textarea" name="konten" placeholder="Place some text here"
				style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
			<?=$artikel->konten?>
			</textarea>
			<?= form_error('konten','<small class="text-danger pl-1">','</small>') ?>
		</div>
		<div class="form-group">
			<label for="judul">Url</label>
			<input type="text" class="form-control " name="url" value="<?=$artikel->url?>" autocomplete="off">
			<?= form_error('url','<small class="text-danger pl-1">','</small>') ?>
		</div>
	</div>
	<div class="card-footer">
		<a href="<?= base_url('artikel')?>" class="btn btn-default">Kembali</a>
		<input type="submit" class="btn btn-primary float-right" value="Submit">
		</form>
	</div>
</div>
