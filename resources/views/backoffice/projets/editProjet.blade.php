@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container text-center">
            <h1 class="text-info">EDIT</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('projets.index')}}">BACK</a>
            <form class="container col-6" method="POST" enctype="multipart/form-data" action={{route('projets.update', $projet->id)}}>
                @csrf
                @method('PUT')
                <br>
                <label class="font-weight-bold" for="img">IMAGE</label>
                <input type="file" value="{{$projet->img}}" class="form-control-file @error('img') is-invalid @enderror" id="img" name="img" placeholder="{{$projet->img}}">
                @error('img')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="filter">FILTER</label>
                <select type="text" class="form-control @error('filter') is-invalid @enderror" id="filter" value="{{old('filter')}}" name="filter" placeholder="{{$projet->filter}}">
                    <option value="filter-app">filter-app</option>
                    <option value="filter-card">filter-card</option>
                    <option value="filter-web">filter-web</option>
                </select>
                    @error('filter')
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