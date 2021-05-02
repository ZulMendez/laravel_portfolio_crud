@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container text-center">
            <h1 class="text-info">ADD</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('servs.index')}}">BACK</a>
            <form class="container col-6" method="POST" action={{route('servs.store')}}>
                @csrf
                <br>
                <label class="font-weight-bold" for="icone">ICON</label>
                <input type="text" class="form-control @error('icone') is-invalid @enderror" id="icone" placeholder="add icon" name="icone">
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