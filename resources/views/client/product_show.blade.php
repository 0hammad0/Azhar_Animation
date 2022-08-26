@extends('client.layout')

@section('title')
    Product name
@endsection

@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('frontend/images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">Product Single</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="frontend/images/product-1.jpg" class="image-popup"><img src="frontend/images/product-1.jpg"
                            class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>Roboto Character</h3>
                    <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span
                                    style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span
                                    style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                    <p class="price"><span style="font-weight: bold">$120.00</span><span style="font-size: 14px"> for this
                            set</span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nesciunt, placeat eveniet ad
                        incidunt ipsam. Amet cum dolorem dignissimos hic incidunt, minima sequi cumque quidem fugiat
                        aspernatur explicabo illum sapiente.
                    </p>
                    <p><a href="{{ url('/checkout') }}" class="btn btn-black py-3 px-5">Buy</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">1. Roboto Character</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam quibusdam atque nostrum fugiat
                        recusandae, soluta perferendis dolor optio dolores, ducimus libero? Iste, mollitia id? Non
                        necessitatibus pariatur minima accusamus provident.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <img class="img-fluid" src="frontend/images/product-1.jpg" alt="Colorlib Template">
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <img class="img-fluid" src="frontend/images/product-2.jpg" alt="Colorlib Template">
                    </div>
                </div>


            </div>
        </div>


        <div class="col-md-12 heading-section text-center ftco-animate">
            <hr>
            <h2 class="mb-4">2. Roboto Character</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit iusto aperiam fuga, quibusdam
                tempore similique, nesciunt corrupti repellat hic eius esse, doloribus eligendi? Harum id
                asperiores ut aspernatur, quis obcaecati.</p>
        </div>


        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <img class="img-fluid" src="frontend/images/product-1.jpg" alt="Colorlib Template">
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <img class="img-fluid" src="frontend/images/product-2.jpg" alt="Colorlib Template">
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <img class="img-fluid" src="frontend/images/product-3.jpg" alt="Colorlib Template">
                    </div>
                </div>


            </div>

        </div>

    </section>



    <hr>
@endsection
