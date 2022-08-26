@extends('client.layout')

@section('title')
    Blogs
@endsection

@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">


                <div class="col-lg-8 ftco-animate">
                    <div class="row">
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.html" class="block-20"
                                    style="background-image: url('frontend/images/image_1.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">april 20, 2022</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span>
                                                3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">The Best Free Infographic Templates in 2022
                                            for Every Software</a></h3>
                                    <p>Design and digital marketing are much more fun with data visualization as it
                                        gives a visual and more engaging representation of data that is easy to scan and
                                        comprehend at first glance.</p>
                                    <p><a href="{{ url('/blog_show') }}" class="btn btn-primary py-2 px-3">Read
                                            more</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
    </section>
    <hr>
@endsection
