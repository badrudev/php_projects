<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height:100vh">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">{{ucwords(auth()->user()->username)}} 😀</span>
    </a>
    <hr>
    @php
      $url = parse_url(url()->current());
      $path = $url['path'];
      $segments = explode('/', $path);
      $value = end($segments);
      
    @endphp
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{route('dashboard')}}" class="nav-link @if($value=='dashboard') active @else text-white @endif" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Dashboard
        </a>
      </li>

      @if(auth()->user()->role_id==1)
            <li>
                  <a href="{{route('users')}}" class="nav-link @if($value=='users') active @else text-white @endif">
                     <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                     Users
                  </a>
            </li>
      @endif
    </ul>
    
   
</div>