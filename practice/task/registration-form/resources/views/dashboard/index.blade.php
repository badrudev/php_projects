@extends('layouts.default')
@section('content')
  @if(auth()->user()->role_id==1)
   <p class="text-center">This is admin dashboard</p>
  @else
   <p class="text-center">This is user dashboard</p>
  @endif
  
@stop