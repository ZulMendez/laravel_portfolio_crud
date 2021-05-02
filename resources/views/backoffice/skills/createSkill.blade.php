@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container text-center">
            <h1 class="text-info">ADD</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('skills.index')}}">BACK</a>
            <form class="container col-6" method="POST" action={{route('skills.store')}}>
                @csrf
                <br>
                <label class="font-weight-bold" for="compet">SKILL</label>
                <input type="text" class="form-control @error('compet') is-invalid @enderror" id="compet" placeholder="add skill" name="compet">
                @error('compet')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="pourcent">PERCENTAGE</label>
                <input type="text" class="form-control @error('pourcent') is-invalid @enderror" id="pourcent" placeholder="add percentage %" name="pourcent">
                @error('pourcent')
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