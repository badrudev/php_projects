<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-end" style="background-color: #e3f2fd;">

 <div>
   <label>{{auth()->user()->email}}</label>
   <a class="btn btn-outline-success my-2 mx-4 float-left" href="{{ route('logout') }}" type="submit">Logout</a>  
 </div>
</nav>