@extends('layouts.back')

@include('layouts.flash')
@section('content')
<div class="container my-5">
    <h1 class="text-center text-info">ABOUT</h1>
    <div class="d-flex justify-content-around my-2">
        <a class="btn btn-outline-secondary" href={{route('admin')}}>BACKOFFICE</a>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{asset('/img/profile-img.jpg')}}" class="img-fluid" alt="">
          </div>
            <div class="col-lg-8 pt-4 pt-lg-0 mt-2 content" data-aos="fade-left">
                <h3 class="text-primary">UI/UX Designer || Web Developer.</h3>
                <p class="">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="row">
                  @foreach ($about as $item)
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="icofont-rounded-right"></i> <strong>{{$item->info}}:</strong> {{$item->value}}</li>
                    </ul>
                  </div>
                  <div class="">
                    <a href="{{route('abouts.edit', $item->id)}}" class="ml-2 btn btn-primary">EDIT</a>
                  </div>
                  @endforeach
                  {{-- <form method="post" action={{route('abouts.destroy', $item->id)}}>
                      @csrf
                      @method('DELETE')
                      <button class="ml-2 btn btn-danger" type="submit">DELETE</button>
                  </form> --}}
            </div>
            
        </div>
    </div>
</div>
@endsection