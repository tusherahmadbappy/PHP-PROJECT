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
  <section class="my-5">
    <div class="container">

        <div class="d-flex">
            <div class="flex-grow-1"><h2>Top Deals</h2></div>
            <div><a href="#"class="btn btn-sm theme-green-btn text-light">View All</a></div>

        </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/fashion/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">T-Shirt</a></h6>
                      <h5 class="card-title text-center">Tk 1190.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/Mobile/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Mobile</a></h6>
                      <h5 class="card-title text-center">Tk 50,599.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{asset('assets/images/fashion/3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Lahenga</a></h6>
                      <h5 class="card-title text-center">Tk 105190.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/fashion/4.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Bag</a></h6>
                      <h5 class="card-title text-center">Tk 5190.00</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </section>
  <!--Product Section end-->
  <!--Recently View Section start-->
  <section class="my-5">
    <div class="container">

        <div class="d-flex">
            <div class="flex-grow-1"><h2>Recently View</h2></div>
            <div><a href="#"class="btn btn-sm theme-orange-btn text-light">View All</a></div>

        </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/fashion/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">T-Shirt</a></h6>
                      <h5 class="card-title text-center">Tk 1190.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/Mobile/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Mobile</a></h6>
                      <h5 class="card-title text-center">Tk 50,599.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{asset('assets/images/fashion/3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Lahenga</a></h6>
                      <h5 class="card-title text-center">Tk 105190.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/fashion/4.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Bag</a></h6>
                      <h5 class="card-title text-center">Tk 5190.00</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </section>
  <!--Recently View Section end-->
@endsection
