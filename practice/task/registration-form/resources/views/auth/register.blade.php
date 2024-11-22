@extends('layouts.auth')
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
   
    <div class="mb-3">
        @if ($errors->has('username'))
            <span class="text-danger">{{ $errors->first('username') }}</span>
        @endif
        <label for="username" class="form-label">User Name</label>
        <input type="text"  name="username" class="form-control" value="{{ old('username') }}" id="username"  required> 
    </div>

    
    <div class="mb-3">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <label for="email" class="form-label">Email address</label>
        <input type="email"  name="email" class="form-control" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" required> 
    </div>



    <div class="mb-3">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control"  id="password" name="password" required>
    </div>

    <div class="mb-3">
        @if ($errors->has('role'))
            <span class="text-danger">{{ $errors->first('role') }}</span>
        @endif
        <label for="role" class="form-label">Role</label>
        <select id="role" name="role_id" class="form-select" required>
            @foreach($roles as $role)
               <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
            
            
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
</form>
@stop


