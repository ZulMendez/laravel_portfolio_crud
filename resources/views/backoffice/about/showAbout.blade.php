@extends('layouts.back')

@include('layouts.flash')
@section('content')
    <div class="text-center">
        <h1 class="text-center text-info">ABOUT</h1>
        <a class="btn btn-outline-secondary mb-2" href="{{route('abouts.index')}}">BACK</a>
        <div class="card">
            <div class="card-body d-flex justify-content-around">
                <div>
                    <img style="width: 18rem" src="{{asset('/img/profile-img.jpg')}}" class="mt-3 img-fluid" alt="">
                </div>
                <div>
                    <h5 class="mt-4 card-title"><strong>{{$about->info}}: </strong> {{$about->value}}</h5>
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