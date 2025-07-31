
<!--
=====================================================
	Partner Slider
=====================================================
-->
<div class="partner-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-4 col-12">
				<h6>NOS <br>PARTENAIRES</h6>
			</div>
			<div class="col-md-9 col-sm-8 col-12">
				<div class="partner-slider">
					@foreach($partenaires as $partenaire)
						<div class="item mr-3">
							<a href="{{$partenaire->link}}" target="_blank">
								<img src="{{ asset($partenaire->image->path) }}" alt="" class="partner-logo">
							</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.partner-section -->
<!--
=====================================================
	Footer
=====================================================
-->
<footer class="theme-footer-one">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-sm-6 about-widget">
					<h6 class="title">À propos de nos conseils</h6>
					<p class="text-white">{!! $infos->description!!}</p>
					<div class="queries"><i class="flaticon-phone-call"></i> Une préoccupation : <a href="#">{{ $infos->telephone}}</a></div>
				</div> <!-- /.about-widget -->
				<div class="col-xl-4 col-lg-4 col-sm-6 footer-recent-post">
					<h6 class="title">Articles Récents</h6>
					<ul>
						@foreach($recent_article as $article)
						<li class="clearfix">
							<img src="{{ asset('images/blog/1.jpg') }}" alt="" class="float-left">
							<div class="post float-left">
								<a href="#">{{ $article->title}}</a>
								<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Feb 06, 2018</div>
							</div>
						</li>
						@endforeach
						
					</ul>
				</div> <!-- /.footer-recent-post -->
				<div class="col-xl-2 col-lg-4 col-sm-6 footer-list">
					<h6 class="title">LIENS UTILES</h6>
					<ul>
						<li><a href="{{ route('home') }}">Accueil</a></li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
						<li><a href="{{ route('a-propos') }}">A propos</a></li>
						<li><a href="{{ route('eclairage-led') }}"> Éclairage LED</a></li>
						<li><a href="{{ route('audit') }}">Audit énergétique</a></li>
						<li><a href="{{ route('kit-solaire') }}">Kits solaires et ssd</a></li>
						<li><a href="{{ route('rurale') }}">Électrification Rurale</a></li>
					</ul>
				</div> <!-- /.footer-list -->
				<div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter">
					<h6 class="title">NEWSLETTER</h6>
					<form action="#">
						<input type="text" placeholder="Name *">
						<input type="email" placeholder="Email *">
						<button class="theme-button-one">SUBSCRIBE</button>
					</form>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.top-footer -->
	<div class="bottom-footer" style="background: #e65100">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12"><p class="text-white">&copy; Copyrights 2019. All Rights Reserved.</p></div>
				<div class="col-md-6 col-12">
					<ul>
						<li><a href="{{ route('a-propos') }}">A propos</a></li>
						<li><a href="{{ route('audit') }}">Audit énergétique</a></li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- /.bottom-footer -->
</footer> <!-- /.theme-footer -->




<!-- Scroll Top Button -->
<button class="scroll-top tran3s">
	<i class="fa fa-angle-up" aria-hidden="true"></i>
</button>
			