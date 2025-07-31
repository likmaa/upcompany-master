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
				<h2>Audit énergétique</h2>
			</div> 
		</div> 
	</div> 

	<!-- 
	=============================================
		Our Solution
	============================================== 
	-->
	<div class="our-solution section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 order-lg-last pt-75">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        @foreach($audit->images as $image)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index}}" class="@if($loop->first) active @endif"></li>
                        @endforeach
                        
                      </ol>
                      <div class="carousel-inner">
                        @foreach($audit->images as $image)
                            <div class="carousel-item @if($loop->first) active @endif">
                              <img class="d-block w-100" src="{{ asset($image->path) }}" alt="First slide" height="350px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">{!! $image->title !!}</h5>
                                    <p>{!! $image->description !!}</p>
                                </div>
                            </div>
                        @endforeach
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
				</div>
				<div class="col-lg-6 col-12 text order-lg-first">
					<div class="theme-title-one">
						<h2>{{ $audit->title}}</h2>
					</div> 
					{!! $audit->description !!}
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
			</div> 
		</div>
	</div>


	@include('footer')
@stop

