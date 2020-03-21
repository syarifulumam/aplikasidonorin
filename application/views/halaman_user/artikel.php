<div class="container">
	<div class="row pt-5 pb-5">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2><?= $artikel->judul ?></h2>
			<img src="<?= base_url('uploads/'.$artikel->thumbnail)?>" class="w-100 pb-3" alt="">
			<p><?= $artikel->konten ?></p>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
