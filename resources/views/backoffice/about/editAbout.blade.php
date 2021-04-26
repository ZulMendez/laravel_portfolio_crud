@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container">
            <h1>Editer formulaire about</h1>
            <a href="{{route('abouts.index')}}">Retour About</a>
            <form class="" method="POST" action={{route('abouts.update', $about->id)}}>
                @csrf
                @method('PUT')
                <label for="birthday">birthday</label>
                <input value="{{$about->birthday}}" type="text" name="birthday">

                <hr>

                <label for="website">website</label>
                <input value="{{$about->website}}" type="text" name="website">

                <hr>

                <label for="phone">phone</label>
                <input value="{{$about->phone}}" type="text" name="phone">

                <hr>

                <label for="city">city</label>
                <input value="{{$about->city}}" type="text" name="city">

                <hr>

                <label for="age">age</label>
                <input value="{{$about->age}}" type="text" name="age">

                <hr>

                <label for="degree">degree</label>
                <input value="{{$about->degree}}" type="text" name="degree">

                <hr>

                <label for="email">email</label>
                <input value="{{$about->email}}" type="text" name="email">

                <hr>

                <label for="freelance">freelance</label>
                <input value="{{$about->freelance}}" type="text" name="freelance">

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection