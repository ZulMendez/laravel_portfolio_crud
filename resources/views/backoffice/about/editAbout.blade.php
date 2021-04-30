@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1 class="text-center">Editer formulaire about</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('abouts.index')}}">Retour About</a>
            <form class="" method="POST" action={{route('abouts.update', $about->id)}}>
                @csrf
                @method('PUT')
                <label for="info">{{$about->info}}</label>
                <input type="text" class="form-control @error('info') is-invalid @enderror" id="info" value="{{old('info')}}" name="info">
                @error('info')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="value">{{$about->value}}</label>
                <input type="text" class="form-control @error('value') is-invalid @enderror" id="value" value="{{old('value')}}" name="value">
                @error('value')
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