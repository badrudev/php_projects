@extends('layouts.auth')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    @if ($errors->has('emailPassword'))
      <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
    @endif

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp" required> 
    </div>
   
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
</form>
@stop


