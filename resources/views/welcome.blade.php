@extends('layouts.app')

@section('content')
<!-- Hero Slider -->

<div class="home">
  <div class="hero_slider_container slider_prlx">
  <div class="owl-carousel owl-theme hero_slider">
  
  <!-- Slider Item -->
  <div class="owl-item main_slider_item">
  <div class="main_slider_item_bg" style="background-image:url({{ asset('storage/render.jpg') }})"></div>
  <div class="main_slider_shapes"><img src="{{ asset('storage/menu_shapes.png') }}" alt="" style="width: 100% !important;"></div>
  <div class="container">
  <div class="row">
  <div class="col slider_content_col">
  <div class="main_slider_content">
  <h1>Exposer and Light</h1>
  <h1>with <span>VRay</span> plugin</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. </p>
  <div class="button discover_button">
  <a href="#" class="d-flex flex-row align-items-center justify-content-center">Discover<img src="images/arrow_right.svg" alt=""></a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  <!-- Slider Item -->
  <div class="owl-item main_slider_item">
  <div class="main_slider_item_bg" style="background-image:url({{ asset('storage/room_closeup2.png') }})"></div>
  <div class="main_slider_shapes"><img src="{{ asset('storage/menu_shapes.png') }}" alt="" style="width: 100% !important;"></div>
  <div class="container">
  <div class="row">
  <div class="col slider_content_col">
  <div class="main_slider_content">
  <h1>Do you need</h1>
  <h1>a <span>modern</span> website?</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. </p>
  <div class="button discover_button">
  <a href="#" class="d-flex flex-row align-items-center justify-content-center">discover<img src="images/arrow_right.svg" alt=""></a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  <!-- Slider Item -->
  <div class="owl-item main_slider_item">
  <div class="main_slider_item_bg" style="background-image:url({{ asset('storage/kitchen_final.png') }})"></div>
  <div class="main_slider_shapes"><img src="{{ asset('storage/menu_shapes.png') }}" alt="" style="width: 100% !important;"></div>
  <div class="container">
  <div class="row">
  <div class="col slider_content_col">
  <div class="main_slider_content">
  <h1>Do you need</h1>
  <h1>a <span>modern</span> website?</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. </p>
  <div class="button discover_button">
  <a href="#" class="d-flex flex-row align-items-center justify-content-center">discover<img src="images/arrow_right.svg" alt=""></a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  <!-- Slider Dots -->
  
  <div class="main_slider_dots">
  <div class="container">
  <div class="row">
  <div class="col">
  <ul id="main_slider_custom_dots" class="main_slider_custom_dots">
  <li class="main_slider_custom_dot active">01.</li>
  <li class="main_slider_custom_dot">02.</li>
  <li class="main_slider_custom_dot">03.</li>
  </ul>
  </div>
  </div>
  </div>		
  </div>
  
  <!-- Slider Dots -->
  
  <div class="main_slider_nav_left main_slider_nav">
  <i class="fas fa-chevron-left trans_300"></i>
  </div>
  
  <div class="main_slider_nav_right main_slider_nav">
  <i class="fas fa-chevron-right trans_300"></i>
  </div>
  
  </div>
</div>

<div class="home_social_container d-flex flex-row justify-content-end align-items-center">
  <ul class="home_social">
    <li>
    <a href="{{ url('/l/facebook') }}">
    <i class="fab fa-facebook-f trans_300 fa-2x"></i>
    </a>
    </li>
    <li>
    <a href="{{ url('/l/twitter') }}">
    <i class="fab fa-twitter trans_300 fa-2x"></i>
    </a>
    </li>
    <li>
    <a href="{{ url('/l/youtube') }}">
    <i class="fab fa-youtube trans_300 fa-2x"></i>
    </a>
    </li>
    <li>
    <a href="{{ url('/l/linkedin') }}">
    <i class="fab fa-linkedin-in trans_300 fa-2x"></i>
    </a>
    </li>
  </ul>
</div>

<div class="content">
    @foreach ($articles as $article)
    <article class="feature">
        <span class="image">
        <img src="{{$article->image}}" alt="{{$article->title}}" />
        </span>
        <div class="content">
            <h2>{{$article->title}}</h2>
            <p>{{$article->intro}}</p>
            <ul class="actions">
                <li>
                    <a href="{{$article->link}}" class="button dark simple">Watch</a>
                </li>
            </ul>
        </div>
    </article>
    @endforeach
</div>
@endsection

