@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1 class="text-center">Formulaire d'ajout</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('facts.index')}}">Retour facts</a>
            <form class="" method="POST" action={{route('facts.store')}}>
                @csrf
                <label for="counter">Counter</label>
                <input type="text" class="form-control @error('counter') is-invalid @enderror" id="counter" value="{{old('counter')}}" name="counter">
                @error('counter')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="texte">Texte</label>
                <input type="text" class="form-control @error('texte') is-invalid @enderror" id="texte" value="{{old('texte')}}" name="texte">
                @error('texte')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="icone">Icone</label>
                <input type="text" class="form-control @error('icone') is-invalid @enderror" id="icone" value="{{old('icone')}}" name="icone">
                @error('icone')
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