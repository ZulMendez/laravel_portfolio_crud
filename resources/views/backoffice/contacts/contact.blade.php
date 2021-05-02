@extends('layouts.back')

@include('layouts.flash')
@section('content')
<div class="container my-5">
    <h1 class="text-center text-info">CONTACT</h1>
    <div class="d-flex justify-content-around my-2">
        <a class="btn btn-outline-primary" href={{route('contacts.create')}}>ADD ITEM</a>
        <a class="btn btn-outline-secondary" href={{route('admin')}}>BACKOFFICE</a>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            @foreach ($contact as $item)
            <div class="pt-4 pt-lg-0" data-aos="fade-left">
                {{-- <h3 class="">CONTACT</h3> --}}
                {{-- <p class="">
                    Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                </p> --}}
                <br>
                <div style="width: 30rem" class="card row d-flex justify-content-center align-items-center">
                    <div class="col-lg-12 mt-3 mb-3">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4 class="text-primary">Location:</h4>
                            <p>{{$item->location}}</p>
                        </div>
                
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4 class="text-primary">Email:</h4>
                            <p>{{$item->email}}</p>
                        </div>
                
                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4 class="text-primary">Call:</h4>
                            <p>+{{$item->call}}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="{{route('contacts.show', $item->id)}}" class="mr-2 btn btn-success">SHOW</a>
                        <a href="{{route('contacts.edit', $item->id)}}" class="mr-2 btn btn-primary">EDIT</a>
                        <form method="post" action={{route('contacts.destroy', $item->id)}}>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mr-2" type="submit">DELETE</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
