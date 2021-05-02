@extends('layouts.index')

@include('layouts.flash')
@section('content')
<section id="facts" class="facts section-bg">
    <div class="container">
        <h1 class="text-center text-info">FACTS</h1>
        <div class="d-flex justify-content-around my-2">
            <a class="btn btn-outline-primary" href={{route('facts.create')}}>ADD ITEM</a>
            <a class="btn btn-outline-secondary" href={{route('admin')}}>BACKOFFICE</a>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center facts-content">
                @foreach ($fact as $item)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="{{$item->icone}}"></i>
                        <span data-toggle="counter-up">{{$item->counter}}</span>
                        <p><strong>{{$item->texte}}</strong></p>
                    </div>
                </div>
                <a href="{{route('facts.show', $item->id)}}" class="btn btn-success mr-1">SHOW</a>
                <a href={{route('facts.edit', $item->id)}} class="btn btn-primary my-1 mr-1">EDIT</a>
                <form method="post" action={{route('facts.destroy', $item->id)}}>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mr-1" type="submit">DELETE</button>
                </form>
            @endforeach
        </div>
    </div>
</section>
@endsection