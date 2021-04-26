@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1>Editer formulaire projet</h1>
            <a href="{{route('projets.index')}}">Retour projet</a>
            <form class="" method="POST" action={{route('projets.update', $projet->id)}}>
                @csrf
                @method('PUT')
                <label for="img">img</label>
                <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" value="{{old('img')}}" name="img">
                @error('img')
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