@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container text-center">
            <h1 class="text-info mt-4">EDIT</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('skills.index')}}">BACK</a>
            <form class="container col-6" method="POST" action={{route('skills.update', $skill->id)}}>
                @csrf
                @method('PUT')
                <br>
                <label class="font-weight-bold" for="compet">SKILL</label>
                <input type="text" class="form-control @error('compet') is-invalid @enderror" id="compet" placeholder="{{$skill->compet}}" name="compet">
                @error('compet')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <label class="font-weight-bold" for="pourcent">PERCENTAGE</label>
                <input type="text" class="form-control @error('pourcent') is-invalid @enderror" id="pourcent" placeholder="{{$skill->pourcent}}" name="pourcent">
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