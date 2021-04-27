@extends('layouts.index')

@section('content')
<section id="contact" class="contact">
    <div class="container">
            <h1 class="text-center">Editer formulaire contact</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('contacts.index')}}">Retour Contact</a>
            <form class="" method="POST" action={{route('contacts.update', $contact->id)}}>
                @csrf
                @method('PUT')
                <label for="location">Location</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" value="{{old('location')}}" name="location">
                @error('location')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" name="email">
                @error('email')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="call">Call</label>
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
    </div>
</section>
@endsection