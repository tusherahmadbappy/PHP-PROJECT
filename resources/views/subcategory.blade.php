@extends('layouts.main')
@push('title')
<title>Sub-Category</title>
@endpush
@section('content')
  <div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Sub-Category</h1>
  </div>
      <!--Product Section start-->
  <section class="my-5">
    <div class="container">
        <div class="row theme-product">
            <!--Fashion start-->

<!--Electonics start-->
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <a href="{{ url('category/electronics/tv/detail') }}"><img src="{{asset('assets/images/electronics/1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="{{ url('category/electronics/tv/detail') }}"class="text-dark text-decoration-none">Walton Washing Machine</a></h6>
                      <h5 class="card-title text-center">Tk 5190.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/electronics/2.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">MacBook Pro M4</a></h6>
                      <h5 class="card-title text-center">Tk 5190.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/electronics/3.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Samsung LED Monitor</a></h6>
                      <h5 class="card-title text-center">Tk 5190.00</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <a href="#"><img src="{{asset('assets/images/electronics/4.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Canon Camera</a></h6>
                      <h5 class="card-title text-center">Tk 5190.00</h5>
                    </div>
                  </div>
            </div>

        <!--Mobile start-->
            <div class="col-lg-3 mb-4">
            <div class="card">
                <a href="#"><img src="{{asset('assets/images/mobile/1.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Samsung S24 Ultra</a></h6>
                  <h5 class="card-title text-center">Tk 5190.00</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
            <div class="card">
                <a href="#"><img src="{{asset('assets/images/mobile/2.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Iphone 12Pro</a></h6>
                  <h5 class="card-title text-center">Tk 5190.00</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
            <div class="card">
                <a href="#"><img src="{{asset('assets/images/mobile/3.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Iphone 13 Pro</a></h6>
                  <h5 class="card-title text-center">Tk 5190.00</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
            <div class="card">
                <a href="#"><img src="{{asset('assets/images/mobile/4.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Iphone 16</a></h6>
                  <h5 class="card-title text-center">Tk 155190.00</h5>
                </div>
              </div>
            </div>


        </div>
    </div>
  </section>
  <!--Product Section end-->
@endsection
