@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container text-center">
            <h1 class="text-info">ADD</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('projets.index')}}">BACK</a>
            <form class="container col-6" method="POST" action={{route('projets.store')}} enctype="multipart/form-data">
                @csrf
                <br>
                <label class="font-weight-bold" for="img">IMAGE</label>
                <input type="file" class="form-control-file @error('img') is-invalid @enderror" id="img" placeholder="add image" name="img">
                {{-- @dump('test') --}}
                @error('img')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="filter">FILTER</label>
                <select type="text" class="form-control-file @error('filter') is-invalid @enderror" id="filter" placeholder="add filter" name="filter" placeholder="filter">
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