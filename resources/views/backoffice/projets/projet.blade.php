@extends('layouts.index')

@include('layouts.flash')
@section('content')
<div class="container my-5">
    <h1 class="text-center">Page Projets</h1>
    <div class="d-flex justify-content-around my-2">
        <a class="btn btn-outline-primary" href={{route('projets.create')}}>Ajouter un item</a>
        <a class="btn btn-outline-secondary" href={{route('admin')}}>Retour backoffice</a>
    </div>
    <div class="container">
        <div class="row ">
            @foreach ($projet as $projet)
            <div class="portfolio-wrap d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-4 col-md-6 portfolio-links my-3">
                    <img src={{asset($projet->img)}} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                <a href="{{route('projets.show', $projet->id)}}" class="btn btn-primary">DETAILS</a>
                <a href="{{route('projets.edit', $projet->id)}}" class="btn btn-success">EDIT</a>
                <form method="post" action={{route('projets.destroy', $projet->id)}}>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
