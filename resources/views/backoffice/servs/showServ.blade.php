@extends('layouts.index')

@include('layouts.flash')
@section('content')
    <section id="services" class="services section-bg">
        <div class="container text-center">
            <h1>Services</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('servs.index')}}">Retour services</a>
            <div class="container card" style="width: 18rem;">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="mt-3 col-lg-12 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="{{$service->icone}}"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <form method="POST" action={{route('servs.destroy', $service->id)}}>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mb-4">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection