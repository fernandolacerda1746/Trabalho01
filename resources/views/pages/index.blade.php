@extends('template.index')

@section('contents')
<section id="home" class="page-section">
<div class="text-center">
    <h1 class="section-heading text-uppercase" style="margin-bottom: 50px;">Algumas Das Nossas Inspirações</h1>
</div>
<!--Carousel Home-->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/carousel/1.png" class="d-block w-100 custom-carousel-image" alt="Slide1">
    </div>
    <div class="carousel-item">
      <img src="assets/img/carousel/2.png" class="d-block w-100 custom-carousel-image" alt="Slide2">
    </div>
    <div class="carousel-item">
      <img src="assets/img/carousel/3.png" class="d-block w-100 custom-carousel-image" alt="Slide3">
    </div>
    <div class="carousel-item">
      <img src="assets/img/carousel/4.png" class="d-block w-100 custom-carousel-image" alt="Slide4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

@endsection