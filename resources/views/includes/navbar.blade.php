    <div id="app">
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample07" style="">
          <ul class="navbar-nav mr-auto">
            
         @if (Auth::guest())
             <ul class="navbar-nav mr-right" style='margin-left: 900px;'>
                <li class='nav-item'><a class='nav-link' href='{{ route('login') }}'>Login</a></li>
                <li class='nav-item'><a class='nav-link' href='{{ route('register') }}'>Register</a></li>
             </ul>
         @else
            @foreach($nav as $n)
              @if($n->visb==1)
                     <li class='nav-item'><a class='nav-link' style='float:left' href='/public/{{str_replace(' ','',$n->item)}}'>{{$n->item}}</a></li>
              @endif
            @endforeach
            @if( Auth::user()->admin==1)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="../admin/adminarea.php" id="dropdown1" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">Admin Tool</a>
              <div class="dropdown-menu" aria-labelledby="dropdown1">
                <a class='dropdown-item' href='../admin/AdminArea'>Admin Area</a>
              <div class='dropdown-divider'></div>
              @foreach($nav as $n)
                     @if($n->visb==2)
                            <a class='dropdown-item' href='/admin/{{str_replace(' ','',$n->item)}}'>{{$n->item}}</a>
                     @endif
         @endforeach
         @endif
         
              </div>
            </li>
          </ul>
          <ul class="navbar-nav mr-right">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

           {{Auth::user()->name}}
        </a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
              @if(Auth::user()->admin==0)
                     <a class="dropdown-item" href="/public/Profile" >Profile</a>
              @elseif(Auth::user()->admin==1)
                     <a class="dropdown-item" href="/admin/Profile" >Profile</a>
              @endif
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class=" dropdown-item btn btn-outline-success my-2 my-sm-0">
                  Logout
              </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>
              </div>
            </li>
          </ul>
        </div>
      @endif
      </div>
    </nav>
    <div style='margin: 5px;'></div>
    </div>