@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1 class="text-center">Editer formulaire services</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('servs.index')}}">Retour services</a>
            <form class="" method="POST" action={{route('servs.update', $service->id)}}>
                @csrf
                @method('PUT')
                <label for="icone">{{$service->icone}}</label>
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