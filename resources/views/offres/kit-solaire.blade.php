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
				<h2>Kits Solaires et SSD</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->
	
	
	<!-- 
	=============================================
		Nos solution PME/ PMI
	============================================== 
	-->
    <div class="section-spacing">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-6">
        			<div class="theme-title-one">
                        <h4>{{$offre->title}}</h4>
        			</div>
        		</div>
        	</div>
        	<div class="row">
                <div class="col-lg-6">
                    <div class="text">
                        <div class="theme-title-one">
                            {!! $offre->description !!}
                        </div> <!-- /.theme-title-one -->
                    </div> <!-- /.text -->
                </div>
                <div class="col-lg-6">
                    <div class="pt-27">
                        <img class="d-block w-100" src="{{ asset($offre->image->path) }}" alt="First slide" height="350px">
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	<!-- 
	=============================================
		Feature Banner
	============================================== 
	-->
	<div class="feature-banner section-spacing">
		<div class="opacity">
			<div class="container">
				<h2>Nous fournissons des solutions innovantes de productions & de gestions d'électricité</h2>
                <a href="{{ route('contact') }}" class="theme-button-one">En savoir plus</a>
			</div> <!-- /.container -->
		</div> <!-- /.opacity -->
	</div> <!-- /.feature-banner -->


	@include('footer')
@stop

