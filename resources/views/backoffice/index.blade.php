@extends('layouts.back')

@section('content')
    <main id="" class="">
        <section class="">
            <div class="container text-center p-5">
                <h1>BACK OFFICE | dashboard</h1>
                <a href="{{route('home')}}" class="btn btn-secondary mx-auto my-auto p-2 rounded">Retour vers le site</a>
                <div class="row my-3">
                    <div class="col-6"> 
                        <div class="card text-center mx-auto my-3">
                            <div class="card-body">
                                <h4 class="card-title">Modification About</h4>
                                <p class="card-text">CRUD ABOUT</p>
                                <a class="btn bg-success" href={{route('abouts.index')}}>ABOUT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6"> 
                        <div class="card text-center mx-auto my-3">
                            <div class="card-body">
                                <h4 class="card-title">Modification about</h4>
                                <p class="card-text">CRUD about</p>
                                <a class="btn bg-success" href="">SKILLS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6"> 
                        <div class="card text-center mx-auto my-3">
                            <div class="card-body">
                                <h4 class="card-title">Modification product</h4>
                                <p class="card-text">CRUD product</p>
                                <a class="btn bg-success" href="">PROJECTS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 "> 
                        <div class="card text-center mx-auto my-3">
                            <div class="card-body">
                                <h4 class="card-title">Modification store</h4>
                                <p class="card-text">CRUD store</p>
                                <a class="btn bg-success" href="">CONTACT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection