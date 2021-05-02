@extends('layouts.index')

@include('layouts.flash')
@section('content')
    <section id="skills" class="skills section-bg">
        <div class="container text-center">
            <h1 class="text-info">SKILL</h1>
            <a class="btn btn-outline-secondary my-3" href="{{route('skills.index')}}">BACK</a>
            <div class="container card" style="width: 25rem; height: auto;">
                <div class="row d-flex justify-content-center align-items-center skills-content">
                    <div class="col-lg-12" data-aos="fade-up">
                        <div class="progress mt-4">
                            <span class="skill">{{$skill->compet}}<i class="val">{{$skill->pourcent}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->pourcent}}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action={{route('skills.destroy', $skill->id)}}>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mb-4">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection