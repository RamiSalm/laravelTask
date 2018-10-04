
<div class='dashbord addpatient'>
    <h3>{{Auth::user()->name}}</h3>
    <div class='admin-divider'></div>
        <ul>
            <li><a href='/public/Home'>Home</a></li>
            @foreach($nav as $n)
              <li><a href='/admin/{{str_replace(' ','',$n->item)}}'>{{$n->item}}</a></li>
            @endforeach
            <div class='admin-divider'></div>
            <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class=" dropdown-item btn btn-outline-success my-2 my-sm-0">
                  Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
            </form>
        </ul>
</div>