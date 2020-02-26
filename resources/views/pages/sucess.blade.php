@extends('layouts.sucess')
@section('title','sucess')

@section('content')
<body>
 
    <div class="section-sucess d-flex align-item-center">
        <div class="col text-center">
            <img src="{{url('frontend/images/ic_mail.png')}}" alt="" class="img-success">
            <h1>Yay! Success</h1>
            <p>We’ve sent you email for trip instruction 
                <br>
                please read it as well
            </p>
            <a href="{{route('home')}}" class="btn btn-home-page mt-4 px-5">Home Page</a>
        </div>
    </div>


</body>
@endsection