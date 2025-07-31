<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KMKP8CK');</script>
	<!-- End Google Tag Manager -->

	<meta charset="UTF-8">
	<title>Up Company Lifting Energy Access Challenges</title>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="Upcompany est société spécialisé dans l'énergie solaire et l'électricité générale. Concepteur de solution d'électrification hors réseau dans les milieux ruraux et péri-urbain.">
	<meta name="keysword" content="Upcompany bénin, energy renouvelable au bénin,solar energy,upcompany, panneau solaire, photovoltaïque,Efficacité énergitique, équipement solaire photovoltaïque,installation panneau solaire, audit énergétique{{-- , formation montage panneau solaire --}}">
	
	<!-- Token csrf -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@upcompany">
    <meta property="twitter:creator" content="@upcompany">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Upcompany">
    <meta property="og:title" content="Up Company Energie Access Challenges">
    <meta property="og:url" content="https://upcompany.co">
    <meta property="og:image" content="https://upcompany.co/images/logo/upc-logo.png">
    <meta property="og:description" content="Upcompany est société spécialisé dans l'énergie solaire et l'électricité générale.">
    
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#f36637">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#f36637">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" encien="#061948" content="#f36637">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/favicon.png') }} ">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} ">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }} ">
	@yield('css')
	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="vendor/html5shiv.js"></script>
		<script src="vendor/respond.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMKP8CK"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="main-page-wrapper">
		@yield('content')
	</div>
	
	<!-- Optional JavaScript _____________________________  -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- jQuery -->
	<script src="{{ asset('vendor/jquery.2.2.3.min.js') }}"></script>
	<!-- Popper js -->
	<script src="{{ asset('vendor/popper.js/popper.min.js') }} "></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }} "></script>
	<!-- Camera Slider -->
	<script src='{{ asset('vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }} '></script>
    <script src='{{ asset('vendor/Camera-master/scripts/jquery.easing.1.3.js') }} '></script> 
    <script src='{{ asset('vendor/Camera-master/scripts/camera.min.js') }} '></script>
    <!-- menu  -->
	<script src="{{ asset('vendor/menu/src/js/jquery.slimmenu.js') }} "></script>
	<!-- WOW js -->
	<script src="{{ asset('vendor/WOW-master/dist/wow.min.js') }} "></script>
	<!-- owl.carousel -->
	<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }} "></script>
	<!-- js count to -->
	<script src="{{ asset('vendor/jquery.appear.js') }} "></script>
	<script src="{{ asset('vendor/jquery.countTo.js') }} "></script>
	<!-- Fancybox -->
	<script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }} "></script>

	<!-- Theme js -->
	<script src="{{ asset('js/theme.js') }} "></script>

	@stack('js')

</body>
</html>