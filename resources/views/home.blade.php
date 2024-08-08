@extends('main')
@section('content')
<div class="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/Laravel-bg.png') }}" alt="Slide 1">
        <div class="carousel-caption">
          <h5>Laravel</h5>
          {{-- <p>Some representative placeholder content for the first slide.</p> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Wordpress-bg.jpg') }}" alt="Slide 2">
        <div class="carousel-caption">
          <h5>Wordpress</h5>
          {{-- <p>Some representative placeholder content for the second slide.</p> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Web-dev-bg.jpg') }}" alt="Slide 3">
        <div class="carousel-caption">
          <h5>Web Developement</h5>
          {{-- <p>Some representative placeholder content for the third slide.</p> --}}
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" onclick="prevSlide()">&lt;</button>
    <button class="carousel-control-next" onclick="nextSlide()">&gt;</button>
  </div>

@endsection
