@extends('client.layout')

@section('title')
    Azhar Animations
@endsection

@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(frontend/images/bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Add some character to your visuals - 1</h1>
                            <h2 class="subheading mb-4">
                                Cartoon Characters, Design Bundles, Illustrations, Backgrounds and more...</h2>
                            <p><a href="{{ url('/products') }}" class="btn btn-primary">Browse Characters</a></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url(frontend/images/bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Add some character to your visuals - 2</h1>
                            <h2 class="subheading mb-4">Cartoon Characters, Design Bundles, Illustrations, Backgrounds
                                and more...</h2>
                            <p><a href="{{ url('/products') }}" class="btn btn-primary">Browse Characters</a></p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="ftco-section">
        <h1 class="heading-1"> Characters Categories </h1>
        <p class="para-1">Browse characters by theme or design style. Each character comes loaded with a variety
            of poses.</p>
    </section>

    <section class="ftco-section ftco-category ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 order-md-last align-items-stretch d-flex">
                            <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                                style="background-image: url(frontend/images/category-1.svg);">
                                <div class="text text-center">
                                    <p><a href="{{ url('/products') }}" class="btn btn-primary" style="padding: 12px">Browse
                                            all
                                            categories</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                                style="background-image: url(frontend/images/category-1.png);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="{{ url('/products') }}">Outline
                                            Characters</a></h2>
                                </div>
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end"
                                style="background-image: url(frontend/images/category-2.jpg);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="{{ url('/products') }}">Flat
                                            Characters</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url(frontend/images/category-3.jpg);">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="{{ url('/products') }}">Animal Characters
                                </a></h2>
                        </div>
                    </div>
                    <div class="category-wrap ftco-animate img d-flex align-items-end"
                        style="background-image: url(frontend/images/category-4.png);">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="{{ url('/products') }}">Robot Characters</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section img" style="background-image: url(frontend/images/bg_3.gif);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate" style="color: white">
                    <h2 class="mb-4" style="color: white">Character Animator Puppets</h2>
                    <p>High quality Adobe Character Animator puppets suitable for animations, explainer videos, live
                        streams, vlogging, and more. Fully rigged, extremely easy to use, and loaded with impressive
                        triggers and features!</p>
                    <p><a href="{{ url('/product_show') }}" class="btn btn-primary" style="padding: 12px">Browse our
                            puppets</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
