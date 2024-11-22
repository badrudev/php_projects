@extends('layouts.default')
@section('content')

  <div class="container">
  <table class="table m-3">
      <thead>
      <tr>
            <th scope="col">#Id</th>
            <th scope="col">User</th>
            <th scope="col">Role</th>
      </tr>
      </thead>
      <tbody>
      
      @foreach($users as $user)
      <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->role->name}}</td>
            <td>{{$user->username}}</td>
      </tr>
      @endforeach    
      
      
      </tbody>
  </table>
  </div>
  
 

  
@stop
