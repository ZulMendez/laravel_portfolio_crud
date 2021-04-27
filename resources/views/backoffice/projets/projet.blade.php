@extends('layouts.index')

@include('layouts.flash')
@section('content')
<section id="" class="">
    <div class="">
        <h1 class="text-center">Page Projets</h1>
        <div class="d-flex justify-content-around my-2">
            <a class="btn btn-outline-primary" href={{route('projets.create')}}>Ajouter un item</a>
            <a class="btn btn-outline-secondary" href={{route('admin')}}>Retour backoffice</a>
        </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">

                @foreach ($projet as $projet)
                <div class="col-lg-4 col-md-6 portfolio-item {{$projet->filter}} my-5 d-flex">

                    <div class="portfolio-wrap">
                        <div>
                            <img src={{asset($projet->img)}} class="img-fluid mw-100" alt="">
                        </div>
                        <div class="d-flex portfolio-links d-flex justify-content-center my-3">
                            <a href={{route('projets.show', $projet->id)}} class="btn btn-primary mx-3">show</a>
                            <a href={{route('projets.edit', $projet->id)}} class="btn btn-success mx-3">edit</a>
                            <form method="post" action={{route('projets.destroy', $projet->id)}}>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mx-3" type="submit">DELETE</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
@endsection