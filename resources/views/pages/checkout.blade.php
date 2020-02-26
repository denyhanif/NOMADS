@extends('layouts.checkout')

@section('title','Checkout')
@section('content')
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
                                <li class="breadcrumb-item ">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Active
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-ld-0">
                        <div class="card card-details">
                            <h1>Whos Going?</h1>
                            <p>Trip to Ubud, Bali Indonesia</p> 
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Pasport</td>
                                            <td></td>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{url('frontend/images/icon/member/member1.png')}}" height="60">
                                                </td>
                                                <td class="align-middle"> Deny HAnif</td>
                                                <td class="align-middle"> CN</td>
                                                <td class="align-middle"> N/A</td>
                                                <td class="align-middle"> ACTIVE</td>
                                                <td class="align-middle"><img src="{{url('frontend/images/remove.png')}}" alt=""></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{url('frontend/images/icon/member/member4.png')}}" height="60">
                                                </td>
                                                <td class="align-middle"> HAnif uui</td>
                                                <td class="align-middle"> CN</td>
                                                <td class="align-middle"> N/A</td>
                                                <td class="align-middle"> ACTIVE</td>
                                                <td class="align-middle"><img src="{{url('frontend/images/remove.png')}}" alt=""></td>

                                            </tr>
                                        </tbody>
                                    </thead>
                                </table>
                            </div>  
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <label class="sr-only"name="inputUsername" for="inputUsername">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username"> 
                                    <label class="sr-only" for="inputVisa">Visa</label>
                                    <select name="inputVisa" id="" class="custom-select mb-2 mr-sm-2">
                                        <option value="VISA" selected>VISA</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                    <label for="doePasport " class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                                    </div>
                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p>You are only able to invite member that has registered in Nomads.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Member yang join</h2>
                
                            <table class="trip-information">
                                <tr>
                                    <th width="50%"> Members</th>
                                    <td width="50%" class="text-right"> 2 Orang</td>
                                </tr>
                                <tr>
                                    <th width="50%"> Additional VISA</th>
                                    <td width="50%" class="text-right">$ 190,00</td>
                                </tr>
                                <tr>
                                    <th width="50%"> Trip Price</th>
                                    <td width="50%" class="text-right"> $ 80,00 / person</td>
                                </tr>
                                <tr>
                                    <th width="50%"> Sub Total</th>
                                    <td width="50%" class="text-right"> Open tripp</td>
                                </tr>
                                <tr>
                                    <th width="50%"> Total (+Unique Code)</th>
                                    <td width="50%" class="text-right"> 
                                    <span class="text-blue">
                                        $270,
                                    </span>
                                    <span class="text-yellow">33</span>
                                </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instruction</h2>
                            <p class="payment-instruction">Please complete your payment before to 
                                continue the wonderful trip</p>
                                <div class="bank">
                                    <div class="bank-item pb-3">
                                        <img src="{{url('frontend/images/icon/ic_bahasa.png')}}" class="bank-image" alt="">
                                        <div class="desc">
                                            <h3>PT Nomads ID</h3>
                                            <p>0881 8829 8800
                                                <br>
                                                Bank Central Asia
                                            </p>
                                        </div>
                                        <div  class="clearfix"></div>
                                    </div>
                                    <div class="bank-item pb-3">
                                        <img src="{{url('frontend/images/icon/ic_bahasa.png')}}" class="bank-image" alt="">
                                        <div class="desc">
                                            <h3>PT Nomads ID</h3>
                                            <p>0881 8829 8800
                                                <br>
                                                Bank Central Asia
                                            </p>
                                        </div>
                                        <div  class="clearfix"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="join-container">
                            <a href="{{route('checkout-sucess')}}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{route('detail')}}" class="text-nutted">
                                Cancel Booking
                            </a>
                        </div>
                        

                    </div>
                </div>
            </div>
        </section>

        
    </main>

@endsection

@push('prepend-style')
        <link rel="stylesheet" href="{{url('frontend/libraries/combined/css/gijgo.css')}}">

@endpush

@push('addon-script')
 <script src="{{url('frontend/libraries/combined/js/gijgo.min.js')}}"></script>

    <script>
        $('.datepicker').datepicker({
            uiLibrary:'bootstrap4', 
            icons:{
                rightIcon:'<img src="{{url('frontend/images/icon/member/ic_doe.png')}}">'

            }

        })
    </script>

@endpush