@extends('layouts.layouts')

@section('css')
@stop

@section('content')

<div class="row">
	<div class="col-lg-8 d-flex align-items-stretch pt-4 px-4">
		<div class="card w-100">
			<div class="card-body p-4">
				<div class="row mt-4">
					<div class="col-lg-4 mt-4">
						<div class="card">
							<img class="card-img-top img-responsive" style="width: 332px; height: 250px;" src="https://awsimages.detik.net.id/community/media/visual/2023/05/11/pulau-pahawang-lampung_169.jpeg?w=1200" alt="Card image cap" />
							<div class="card-body">
								<h4 class="card-title">Pulau Pahawang</h4>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's content.
								</p>
								<a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 mt-4">
						<div class="card">
							<img class="card-img-top img-responsive" style="width: 332px; height: 250px;" src="https://asset.kompas.com/crops/ADE0-xNCNyAIvoRpndo5Oy7zE7k=/0x0:0x0/750x500/data/photo/2023/08/07/64d08ba053ec3.jpg" alt="Card image cap" />
							<div class="card-body">
								<h4 class="card-title">Teluk Hantu</h4>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's content.
								</p>
								<a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 mt-4">
						<div class="card">
							<img class="card-img-top img-responsive" style="width: 332px; height: 250px;" src="https://asset.kompas.com/crops/JH2snjV8P4cK14NBik5YQMbiB3w=/15x153:704x613/750x500/data/photo/2023/06/24/64971eeb98ff8.jpeg" alt="Card image cap" />
							<div class="card-body">
								<h4 class="card-title">Pulau Tegal Mas</h4>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's content.
								</p>
								<a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 d-flex align-items-stretch pt-4">
		<div class="card w-100">
			<div class="card-body">
				<div class="row">
					<iframe width="400" height="300" src="https://www.youtube.com/embed/n3XTZde8ZvQ" title="How Bad is This $10,000 PC from 10 Years Ago??" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>


@section('js')
<script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!--  core files -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<script src="{{ asset('dist/js/app.init.js')}}"></script>
<script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script>
<!--  current page js files -->
<script src="{{ asset('dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('dist/js/dashboard.js') }}"></script>
<script src="{{ asset('dist/js/dashboard3.js') }}"></script>
<script src="{{ asset('dist/libs/fullcalendar/index.global.min.js') }}"></script>
<script src="{{ asset('dist/js/apps/calendar-init.js') }}"></script>
@stop
@endsection