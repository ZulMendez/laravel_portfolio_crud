@extends('layouts.index')

@include('layouts.flash')
@section('content')
<section id="" class="">
    <div class="container">
        <h1 class="text-info text-center">PROJECTS</h1>
        <div class="d-flex justify-content-around my-2">
            <a class="btn btn-outline-primary" href={{route('projets.create')}}>ADD ITEM</a>
            <a class="btn btn-outline-secondary" href={{route('admin')}}>BACKOFFICE</a>
        </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">

                @foreach ($projet as $projet)
                <div class="col-lg-4 col-md-6 portfolio-item {{$projet->filter}} my-5 d-flex">

                    <div class="portfolio-wrap">
                        <div>
                            <img src={{asset('img/portfolio/' . $projet->img)}} class="img-fluid rounded mw-100" alt="">
                        </div>
                        <div class="d-flex portfolio-links d-flex justify-content-center my-3">
                            <a href={{route('projets.show', $projet->id)}} class="btn btn-primary mx-1">SHOW</a>
                            <a href={{route('projets.edit', $projet->id)}} class="btn btn-success mx-1">EDIT</a>
                            <form method="post" action={{route('projets.destroy', $projet->id)}}>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mx-1" type="submit">DELETE</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
@endsection