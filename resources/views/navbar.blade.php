<div class="navbar bg-emerald-300 sticky top-0 z-50">
    <div class="navbar-start"></div>
    <div class="navbar-center">
      <a class="normal-case text-xl font-bold font-['Helvetica']">Library's Booklist</a>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      </svg>      
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                @if (Auth::user())
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fspesialis1.orthopaedi.fk.unair.ac.id%2Ffoto-staff-baru%2Fdepositphotos_39258143-stock-illustration-businessman-avatar-profile-picture&psig=AOvVaw3MGgld6VGLSFPrdSpr7jkQ&ust=1679366959754000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCIi_gcy_6f0CFQAAAAAdAAAAABAD" alt="user">
                @else
                <img src="" alt="no user" />
                @endif
              </div>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
              @guest
              <li><a href="{{route("register")}}">Register</a></li>
              <li><a href="{{route("login")}}">Login</a></li>
              @else
              <li><a href="{{route("logout")}}" onclick="event.preventDefault();  
                document.getElementById('logout-form').submit();">Logout</a>
              </li>
              <form action="{{route('logout')}}" id="logout-form" method="POST">
                @csrf
              </form>
              @endguest
            </ul>
          </div>
        </div>
    </div>
  </div>