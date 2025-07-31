@extends('charles')

@section('content')
	@include('header')
	<!-- 
	=============================================
		Theme Inner Banner
	============================================== 
	-->
	<div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>A propos de nous</h2>
			</div> 
		</div>
	</div>

	<!-- 
	=============================================
		CallOut Banner 
	============================================== 
	-->
	<div class="callout-banner no-bg">
		<div class="container clearfix">
			<h3 class="title">Émergence de <br>l'energie solaire</h3>
			<p>L'histoire d'un voyage fantastique avec la société UP COMPANY qui démarre avec vous vers un monde de l’énergie solaire fabuleux, étonnant et plein de surprise. Faites-vous surprendre.
			</p>
			<a href="{{ route('contact') }}" class="theme-button-one">CONTACTEZ NOUS</a>
		</div>
	</div> 

	<!-- 
	=============================================
		About Company Stye Two
	============================================== 
	-->
	<div class="about-compnay-two no-bg section-spacing">
		<div class="overlay">
			<div class="container">
				@foreach($abouts as $about)
					<div class="row @if($loop->index >= 1) pt-5 @endif">
						@if($loop->index %2 ==0)
							<div class="col-lg-6 col-12 text order-lg-last">
								@if($loop->index == 1)
									<div class="theme-title-one">
										<h2>A propos de nous</h2>
									</div> 
								@endif
								
								{!! $about->description!!}
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-12 order-lg-first">
								<img src="{{ $about->image->path }}" alt="" class="left-img">
							</div>
							@else
								<div class="col-lg-6 col-12 order-lg-last">
									<img src="{{ $about->image->path }}" alt="" class="left-img">
								</div>
								<div class="col-lg-6 col-12 text order-lg-first">
									{!! $about->description!!}
								</div> 
						@endif
					</div> 
				@endforeach
			</div> 
		</div> 
	</div> 


	<!--
	=====================================================
		Why We Best
	=====================================================
	-->
	<div class="why-we-best">
		<div class="overlay">
			<div class="container">
				<div class="theme-title-one">
					<h2>NOUS SOMMES LES MEILLEURS</h2>
					{{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> --}}
				</div> 

				<div class="wrapper row no-gutters">
					<div class="col-lg-6 col-12 order-lg-last"><div class="img-box"></div></div>
					<div class="col-lg-6 col-12 order-lg-first">
						<ul class="best-list-item">
							<li>
								<i class="icon flaticon-puzzle"></i>
								<h5><a href="#">Meilleure Stratégie</a></h5>
								<p>Technologie innovante pour un résultat optimal</p>
							</li>
							<li>
								<i class="icon flaticon-presentation"></i>
								<h5><a href="#">Service de qualité</a></h5>
								<p>Une équipe engagée avec des équipements de pointes.</p>
							</li>
							<li>
								<i class="icon flaticon-people"></i>
								<h5><a href="#">Support Client</a></h5>
								<p>Un service client exceptionnel pour un choix exceptionnel.</p>
							</li>
						</ul>
					</div>
				</div>
			</div> 
		</div> 
	</div> 

	<!--
	=====================================================
		Theme Counter
	=====================================================
	-->
	<div class="theme-counter-two section-spacing">
		<div class="container">
			<div class="clearfix">
				<div class="cunter-wrapper">
					<div class="row">
						<div class="col-md-4 col-6">
							<div class="single-counter-box">
		        				<div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5">0</span>%</div>
		        				<p>Satisfaction Client</p>
		        			</div> <!-- /.single-counter-box -->
						</div>  <!-- /.col- -->
						<div class="col-md-4 col-6">
							<div class="single-counter-box">
		        				<div class="number"><span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5">0</span>k</div>
		        				<p>Cases Completed</p>
		        			</div> <!-- /.single-counter-box -->
						</div>  <!-- /.col- -->
						<div class="col-md-4 col-6">
							<div class="single-counter-box">
		        				<div class="number"><span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5">0</span></div>
		        				<p>Consultants</p>
		        			</div> <!-- /.single-counter-box -->
						</div>  <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.cunter-wrapper -->
			</div> <!-- /.clearfix -->
		</div> <!-- /.container -->
	</div> <!-- /.theme-counter -->



	
	@include('footer')
@stop

