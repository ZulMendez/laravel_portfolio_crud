@extends('layouts.back')

@include('layouts.flash')
@section('content')
<div class="container my-5">
    <h1 class="text-center">Page Contact</h1>
    <div class="d-flex justify-content-around my-2">
        <a class="btn btn-outline-primary" href={{route('contacts.create')}}>Ajouter un item</a>
        <a class="btn btn-outline-secondary" href={{route('admin')}}>Retour backoffice</a>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            @foreach ($contact as $item)
            <div class="pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Contact</h3>
                <p class="font-italic">
                    Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                </p>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>{{$item->location}}</p>
                        </div>
                
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{$item->email}}</p>
                        </div>
                
                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>{{$item->call}}</p>
                        </div>
                    </div>
                    
                    <a href="{{route('contacts.show', $item->id)}}" class="btn btn-success">DETAILS</a>
                    <a href="{{route('contacts.edit', $item->id)}}" class="btn btn-primary">EDIT</a>
                    <form method="post" action={{route('contacts.destroy', $item->id)}}>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
