@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container text-center">
            <h1 class="text-info">EDIT</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('facts.index')}}">BACK</a>
            <form class="container col-6" method="POST" action={{route('facts.update', $fact->id)}}>
                @csrf
                @method('PUT')
                <br>
                <label class="font-weight-bold" for="counter">COUNTER</label>
                <input type="text" class="form-control @error('counter') is-invalid @enderror" id="counter" placeholder="{{$fact->counter}}" name="counter">
                @error('counter')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="texte">TEXT</label>
                <input type="text" class="form-control @error('texte') is-invalid @enderror" id="texte" placeholder="{{$fact->texte}}" name="texte">
                @error('texte')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="icone">ICON</label>
                <input type="text" class="form-control @error('icone') is-invalid @enderror" id="icone" placeholder="{{$fact->icone}}" name="icone">
                @error('icone')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <button class="btn btn-info" type="submit">SUBMIT</button>
            </form>
        </div>
    </section>
</main>
@endsection