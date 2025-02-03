@extends('layouts.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/images/slider/girlenjoying.jpg') }}" class="d-block w-100" alt="girlenjoying.jpg">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/images/slider/desktop.jpg') }}" class="d-block w-100" alt="desktop.jpg">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/images/slider/mobile.jpg') }}" class="d-block w-100" alt="mobile.jpg">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--Product Section start-->
  <section>
    <div class="container">
        <h1 class="mb-5">Top Deals</h1>
        <div class="row">
            <div class="col-lg-3">
                <div class="card my-5">
                    <img src="{{asset('assets/images/fashion/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">T-Shirt</h5>
                      <h4 class="card-title text-center">Tk 1190.00</h4>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card my-5">
                    <img src="{{asset('assets/images/Mobile/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Mobile</h5>
                      <h4 class="card-title text-center">Tk 50,599.00</h4>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card my-5">
                    <img src="{{asset('assets/images/fashion/3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Lahenga</h5>
                      <h4 class="card-title text-center">Tk 105190.00</h4>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card my-5">
                    <img src="{{asset('assets/images/fashion/4.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Bag</h5>
                      <h4 class="card-title text-center">Tk 5190.00</h4>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </section>
  <!--Product Section end-->

@endsection
