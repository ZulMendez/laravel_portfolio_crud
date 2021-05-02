@extends('layouts.back')

@section('content')
    <section class="bg-dark rounded">
        <div class="container text-center px-4">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <img src={{asset('/img/profile-img.jpg')}} alt="" style="width: 5rem; height: 5rem;" class="mr-3 mt-2 img-fluid rounded-circle">
                <h2 class="text-white font-weight-bold">BACKOFFICE</h2>
            </div>
            <h4 class="text-white font-weight-bold"> Dashboard</h4>
            <a href="{{route('home')}}" class="btn btn-outline-success mx-auto my-auto p-1 rounded">WEBSITE</a>
            <div class="row my-1">
                <div class="col-6"> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">ABOUT</h4>
                            <a class="btn btn-success" href={{route('abouts.index')}}>GO</a>
                        </div>
                    </div>
                </div>
                <div class="col-6"> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">FACTS</h4>
                            <a class="btn btn-success" href={{route('facts.index')}}>GO</a>
                        </div>
                    </div>
                </div>
                <div class="col-6"> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">SKILLS</h4>
                            <a class="btn btn-success" href={{route('skills.index')}}>GO</a>
                        </div>
                    </div>
                </div>
                <div class="col-6"> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">PROJECTS</h4>
                            <a class="btn btn-success" href={{route('projets.index')}}>GO</a>
                        </div>
                    </div>
                </div>
                <div class="col-6"> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">SERVICES</h4>
                            <a class="btn btn-success" href={{route('servs.index')}}>GO</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 "> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">CONTACT</h4>
                            <a class="btn btn-success" href={{route('contacts.index')}}>GO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection