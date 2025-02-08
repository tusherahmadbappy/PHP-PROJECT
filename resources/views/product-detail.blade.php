@extends('layouts.main')
@push('title')
<title>product-detail</title>
@endpush

@section('content')
  <div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Product-Detail</h1>
  </div>

  <section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset('assets/images/electronics/1.jpg') }}" class="img-fluid rounded"alt="...">

            </div>
            <div class="col-lg-8">
                <div class="div">
                    <h2>Washing Machine</h2>
                    <h5>TK 25590</h5>
                    <h5>Review and Ratings</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <h6>2 Customer Ratings</h6>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi magni autem ratione? Voluptatum atque, perferendis aliquid harum dignissimos debitis iusto labore repellendus amet quisquam voluptatibus velit veritatis quis odio consequuntur.</p>
                    <div>
                        <div class="d-flex flex-row mb-3">
                            <div class="p-2"><h6>Quantity</h6></div>
                            <div class="p-2">
                                <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                <span>01</span>
                                <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                            </div>

                          </div>
                    </div>
                    <div>
                        <a href="" class="btn theme-green-btn text-light rounded-pill me-2">Add to Cart</a>
                        <a href="" class="btn theme-orange-btn text-light rounded-pill">Add to Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4">
            <h4>Product Description</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis dolorem asperiores, distinctio in optio nemo vel! Rerum est doloribus, blanditiis necessitatibus repellendus veritatis vitae, perferendis ipsa cupiditate, eveniet hic? Itaque!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ducimus perferendis dolores magnam ut expedita soluta quia aliquam possimus. Mollitia, eligendi fugiat necessitatibus esse facere aspernatur doloribus eos neque inventore!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nulla, temporibus voluptates debitis inventore numquam voluptate commodi ab nisi. Perspiciatis incidunt aliquid enim est vero. Impedit ipsum sunt totam fugiat?</p>

        </div>
        <!--Related Products-->
        <div class="div">

            <section class="my-5">
                <div class="container">

                    <div class="d-flex">
                        <div class="flex-grow-1"><h2>Related Products</h2></div>
                        <div><a href="#"class="btn btn-sm theme-orange-btn text-light">View All</a></div>

                    </div>
                    <div class="row theme-product">
                        <div class="col-lg-3">
                            <div class="card">
                                <a href="#"><img src="{{asset('assets/images/fashion/2.jpg') }}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                  <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">T-Shirt</a></h6>
                                  <h5 class="card-title text-center">Tk 1190.00</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <a href="#"><img src="{{asset('assets/images/Mobile/2.jpg') }}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                  <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Mobile</a></h6>
                                  <h5 class="card-title text-center">Tk 50,599.00</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/fashion/4.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Lahenga</a></h6>
                                  <h5 class="card-title text-center">Tk 105190.00</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <a href="#"><img src="{{asset('assets/images/fashion/2.jpg') }}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                  <h6 class="card-title text-center"><a href="#"class="text-dark text-decoration-none">Bag</a></h6>
                                  <h5 class="card-title text-center">Tk 5190.00</h5>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </section><hr>
            <section>
                <h2>02 Reviews</h2>
                <div class="row mt-4">
                    <div class="col-lg-1">
                        <img src="{{asset('assets/images/review/user.png') }}" class="img-fluid rounded-circle"alt="...">

                    </div>
                    <div class="col-lg-11">
                        <h4>Jhon Doe</h4>
                        <div>
                            <div class="d-flex">
                                <div class="flex-grow-1"><h2>R19 Dec 2024</h2></div>
                                <div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa alias minima vero veritatis similique. Quidem voluptates, consectetur rerum ea asperiores placeat ad deleniti incidunt est excepturi ex facere, cupiditate odio.</p>
                        <a href="" class="btn btn-sm theme-orange-btn text-light rounded-pill">Reply</a>
                    </div>
                    <div class="col-lg-1 mt-4">
                        <img src="{{asset('assets/images/review/user.png') }}" class="img-fluid rounded-circle"alt="...">

                    </div>
                    <div class="col-lg-11 mt-4">
                        <h4>Jhon Doe</h4>
                        <div>
                            <div class="d-flex">
                                <div class="flex-grow-1"><h2>R19 Dec 2024</h2></div>
                                <div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa alias minima vero veritatis similique. Quidem voluptates, consectetur rerum ea asperiores placeat ad deleniti incidunt est excepturi ex facere, cupiditate odio.</p>
                        <a href="" class="btn btn-sm theme-orange-btn text-light rounded-pill">Reply</a>
                    </div>
                </div>
            </section>

        <!--Add a review section-->
        <section>
            <div class="container">
                <h3>Add a Review</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="">
                            <div class="from-text">Rate this product?
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="row mb-5">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="email" class="form-control form-control-lg" placeholder="Your Email">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <textarea class="form-control form-control-lg" placeholder="Your Message" rows="3"></textarea>
                                </div>
                                <div>
                                    <a href="" class="btn btn-sm theme-orange-btn text-light rounded-pill">Post a Comment</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>

  </section>


@endsection
