<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--  Title -->
	<title>Pariwisata - VSGA </title>
	<!--  Favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('distbaru/images/logos/favicon.ico') }}">
	<!--  Aos -->
	<link rel="stylesheet" href="{{ asset('distbaru/libs/aos/dist/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('distbaru/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('distbaru/css/style.min.css') }}">
	@yield('css')
</head>

<body>
	<div class="page-wrapper p-0 overflow-hidden">
		<header class="header">
			<nav class="navbar navbar-expand-lg py-0">
				<div class="container">
					<a class="navbar-brand me-0 py-0" href="index.html">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaF4VaYqMme1q8NtTXGgWMVZ33rcDNo-bWQg&s" style="height: 100px;" alt="img-fluid">
					</a>
					<button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="ti ti-menu-2 fs-9"></i>
					</button>
					<button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<i class="ti ti-menu-2 fs-9"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav align-items-center mb-2 mb-lg-0 ms-auto">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="/">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="/pesan">Pesan Sekarang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="/riwayat">Riwayat Pesanan</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<div class="body-wrapper overflow-hidden">
			<div class="card">
				<div class="card-body">
					<div id="carouselExampleCaptions" class="carousel slide carousel-dark" data-bs-ride="carousel">
						<ol class="carousel-indicators">
							<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"></li>
							<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=""></li>
							<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class=""></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="https://ik.imagekit.io/tvlk/blog/2022/06/Hotel-di-Jakarta-dengan-Balkon-Somerset-Sudirman-Jakarta-2-1024x683.jpeg?tr=dpr-2,w-675" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h1>First slide label</h1>
									<h4>
										Nulla vitae elit libero, a pharetra augue mollis
										interdum.
									</h4>
								</div>
							</div>
							<div class="carousel-item">
								<img src="https://ik.imagekit.io/tvlk/blog/2022/06/Hotel-di-Jakarta-dengan-Balkon-Somerset-Sudirman-Jakarta-2-1024x683.jpeg?tr=dpr-2,w-675" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h1>Second slide label</h1>
									<h4>
										Lorem ipsum dolor sit amet, consectetur adipiscing
										elit.
									</h4>
								</div>
							</div>
							<div class="carousel-item">
								<img src="https://ik.imagekit.io/tvlk/blog/2022/06/Hotel-di-Jakarta-dengan-Balkon-Somerset-Sudirman-Jakarta-2-1024x683.jpeg?tr=dpr-2,w-675" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h1>Third slide label</h1>
									<h4>
										Praesent commodo cursus magna, vel scelerisque
										nisl consectetur.
									</h4>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</a>
					</div>
				</div>
			</div>
			@yield('content')
		</div>

	</div>

	<script src="{{ asset('distbaru/libs/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('distbaru/libs/aos/dist/aos.js') }}"></script>
	<script src="{{ asset('distbaru/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('distbaru/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('distbaru/js/custom.js') }}"></script>
	@yield('js')
</body>

</html>