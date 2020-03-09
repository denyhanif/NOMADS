@extends('layouts.app')
@section('title','nomads')
@section('content')
   <!-- header -->
    <header class="text-center">
        <h1>Explore The Beautifull Wordl <br/>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You Will see Beautifull
            <br/>
            moment you never see before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Lets Go
        </a>
    </header>
    <!-- halaman inti -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center " id="statistik">
                <div class="col-3 col-md-2 statis-detail">
                    <h2 >{{$transaction}}</h2>
                    <p>Customer</p>
                </div>

                <div class="col-3 col-md-2 statis-detail">
                    <h2>4</h2>
                    <p>Hotel</p>
                </div>
                
                <div class="col-3 col-md-2 statis-detail">
                    <h2>20</h2>
                    <p>Mitra</p>
                </div>
                
                <div class="col-3 col-md-2 statis-detail">
                    <h2>{{$travel_package}}</h2>
                    <p>Destinasi</p>
                </div>
            </section>
        </div>
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br/>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{$item->galleries->count()? Storage::url($item->galleries->first()->image):''}}');">
                            <div class="travel-location">{{$item->title}}</div>
                            <div class="travel-country">{{$item->location}}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail',$item->slug)}}" class="btn btn-travel-detail px-4">View Detail</a>
                            </div>
                        
                        </div>
                    </div>    
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-network" id="network">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1>Our Network</h1>
                        <p>companoes are trusted us
                        <br/>
                        more than just trip</p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/logos_partner.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-header" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            moments were giving them
                            <br/>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section  class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic.png" alt="User" class="mb-4 rounded-circle">
                                        <h3 class="mb-4">
                                            Ngatiyem
                                        </h3>
                                            <p class="testimonial">
                                        “ It was glorious and I could 
                                        not stop to say wohooo for 
                                        every single moment
                                        Dankeeeeee “</p>
                                </div>
                                <hr>
                                <p class="trip-to mt-2">
                                    Trip to Ubud
                                </p>
                            </div>
                        </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic1.png" alt="User" class="mb-4 rounded-circle">

                                <h3 class="mb-4">
                                    Angga Riski
                                </h3>
                                <p class="testimonial">
                                    “ It was glorious and I could 
                                    not stop to say wohooo for 
                                    every single moment
                                    Dankeeeeee “</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic.png" alt="User" class="mb-4 rounded-circle">

                                <h3 class="mb-4">
                                    Markonah
                                </h3>
                                <p class="testimonial">
                                    “ It was glorious and I could 
                                    not stop to say wohooo for 
                                    every single moment
                                    Dankeeeeee “</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div> 
            <div class="row">
                <div class="col-12 text-center">
                    <a href="" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                    
                    <a href="{{route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>

                </div>
            </div>
                </div>
                
            </div>
        </section>
    
    </main>
@endsection