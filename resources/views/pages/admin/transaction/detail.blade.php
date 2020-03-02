@extends('layouts.admin')


@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> Transaksi Detail {{$item->user->name}}</h1>
                </div>
                {{--  eror msg  --}}
                @if($errors->any())
                <div class="div alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{--  form  --}}
                <div class="card shadow">
                    <div class="card-body">
                      <table class="table table-bordered">
                          <tr>
                              <th>ID</th>
                              <td>{{$item->id}}</td>
                          </tr>
                          <tr>
                            <th>Paket Travel</th>
                            <td>{{$item->travel_package->title}}</td>
                        </tr>
                        <tr>
                            <th>Pembeli</th>
                            <td>{{$item->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Addtional Visa</th>
                            <td>${{$item->addtional_visa}}</td>
                        </tr>
                        <tr>
                            <th>Total Transaksi</th>
                            <td>${{$item->transaction_total}}</td>
                        </tr>
                        <tr>
                            <th>Status Transaksi</th>
                            <td>{{$item->transaction_status }}</td>
                        </tr>
                        <tr>
                            <th>Pembelian</th>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Nationality</th>
                                        <th>Visa</th>
                                        <th>DOE Passport</th>
                                    </tr>
                                    @foreach ($item->details as $detail)
                                    <tr>
                                        
                                        <td>{{$detail->transaction->travel_package->title}}</td>
                                        <td>{{$detail->username}}</td>
                                        <td>{{$detail->nationality}}</td>
                                        <td>{{$detail->is_visa?'30 Days':'N/A'}}</td>
                                        <td>{{$detail->doe_passport}}</td>
                                    </tr>   
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                      </table>
                    </div>
                </div>
    </div>
    
@endsection
