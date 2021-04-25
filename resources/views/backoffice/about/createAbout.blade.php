@extends('layouts.back')

@section('content')

<main id="" class="">
    <section class="">
        <div class="container">
            <h1>About</h1>
            <form class="" method="POST" action={{route('abouts.store')}}>
                @csrf
                {{-- <label for="soustitre">soustitre</label>
                <input type="text" class="form-control @error('soustitre') is-invalide @enderror" id="soustitre" value={{old('soustitre')}} name="soustitre">
                @error('soustitre')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="description">Description</label>
                <input type="text" class="form control @error('description') is-invalide @enderror" id="description" value={{old('description')}} name="description">
                @error('description')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr> --}}

                <label for="birthday">birthday</label>
                <input type="text" class="form-control @error('birthday') is-invalide @enderror" id="birthday" value={{old('birthday')}} name="birthday">
                @error('birthday')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="website">website</label>
                <input type="text" class="form-control @error('website') is-invalide @enderror" id="website" value={{old('website')}} name="website">
                @error('website')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="phone">phone</label>
                <input type="text" class="form-control @error('phone') is-invalide @enderror" id="phone" value={{old('phone')}} name="phone">
                @error('phone')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="city">city</label>
                <input type="text" class="form-control @error('city') is-invalide @enderror" id="city" value={{old('city')}} name="city">
                @error('city')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="age">age</label>
                <input type="text" class="form-control @error('age') is-invalide @enderror" id="age" value={{old('age')}} name="age">
                @error('age')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="degree">degree</label>
                <input type="text" class="form-control @error('degree') is-invalide @enderror" id="degree" value={{old('degree')}} name="degree">
                @error('degree')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="email">email</label>
                <input type="text" class="form-control @error('email') is-invalide @enderror" id="email" value={{old('email')}} name="email">
                @error('email')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>

                <label for="freelance">freelance</label>
                <input type="text" class="form-control @error('freelance') is-invalide @enderror" id="freelance" value={{old('freelance')}} name="freelance">
                @error('freelance')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <hr>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection