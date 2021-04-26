@extends('layouts.index')

@include('layouts.flash')
@section('content')
<section id="contact" class="contact">
    <div class="container text-center">
        <h1>Contact</h1>
        <a href="{{route('contacts.index')}}">Retour Contact</a>
        <div class="card" style="width: 18rem;">
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