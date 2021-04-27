@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1 class="text-center">Formulaire d'ajout</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('skills.index')}}">Retour skills</a>
            <form class="" method="POST" action={{route('skills.store')}}>
                @csrf
                <label for="compet">Skill</label>
                <input type="text" class="form-control @error('compet') is-invalid @enderror" id="compet" value="{{old('compet')}}" name="compet">
                @error('compet')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="pourcent">Pourcentage</label>
                <input type="text" class="form-control @error('pourcent') is-invalid @enderror" id="pourcent" value="{{old('pourcent')}}" name="pourcent">
                @error('pourcent')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection