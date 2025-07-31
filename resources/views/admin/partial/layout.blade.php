<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Upcompany Admin </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('css')
     
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{ route('dashboard') }} ">Up company Admin</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        {{-- <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li> --}}
        <li><a class="app-nav__item" href="{{ route('home') }}" target="_blank"> Allez sur le site</a></li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href=""><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href=""><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li>
            	<a class="dropdown-item" href="{{ route('logout') }}"
               	onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
	        	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item @link('dashboard')active @endlink" href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item @link('slide.index')active @endlink" href="{{ route('slide.index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Slide</span></a></li>

        <li><a class="app-menu__item @link('about.index')active @endlink" href="{{ route('about.index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">A propos</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Services</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item " href="{{ route('service.index') }}"><i class="icon fa fa-circle-o"></i>Tout les services</a></li>
            <li><a class="treeview-item" href="{{ route('service.show',1) }}"><i class="icon fa fa-circle-o"></i>Système Autonome Hybride...</a></li>
            <li><a class="treeview-item" href="{{ route('service.show',2) }}" rel="noopener"><i class="icon fa fa-circle-o"></i> Photovoltaïque PME-PMI</a></li>
            <li><a class="treeview-item" href="{{ route('service.show',3) }}"><i class="icon fa fa-circle-o"></i> Exploitation Agricole</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Offres</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('offre.index') }}"><i class="icon fa fa-circle-o"></i>Tout les offres</a></li>
            <li><a class="treeview-item" href="{{ route('offre.index') }}"><i class="icon fa fa-circle-o"></i> Éclairage LED Particulier</a></li>
            <li><a class="treeview-item" href="{{ route('offre.index') }}"><i class="icon fa fa-circle-o"></i> Éclairage LED Entreprise</a></li>
            <li><a class="treeview-item" href="{{ route('offre.index') }}"><i class="icon fa fa-circle-o"></i> Kits Solaires et SSD</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item @link('produit.index')active @endlink" href="{{ route('produit.index') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Produits</span></a></li>

        <li><a class="app-menu__item @link('audit.index')active @endlink" href="{{ route('article.index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Actualité</span></a></li>
        <li><a class="app-menu__item @link('audit.index')active @endlink" href="{{ route('audit.index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Audit</span></a></li>

        <li><a class="app-menu__item @link('info.index')active @endlink" href="{{ route('info.index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Info</span></a></li>

      </ul>
    </aside>
    <main class="app-content">
      @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <script src="{{ asset('js/admin.js') }}"></script>

    @stack('js')
  </body>
</html>