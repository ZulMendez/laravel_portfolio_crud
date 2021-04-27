@extends('layouts.index')

@include('layouts.flash')
@section('content')
    <section id="facts" class="facts section-bg">
        <div class="container text-center">
            <h1>Facts</h1>
            <a class="btn btn-outline-secondary mb-2" href="{{route('facts.index')}}">Retour facts</a>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center facts-content">
                    <div class="col-lg-6 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="{{$fact->icone}}"></i>
                            <span data-toggle="counter-up">{{$fact->counter}}</span>
                            <p><strong>{{$fact->texte}}</strong></p>
                        </div>
                    </div>
                    <form method="POST" action={{route('facts.destroy', $fact->id)}}>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection