@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1 class="text-center">Editer formulaire projet</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('projets.index')}}">Retour projet</a>
            <form class="" method="POST" action={{route('projets.update', $projet->id)}}>
                @csrf
                @method('PUT')
                <label for="img">Img</label>
                <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" value="{{old('img')}}" name="img">
                @error('img')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label for="filter">Filter</label>
                <input type="text" class="form-control @error('filter') is-invalid @enderror" id="filter" value="{{old('filter')}}" name="filter">
                @error('filter')
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