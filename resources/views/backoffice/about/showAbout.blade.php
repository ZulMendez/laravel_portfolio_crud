@extends('layouts.back')

@include('layouts.flash')
@section('content')
    <div class="text-center">
        <h1>About</h1>
        <a class="btn btn-outline-secondary mb-2" href="{{route('abouts.index')}}">Retour About</a>
        <div class="card">
            <div class="card-body d-flex justify-content-around">
                <div>
                    <img style="width: 18rem" src="{{asset('/img/profile-img.jpg')}}" class="mt-3 img-fluid" alt="">
                </div>
                <div>
                    <h5 class="mt-4 card-title"><strong>Birthday:</strong> {{$about->birthday}}</h5>
                    <h5 class="card-title"><strong>Website:</strong> {{$about->website}}</h5>
                    <h5 class="card-title"><strong>Phone:</strong> {{$about->phone}}</h5>
                    <h5 class="card-title"><strong>City:</strong> {{$about->city}}</h5>
                    <h5 class="card-title"><strong>Age:</strong> {{$about->age}}</h5>
                    <h5 class="card-title"><strong>Degree:</strong> {{$about->degree}}</h5>
                    <h5 class="card-title"><strong>Email:</strong> {{$about->email}}</h5>
                    <h5 class="card-title"><strong>Freelance:</strong> {{$about->freelance}}</h5>
                    <form method="POST" action={{route('abouts.destroy', $about->id)}}>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection