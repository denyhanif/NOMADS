@extends('layouts.app')

@section('title','Detail')
@section('content')
<body>
    
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-ld-0">
                        <div class="card card-details">
                            <h1>Nusa peninda</h1>
                            <p>Indonesia</p>
                            <div  class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/slide.png" class="xzoom" id="xzoom-default" xoriginal="frontend/images/slide.png">
                                    <div class="zoom-thumbs">
                                        <a href="frontend/images/slide.png">
                                            <img src="frontend/images/slide.png" class="xzoom-gallery" width="126" xpreview="frontend/images/slide.png">
                                        </a>
                                        <a href="frontend/images/icon/slide3.jpg">
                                            <img src="frontend/images/icon/slide3.jpg" class="xzoom-gallery" width="126" xpreview="frontend/images/icon/slide3.jpg">
                                        </a>
                                        <a href="frontendicon/slide4.jpg">
                                            <img src="frontend/images/icon/slide4.jpg" class="xzoom-gallery" width="126" xpreview="frontend/images/icon/slide4.jpg">
                                        </a>
                                        <a href="frontend/images/icon/slide5.jpg">
                                            <img src="frontend/images/icon/slide5.jpg" class="xzoom-gallery" width="126" xpreview="frontend/images/icon/slide5.jpg">
                                        </a>                                        
                                        <a href="frontend/images/slide.png">
                                        <img src="frontend/images/slide.png" class="xzoom-gallery" width="126" xpreview="frontend/images/slide.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung 
                                Regency that includes the neighbouring small island of Nusa Lembongan. The Badung 
                                Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum 
                                altitude of 524 metres. It is drier than the nearby island of Bali.</p>
                                <br/>
                            <p>Bali and a district of Klungkung Regency that includes the neighbouring small island of 
                                Nusa Lembongan. The Badung Strait separates the island and Bali.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="frontend/images/icon/ic_event.png" alt="" class="features-image">
                                    <div class="desc">
                                        <h3>Features event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontend/images/icon/ic_bahasa.png" alt="" class="features-image">
                                    <div class="desc">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontend/images/icon/ic_foods.png" alt="" class="features-image">
                                    <div class="desc">
                                        <h3>Foods</h3>
                                        <p>Local food</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-detail card-right">
                            <h2>Member yang join</h2>
                            <div class="members my-2">
                                <img src="/frontend/images/icon/member/member1.png " alt="" class="member-image  my-2">
                                <img src="/frontend/images/icon/member/member2.png " alt="" class="member-image my-2">
                                <img src="/frontend/images/icon/member/member3.png " alt="" class="member-image my-2">
                                <img src="/frontend/images/icon/member/member4.png " alt="" class="member-image my-2">
                                <img src="/frontend/images/icon/member/memberfull.png " alt="" class="member-image my-2">
                            
                            </div> 
                            
                            <hr>
                            <h2>Informasi Perjalanan</h2>
                            <table class="trip-informaation">
                                <tr>
                                    <th width="50%"> Tanggal berangkat</th>
                                    <td width="50%" class="text-right"> 22 Agustus 2020</td>
                                </tr>
                                <tr>
                                    <th width="50%"> Durasi</th>
                                    <td width="50%" class="text-right"> 4D 3N</td>
                                </tr>
                                <tr>
                                    <th width="50%"> Tipe</th>
                                    <td width="50%" class="text-right"> Open tripp</td>
                                </tr>
                                <tr>
                                    <th width="50%"> Price</th>
                                    <td width="50%" class="text-right"> $40.0000/person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">join now</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        
    </main>

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Review</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Social Media Kit</a></li>
                                <li><a href="#">Afiliate</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Reward</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Media</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Jakarta Selatan</a></li>
                                <li><a href="#">Indonasia</a></li>
                                <li><a href="#">9090-0302-i9-uw</a></li>
                                <li><a href="#">Suppoert@gebaui.com</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row border-top justify-content-center align-items-center pt-4">
                    <div class="col-auto text-gray-500 font-weight-light">2020 Copyright MasDhen • All rights reserved • Made in Pakis

                    </div>
                </div>

            </div>

        </div>

    </footer>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js "></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
    <script src="frontend/libraries/xzoom/xzoom.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.xzoom,.xzoom-gallery').xzoom({
                zoomWidth:500,
                title:false,
                tint:'#333',
                Xoffset:15

            });
        });
    </script>
</body>
@endsection
@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">

@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.xzoom,.xzoom-gallery').xzoom({
                zoomWidth:500,
                title:false,
                tint:'#333',
                Xoffset:15

            });
        });
    </script>
@endpush