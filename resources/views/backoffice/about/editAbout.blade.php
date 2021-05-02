@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container text-center">
            <h1 class="text-info">EDIT</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('abouts.index')}}">BACK</a>
            <form class="container col-6" method="POST" action={{route('abouts.update', $about->id)}}>
                @csrf
                @method('PUT')
                <br>
                <label class="font-weight-bold" for="info">TITLE</label>
                <input type="text" class="form-control @error('info') is-invalid @enderror" id="info" placeholder="{{$about->info}}" name="info">
                @error('info')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label class="font-weight-bold" for="value">TEXT</label>
                <input type="text" class="form-control @error('value') is-invalid @enderror" id="value" placeholder="{{$about->value}}" name="value">
                @error('value')
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