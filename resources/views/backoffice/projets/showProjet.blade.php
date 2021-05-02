@extends('layouts.index')

@include('layouts.flash')
@section('content')
    <div class="text-center">
        <h1 class="text-info mt-3">PROJECT</h1>
        <a class="btn btn-outline-secondary mb-2" href="{{route('projets.index')}}">BACK</a>
        <div class="row d-flex justify-content-center m-5" style="width: 5rem;">
            <div class="container">
                <img class="rounded" src="{{asset('img/portfolio/' . $projet->img)}}" style="width: 25rem;" alt="">
                <form method="POST" action={{route('projets.destroy', $projet->id)}}>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-3 btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>
    </div>
@endsection