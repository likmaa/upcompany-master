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
				<h2>Système autonome hybride ou raccordé</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->


	<!-- 
	=============================================
		Système autonome hybride ou raccordé
	============================================== 
	-->
    <div class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="theme-title-one">
                        <h4>{{ $service->title}} </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="text">
                        <div class="theme-title-one">
                            
                            {!! $service->description !!}
                        </div> <!-- /.theme-title-one -->
                    </div> <!-- /.text -->
                </div>
                <div class="col-lg-6">
                    <div class="pt-27">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            @foreach($service->images as $image)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index}}" class="@if($loop->first) active @endif"></li>
                            @endforeach
                            {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> --}}
                          </ol>
                          <div class="carousel-inner">
                            @foreach($service->images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                  <img class="d-block w-100" src="{{ asset($image->path) }}" alt="First slide" height="350px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-white">{!! $image->title !!}</h5>
                                        <p>{!! $image->description !!}</p>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('images/portfolio/t-2.png') }}" alt="Second slide" height="350px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">Business Meeting</h5>
                                    <p>Explore strange new worlds</p>
                                </div>
                            </div> --}}
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
                </div>
            </div>
        </div>
    </div>

	<!-- 
    =============================================
        Feature Banner
    ============================================== 
    -->
    <div class="feature-banner">
        <div class="opacity">
            <div class="container">
                <h2>Nous fournissons des solutions innovantes de productions & de gestions d'électricité</h2>
                <a href="{{ route('contact') }}" class="theme-button-one">En savoir plus</a>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div> <!-- /.feature-banner -->


    <!--
    =====================================================
        Nos Produits
    =====================================================
    -->
    <div class="related-product shop-page">
        <div class="theme-title-one py-5">
            <h2>Nos Produits</h2>
            <p class="text-orange">Une vaste panoplie d’équipements électriques et solaire originaux</p>
        </div> <!-- /.theme-title-one -->
        <div class="celarfix">
            <div class="related-product-slider">
                @foreach($produits as $produit)
                    <div class="item">
                        <div class="single-product">
                            <div class="image-box">
                                <img src="{{ asset($produit->image->path) }}" alt="">
                            </div> <!-- /.image-box -->
                            <div class="product-name">
                                <h5><a href="#">{{ $produit->name}}</a></h5>
                                {{-- <div class="price">{{ $produit->price}}</div> --}}
                                {{-- <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ADD TO CART</a></div> --}}
                            </div>
                        </div> <!-- /.single-product -->
                    </div> <!-- /.col- -->
                @endforeach
            </div> <!-- /.related-product-slider -->
        </div>
    </div> <!-- /.related-product -->


	@include('footer')
@stop
	