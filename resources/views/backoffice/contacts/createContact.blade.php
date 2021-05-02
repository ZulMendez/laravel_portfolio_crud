@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container text-center">
            <h1 class="text-info">ADD</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('contacts.index')}}">BACK</a>
            <form class="container col-6" method="POST" action={{route('contacts.store')}}>
                @csrf
                <br>
                <label class="font-weight-bold" for="location">LOCATION</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" placeholder="add location" name="location">
                @error('location')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label class="font-weight-bold" for="email">EMAIL</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="add email" name="email">
                @error('email')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label class="font-weight-bold" for="call">CALL</label>
                <input type="text" class="form-control @error('call') is-invalid @enderror" id="call" placeholder="add phone" name="call">
                @error('call')
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