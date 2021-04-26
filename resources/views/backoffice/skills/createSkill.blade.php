@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1>Formulaire d'ajout</h1>
            <a href="{{route('skills.index')}}">Retour skills</a>
            <form class="" method="POST" action={{route('skills.store')}}>
                @csrf
                <label for="html">html</label>
                <input type="text" class="form-control @error('html') is-invalid @enderror" id="html" value="{{old('html')}}" name="html">
                @error('html')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="css">css</label>
                <input type="text" class="form-control @error('css') is-invalid @enderror" id="css" value="{{old('css')}}" name="css">
                @error('css')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="javascript">javascript</label>
                <input type="text" class="form-control @error('javascript') is-invalid @enderror" id="javascript" value="{{old('javascript')}}" name="javascript">
                @error('javascript')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="php">php</label>
                <input type="text" class="form-control @error('php') is-invalid @enderror" id="php" value="{{old('php')}}" name="php">
                @error('php')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="cms">cms</label>
                <input type="text" class="form-control @error('cms') is-invalid @enderror" id="cms" value="{{old('cms')}}" name="cms">
                @error('cms')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="photoshop">photoshop</label>
                <input type="text" class="form-control @error('photoshop') is-invalid @enderror" id="photoshop" value="{{old('photoshop')}}" name="photoshop">
                @error('photoshop')
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