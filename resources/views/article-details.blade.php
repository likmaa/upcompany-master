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
				<h2>Article</h2>
			</div> 
		</div>
	</div>

	<!-- 
	=============================================
		Service Details
	============================================== 
	-->
	<div class="service-details section-spacing">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-9 col-lg-8 col-12">
					<div class="service-content">
						<img src="{{ asset('optional($article->image)path') }}" alt="" class="cover-img">
						<h3 class="main-title">{{$article->title}}</h3>
						{!! $article->description !!}
					</div> <!-- /.service-content -->
				</div> <!-- /.col- -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.service-details -->

@include('footer')

@stop