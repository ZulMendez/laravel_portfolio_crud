@extends('layouts.back')

@include('layouts.flash')
@section('content')
<div class="container my-5">
    <h1 class="text-center">Page About</h1>
    <div class="d-flex justify-content-around my-2">
        <a class="btn btn-outline-primary" href={{route('abouts.create')}}>Ajouter un item</a>
        <a class="btn btn-outline-secondary" href={{route('admin')}}>Retour backoffice</a>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($about as $item)
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>UI/UX Designer || Web Developer.</h3>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$item->birthday}}</li>
                      <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$item->website}}</li>
                      <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$item->phone}}</li>
                      <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$item->city}}</li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$item->age}}</li>
                      <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$item->degree}}</li>
                      <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$item->email}}</li>
                      <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$item->freelance}}</li>
                    </ul>
                  </div>
                <a href="{{route('abouts.show', $item->id)}}" class="btn btn-primary">DETAILS</a>
                <a href="{{route('abouts.edit', $item->id)}}" class="btn btn-success">EDIT</a>
                <form method="post" action={{route('abouts.destroy', $item->id)}}>
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