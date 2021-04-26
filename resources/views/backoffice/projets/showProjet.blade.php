@extends('layouts.index')

@include('layouts.flash')
@section('content')
    <div class="text-center">
        <h1>Projets</h1>
        <a href="{{route('projets.index')}}">Retour projet</a>
        <div class="m-5" style="width: 5rem;">
            <div>
                <img src="{{asset($projet->img)}}" style="width: 25rem;" alt="">
                <form method="POST" action={{route('projets.destroy', $projet->id)}}>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-3 btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>
    </div>
@endsection