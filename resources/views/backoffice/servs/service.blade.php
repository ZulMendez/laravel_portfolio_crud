@extends('layouts.index')

@include('layouts.flash')
@section('content')
<section id="services" class="services section-bg">
    <div class="container">
        <h1 class="text-center text-info">SERVICES</h1>
        <div class="d-flex justify-content-around my-2">
            <a class="btn btn-outline-primary" href={{route('servs.create')}}>ADD ITEM</a>
            <a class="btn btn-outline-secondary" href={{route('admin')}}>BACKOFFICE</a>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center services-content">
                @foreach ($service as $item)
                <div class="col-lg-6 col-md-6 icon-box mt-5" data-aos="fade-up">
                    <div class="icon"><i class="{{$item->icone}}"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
                <a href="{{route('servs.show', $item->id)}}" class="btn btn-success mr-1">SHOW</a>
                <a href={{route('servs.edit', $item->id)}} class="btn btn-primary my-1 mr-1">EDIT</a>
                <form method="post" action={{route('servs.destroy', $item->id)}}>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mr-1" type="submit">DELETE</button>
                </form>
            @endforeach
            
        </div>
    </div>
</section>
@endsection