<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet"-->
  </head>
  <body>
    <div id="app" class="container-super">
      <header class="header d-flex flex-row justify-content-end align-items-center">
      <!-- Logo -->
        <div class="logo_container mr-auto">
          <div class="logo">
            <a href="{{ url('/') }}" title="Anpu Design">
              <img src="{{ asset('storage/anpu.svg') }}" alt="Anpu Design Logo"/>
            </a>
          </div>
        </div>
        <!-- Main Navigation -->
        <nav class="main_nav justify-self-end">
          <ul class="nav_items">
            <li class="active"><a href="{{ url('/') }}"><span>Home</span></a></li>
            <li><a href="{{ url('/blog') }}"><span>Blog</span></a></li>
            <li><a href="{{ url('/tutorials') }}"><span>Tutorials</span></a></li>
            <li><a href="{{ url('/gallery') }}"><span>Gallery</span></a></li>
            <li><a href="{{ url('/about') }}"><span>About</span></a></li>
            <li><a href="{{ url('/about') }}"><span><i class="fas fa-search fa-2x"></i></span></a></li>
          </ul>
        </nav>
        <!-- Hamburger -->
        <div class="hamburger_container">
          <span class="hamburger_text">Menu</span>
          <span class="hamburger_icon"></span>
        </div>
      </header>
      <!-- Mobile Menu -->
      <div class="fs_menu_overlay"></div>
      <div class="fs_menu_container">
        <div class="fs_menu_shapes">
          <img src="images/menu_shapes.png" alt="">
        </div>
        <nav class="fs_menu_nav">
          <ul class="fs_menu_list">
            <li>
              <a href="#">
                <span><span>H</span>Home</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span><span>S</span>Services</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span><span>E</span>Elements</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span><span>B</span>Blog</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span><span>C</span>Contact</span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="fs_social_container d-flex flex-row justify-content-end align-items-center">
          <ul class="fs_social">
            <li>
              <a href="{{ url('/l/facebook') }}">
                <i class="fab fa-facebook-f trans_300"></i>
              </a>
            </li>
            <li>
              <a href="{{ url('/l/twitter') }}">
                <i class="fab fa-twitter trans_300"></i>
              </a>
            </li>
            <li>
              <a href="{{ url('/l/youtube') }}">
                <i class="fab fa-youtube trans_300"></i>
              </a>
            </li>
            <li>
              <a href="{{ url('/l/linkedin') }}">
                <i class="fab fa-linkedin-in trans_300"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    <main class="py-4">
    @yield('content')
    </main>
    <!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row footer_content d-flex flex-sm-row flex-column align-items-center">
				<div class="col-sm-6 cr text-sm-left text-center">
					<p>
					  Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
					 </p>
				</div>
				<div class="col-sm-6 text-sm-right text-center">
					<div class="footer_social_container">
						<ul class="footer_social">
							 <li>
              <a href="{{ url('/l/facebook') }}">
                <i class="fab fa-facebook-f trans_300"></i>
              </a>
            </li>
            <li>
              <a href="{{ url('/l/twitter') }}">
                <i class="fab fa-twitter trans_300"></i>
              </a>
            </li>
            <li>
              <a href="{{ url('/l/youtube') }}">
                <i class="fab fa-youtube trans_300"></i>
              </a>
            </li>
            <li>
              <a href="{{ url('/l/linkedin') }}">
                <i class="fab fa-linkedin-in trans_300"></i>
              </a>
            </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/fa/fontawesome-all.min.js') }}" defer></script>
    <!-- include libraries(jQuery, bootstrap) -->
    
 
  </body>
</html>
