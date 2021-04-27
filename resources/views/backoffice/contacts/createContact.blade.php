@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1 class="text-center">Formulaire d'ajout</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('contacts.index')}}">Retour Contact</a>
            <form class="" method="POST" action={{route('contacts.store')}}>
                @csrf
                <label for="location">location</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" value="{{old('location')}}" name="location">
                @error('location')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="email">email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" name="email">
                @error('email')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="call">call</label>
                <input type="text" class="form-control @error('call') is-invalid @enderror" id="call" value="{{old('call')}}" name="call">
                @error('call')
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