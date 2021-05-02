@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1 class="text-center">ADD</h1>
            <a href="{{route('abouts.index')}}">BACK</a>
            <form class="" method="POST" action={{route('abouts.store')}}>
                @csrf
                <br>
                <label for="info">Info</label>
                <input type="text" class="form-control @error('info') is-invalid @enderror" id="info" value="{{old('info')}}" name="info">
                @error('info')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="value">Value</label>
                <input type="text" class="form-control @error('value') is-invalid @enderror" id="value" value="{{old('value')}}" name="value">
                @error('value')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection