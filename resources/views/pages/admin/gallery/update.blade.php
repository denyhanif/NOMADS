@extends('layouts.admin')


@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Gallery {{$item->title}}</h1>
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
                        <form action="{{route('gallery.update',$item->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="title">Paket Travel</label>
                                <select name="travel_packages_id" required class="form-control">
                                  {{-- travel_package_id(kolom di tabel galeri)  --}}
                                   <option value="{{$item->travel_packages_id}}">Jangan di ubah</option>
                                    @foreach($travel_packages as $travel_package)
                                        <option value="{{ $travel_package->id }}">
                                            {{ $travel_package->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Image" >
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
    </div>
    
@endsection
