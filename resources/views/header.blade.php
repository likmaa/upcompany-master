
<!-- ===================================================
	Loading Transition
==================================================== -->
<div id="loader-wrapper">
	<div id="loader"></div>
</div>
<!-- 
=============================================
	Theme Header One
============================================== 
-->
<header class="header-one">
	<div class="top-header">
		<div class="container clearfix">
			<div class="logo float-left"><a href="{{ route('home') }}"><img src="{{ asset('images/logo/upc-logo.png') }} " style="height: 75px;" alt="Upcompany logo"></a>
			</div>
			<div class="address-wrapper float-right">
				<ul>
					<li class="address">
						<i class="icon flaticon-placeholder"></i>
						<h6>Adresse:</h6>
						<p>{!! $infos->adresse !!} </p>
					</li>
					<li class="address">
						<i class="icon flaticon-multimedia"></i>
						<h6>E Mail :</h6>
						<p>{{$infos->email}}</p>
					</li>
					<li class="quotes"><a href="{{ route('contact') }}">Contactez nous</a></li>
				</ul>
			</div> 
		</div> 
	</div> 

	<div class="theme-menu-wrapper">
		<div class="container">
			<div class="bg-wrapper clearfix">
				<!-- ============== Menu Warpper ================ -->
		   		<div class="menu-wrapper float-right">
		   			<nav id="mega-menu-holder" class="clearfix">
					   <ul class="clearfix">
						    {{-- <li class="@link('home') active @endlink"><a href="{{ route('home') }}">Accueil</a> 
						    </li>--}}
						    <li class="@link('a-propos') active @endlink">
						    	<a href="{{ route('a-propos') }}">A propos</a>
						    </li>
						    <li><a href="#">Nos Services</a>
						    	<ul class="dropdown">
						        	<li class="@link('autonome') active @endlink"><a href="{{ route('autonome') }}">Système autonome hybride ou raccordé</a></li>
						        	<li class="@link('pme') active @endlink"><a href="{{ route('pme') }}">Photovoltaïque PME/PMI</a></li>
						        	<li class="@link('exploitations') active @endlink"><a href="{{ route('exploitations') }}">Photovoltaïque exploitations Agricole</a></li>
						       </ul>
						    </li>
						    <li><a href="#">Nos Offres</a>
						    	<ul class="dropdown">
						        	<li class="@link('rurale') active @endlink"><a href="{{ route('rurale') }}">ELECTRIFICATION RURALE</a></li>
						        	<li class="@link('eclairage-led') active @endlink"><a href="{{ route('eclairage-led') }}"> ECLAIRAGE LED</a></li>
						        	<li class="@link('kit-solaire') active @endlink"><a href="{{ route('kit-solaire') }}">Kits solaires et ssd</a></li>
						        	{{-- <li><a href="{{ route('photovoltaique') }}">Le photovoltaïque</a></li> --}}
						       </ul>
						    </li>

						    <li class="@link('audit') active @endlink"><a href="{{ route('audit') }}">Audit énergétique</a></li>
						    <li class="@link('contact') active @endlink"><a href="{{ route('contact') }}">Contact</a></li>
					   </ul>
					</nav> <!-- /#mega-menu-holder -->
		   		</div> <!-- /.menu-wrapper -->
			</div> 
		</div>
	</div> 
</header> 

	