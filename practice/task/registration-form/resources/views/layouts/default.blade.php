<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="row">
      <div class="col-3 px-0">
        @include('includes.sidebar')
      </div>
      <div class="col-9 px-0">
        @include('includes.navbar')
        <div id="main" class="row">
            @yield('content')
        </div>
      </div>

   
   

   

</div>
</body>
</html>