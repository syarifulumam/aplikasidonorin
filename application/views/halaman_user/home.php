<div class="container">
	<div class="row mb-5 mt-5 penjelasan">
		<div class="col-lg-6 order-12 order-lg-1 mt-xl-5">
			<h2 class=" font-weight-bold mt-5">SELAMAT DATANG DI <span style="color: #dc3545">DONORIN</span>
			</h2>
			<p class="lead">
				Memudahkan bagi pendonor dan yang membutuhkan darah
				mereka SELAMAT kita SEHAT
			</p>
			<button class="btn btn-danger">
				Daftar
			</button>
			<button class="btn btn-light">
				Pelajari Lebih Lanjut
			</button>
		</div>
		<div class="col-lg-6 order-1 order-lg-12 gambar">
			<img src="<?= base_url('assets/image/medic.png') ?>" class="img-responsiv" style="width:100%" />
		</div>
	</div>
	<main>
		<section class="section-1">
			<div class="container text-center">
				<!-- slider -->
				<div class="row">
					<div class="col-12 mt-5 mb-5">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner slider-gambar">
								<div class="carousel-item active">
									<a href="#"><img src="<?= base_url('assets/image/thubnail1.jpg') ?>"
											class="d-block w-100" alt="..."></a>
								</div>
								<div class="carousel-item">
									<a href="#"><img src="<?= base_url('assets/image/thubnail2.jpg') ?>"
											class="d-block w-100" alt="..."></a>
								</div>
								<div class="carousel-item">
									<a href="#"><img src="<?= base_url('assets/image/thubnail3.jpg') ?>"
											class="d-block w-100" alt="..."></a>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
								data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
								data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<!-- end slider -->
				<div class="row nilai mb-5">
					<div class="col-lg-4">
						<img src="<?= base_url('assets/image/cek4.png') ?>" class="img-responsiv">
						<h2>Mudah</h2>
						<p>Cari lokasi dan isi formulir donor darah jadi lebih mudah</p>
					</div>
					<div class="col-lg-4">
						<img src="<?= base_url('assets/image/notif2.png') ?>" class="img-responsiv">
						<h2>Notifikasi</h2>
						<p>Mendapatkan informasi seputar kesehatan dan pengingat untuk donor darah</p>
					</div>
					<div class="col-lg-4">
						<img src="<?= base_url('assets/image/gift2.png') ?>" class="img-responsiv">
						<h2>Reward</h2>
						<p>Kumpulkan point dan tukar dengan berbagai macam reward</p>
					</div>
				</div>
			</div>
		</section>
</div>
<!-- /container  -->
<section class="section-2">
	<div class="parallax">
		<!-- <img src="<?= base_url('assets/image/gambar-paralax.jpg') ?>" class="parallax-img"> -->
		<h1 class="text-center pt-5">STOK DARAH</h1>
	</div>
	<div class="container text-center">
		<div class="numbers">
			<div class="row">
				<div class="col-md-3">
					<div class="kotak rect py-3 mb-4">
						<h1>A+</h1>
						<p><?= $stok[1] ?></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="kotak rect py-3 mb-4">
						<h1>B+</h1>
						<p><?= $stok[3] ?></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="kotak rect py-3 mb-4">
						<h1>O+</h1>
						<p><?= $stok[5] ?></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="kotak rect py-3 mb-4">
						<h1>AB+</h1>
						<p><?= $stok[7] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pertanyaan container">
		<h1 class="text-center">Frequently Ask Question</h1>
		<div class="accordion py-5" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
							aria-expanded="true" aria-controls="collapseOne">
							Mengapa harus bayar saat kita butuh darah dari PMI?
						</button>
					</h2>
				</div>

				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body text-justify">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
						squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
						quinoa
						nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
						single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
						beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
						vice
						lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
						probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
							data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Mengapa kita perlu donor darah?
						</button>
					</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body text-justify">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
						squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
						quinoa
						nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
						single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
						beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
						vice
						lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
						probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingThree">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
							data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Apa yang harus dipersiapkan sebelum donor darah?
						</button>
					</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body text-justify">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
						squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
						quinoa
						nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
						single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
						beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
						vice
						lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
						probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</main>
