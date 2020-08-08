@extends('frontend.template.default')

@section('content')
<div class="container">
    <h3>Login</h3>
    <form action="{{route('login')}}" class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <label for="email">Email Adress</label>
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
            <div class="input-field right">
                <input type="submit" value="Login" class="waves-effect waves-light btn red eccent-1">
            </div>
        </div>

    </form>
</div>
@endsection
