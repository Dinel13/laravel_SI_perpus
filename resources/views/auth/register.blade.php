@extends('frontend.template.default')

@section('content')
<div class="container">
    <h3>Register</h3>
    <form action="{{route('register')}}" class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">person</i>
                <label for="name">Name</label>
                <input type="text" name="name" class="@error('name') invalid @enderror" value="{{old('name')}}">
                @error('name')
                <span class="helper-text" data-error="{{$message}}">
                </span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <label for="email">Email</label>
                <input type="email" name="email" class="validate @error('email') invalid @enderror" value="{{old('email')}}">
                @error('email')
                <span class="helper-text" data-error="{{$message}}" >
                </span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="@error('password') invalid @enderror" value="">
                @error('password')
                <span class="helper-text" data-error="{{$message}}">
                </span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <label for="password_confirm">Password confirmation</label>
                <input type="password" id="password_confirm" name="password_confirmation" class="@error('password_confirm') invalid @enderror" value="">
                @error('password_confirm')
                <span class="helper-text" data-error="{{$message}}" >
                </span>
                @enderror
                
            </div>
            <div class="input-field right">
                <input type="submit" value="Register" class="waves-effect waves-light btn red eccent-1">
            </div>
        </div>

    </form>
</div>
@endsection
