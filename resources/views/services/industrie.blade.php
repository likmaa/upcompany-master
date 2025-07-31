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
				<h2>Solution pme-pmi</h2>
				<p>Nous étudions les différentes possibilités  afin de mettre en place une installation de production de l’électricités tout en générant des économies très important sur vos facture d’électricités.</p>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<!-- 
	=============================================
		Our Solution
	============================================== 
	-->
	<div class="our-solution section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Nos Solutions</h2>
				<p></p>
			</div> <!-- /.theme-title-one -->
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="single-solution-block">
							<img src="{{ asset('images/icon/5.png') }}" alt="" class="icon">
							<h5><a href="service-details.html">Business Services</a></h5>
							<p>The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone. </p>
						</div> <!-- /.single-solution-block -->
					</div> <!-- /.col- -->
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="single-solution-block">
							<img src="{{ asset('images/icon/6.png') }}" alt="" class="icon">
							<h5><a href="service-details.html">Business Services</a></h5>
							<p>The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone. </p>
						</div> <!-- /.single-solution-block -->
					</div> <!-- /.col- -->
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="single-solution-block">
							<img src="{{ asset('/images/icon/7.png') }}" alt="" class="icon">
							<h5><a href="service-details.html">Business Services</a></h5>
							<p>The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone. </p>
						</div> <!-- /.single-solution-block -->
					</div> <!-- /.col- -->
				</div> <!-- /.row -->
			</div> <!-- /.wrapper -->
		</div> <!-- /.container -->
	</div> <!-- /.our-solution -->
	

	
	<!-- 
	=============================================
		Feature Banner
	============================================== 
	-->
	<div class="feature-banner section-spacing">
		<div class="opacity">
			<div class="container">
				<h2>We provide high quality services &amp; innovative solutions for the realiable growth</h2>
				<a href="#" class="theme-button-one">GET A QUOTES</a>
			</div> <!-- /.container -->
		</div> <!-- /.opacity -->
	</div> <!-- /.feature-banner -->


	@include('footer')
@stop

