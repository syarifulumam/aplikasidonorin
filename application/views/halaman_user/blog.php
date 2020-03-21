<div class="container">
	<div class="row">
		<?php foreach ($artikel as $key):?>
		<div class="col-xl-4 mt-3 mb-5">
			<a href="<?= base_url('blog/p/'.$key->url)?>">
				<div class="card h-100" style="">
					<img src="<?= base_url('uploads/'.$key->thumbnail)?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-dark card-title"><?= $key->judul ?></h4>
					</div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
	</div>
</div>
