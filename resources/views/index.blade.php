@extends('charles')

@section('content')
	@include('header')
	<!-- 
	=============================================
		Theme Main Banner
	============================================== 
	-->
	<div id="theme-main-banner" class="banner-one">
        @foreach($slides as $slide)
		<div data-src="{{ asset($slide->image->path) }}" >
            <div class="camera_caption">
                <div class="container">
                    <p class="wow fadeInUp animated text-white" data-wow-delay="0.2s">{!! $slide->sub_title !!}</p>
                    <h2 class="wow fadeInUp animated my-5 text-white" data-wow-delay="0.4s" data-wow-duration="3s">{!! $slide->title !!}</h2>
                    <a href="{{route('contact')}}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.6s">CONTACTEZ NOUS</a>
                </div> <!-- /.container -->
            </div> <!-- /.camera_caption -->
        </div>
        @endforeach
	</div> <!-- /#theme-main-banner -->
	
	<div class="tm-section-2">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="tm-section-title text-white">L’energie juste et efficace.</h2>
                </div>                
            </div>
        </div>        
    </div>
    <div class="tm-section tm-position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow" >
            <polygon fill="#f36637" points="0,0  100,0  50,60"></polygon>                   
        </svg> 
    </div>


    <!-- 
    =============================================
        About Company
    ============================================== 
    -->
    <div class="about-compnay section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mt-45">
                        <img src="{{ asset($about->image->path) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="text">
                        <div class="theme-title-one">
                            <h2>Qui sommes nous</h2>
                            {!! $about->description !!}
                        </div> <!-- /.theme-title-one -->
                    </div> <!-- /.text -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.about-compnay -->




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





    <!-- 
    =============================================
    	Our Solution
    ============================================== 
    -->
    <div class="our-solution section-spacing">
    	<div class="container">
    		<div class="theme-title-one">
    			<h2>Nos services</h2>
    		</div> 
    		<div class="wrapper">
    			<div class="row">
                    @foreach($services as $service)
        				<div class="col-lg-4 col-sm-6 col-12">
        					<div class="single-solution-block">
        						<img src="{{ asset($service->icon) }}" alt="" class="icon">
        						<h5><a href="service-details.html">{{$service->title}}</a></h5>
        						<p class="text-justify">{{$service->short_description}}</p>
        					</div> 
        				</div> 
                    @endforeach
    			</div> 
    		</div> 
    	</div> 
    </div> 
    


    <!--
    =====================================================
    	Nos Produits
    =====================================================
    -->
    <div class="related-product shop-page overlay-gray">
        <div class="theme-title-one py-5">
            <h2>Nos Produits</h2>
            <p class="text-orange">Une vaste panoplie d’équipements électriques et solaire originaux.</p>
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

    <!-- 
    =============================================
        Core Values
    ============================================== 
    -->
    @if(count($articles) > 0)
        <div class="core-values article-recent">
            <div class="container">
                <div class="theme-title-one">
                    <h2>ARTICLES RÉCENTS</h2>
                </div> 
                <div class="wrapper article">
                    <div class="core-value-slider">
                        @foreach($articles as $article)
                            <div class="item">
                                <div class="single-value-block">
                                    <div class="image-box">
                                        <img src="{{ optional($article->image)->path }}" alt="">
                                        <div class="overlay"><a href="{{ route('single-article',$article->alias) }}" class="theme-button-one">CONTINUER LA LECTURE</a></div>
                                    </div> 
                                    <div class="text">
                                        <h5><a href="{{ route('single-article',$article->alias) }}">{{ $article->title}}</a></h5>
                                        {!! $article->short_description !!}
                                    </div> 
                                </div> 
                            </div>
                        @endforeach
                    </div> 
                </div> 
            </div> 
        </div>
    @endif

    @include('footer')
@stop

