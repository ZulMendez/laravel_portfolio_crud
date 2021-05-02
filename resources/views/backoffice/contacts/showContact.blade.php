@extends('layouts.index')

@include('layouts.flash')
@section('content')
<section id="contact" class="contact">
    <div class="container text-center">
        <h1 class="text-info">Contact</h1>
        <a class="btn btn-outline-secondary mb-2" href="{{route('contacts.index')}}">BACK</a>
        <div class="card" style="width: auto;">
            <div class="card-body">
                <h5 class="card-title"><strong>Location: </strong> {{$contact->location}}</h5>
                <h5 class="card-title"><strong>Email: </strong> {{$contact->email}}</h5>
                <h5 class="card-title"><strong>Call: </strong> {{$contact->call}}</h5>
                <form method="POST" action={{route('contacts.destroy', $contact->id)}}>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection