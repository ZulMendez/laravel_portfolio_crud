@extends('layouts.index')

@include('layouts.flash')
@section('content')
<section id="skills" class="skills section-bg">
    <div class="container">
        <h1 class="text-center">Skills</h1>
        <div class="d-flex justify-content-around my-2">
            <a class="btn btn-outline-primary" href={{route('skills.create')}}>Ajouter un item</a>
            <a class="btn btn-outline-secondary" href={{route('admin')}}>Retour backoffice</a>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center skills-content">
                @foreach ($skill as $item)
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="progress">
                        <span class="skill">{{$item->compet}} <i class="val">{{$item->pourcent}}%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->pourcent}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <a href="{{route('skills.show', $item->id)}}" class="btn btn-primary">DETAILS</a>
                <a href={{route('skills.edit', $item->id)}} class="btn btn-primary my-1">EDIT</a>
                <form method="post" action={{route('skills.destroy', $item->id)}}>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            @endforeach
        </div>
    </div>
</section>
@endsection
