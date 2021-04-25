@extends('layouts.back')

@section('content')
    <div>
        <h1>{{$about->soustitre}}</h1>
        <p class="card-text">{{$about->description}}</p>
        <a href="{{route('abouts.index')}}">Retour About</a>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$about->birthday}}</h5>
                <h5 class="card-title">{{$about->website}}</h5>
                <h5 class="card-title">{{$about->phone}}</h5>
                <h5 class="card-title">{{$about->city}}</h5>
                <h5 class="card-title">{{$about->age}}</h5>
                <h5 class="card-title">{{$about->degree}}</h5>
                <h5 class="card-title">{{$about->email}}</h5>
                <h5 class="card-title">{{$about->freelance}}</h5>
                <form method="POST" action={{route('abouts.destroy', $about->id)}}>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>
    </div>
@endsection