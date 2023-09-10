<div class="navbar">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box hover:text-red-400">

        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/shop')}}">Shop</a></li>
        <li><a href="{{url('/service')}}">Service</a></li>
        <li><a href="{{url('/doctors')}}">Doctors</a></li>
        <li><a href="{{url('/departments')}}">Departments</a></li>
        <li><a href="{{url('/about')}}">About us</a></li>

        @if ($data)
        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
        @endif





        <!-- <li><a href="{{url('/contact')}}">contact</a></li>
        <li>
          <a>SOLUTION</a>
          <ul class="p-2">
            <li><a>Fire Safty</a></li>
            <li><a>CCTV</a></li>
          </ul>
        </li>
        <li><a href="{{url('/product')}}">PRODUCT</a></li> -->
      </ul>
    </div>
    <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl">
      <img class='w-32' src="{{url('assets/logo/logo2.png')}}" alt="image" />
      <!-- Life & Care -->
    </a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1 ">
      <li><a href="{{url('/')}}">Home</a></li>
      <li><a href="{{url('/shop')}}">Shop</a></li>
      <li><a href="{{url('/service')}}">Service</a></li>
      <li><a href="{{url('/doctors')}}">Doctors</a></li>
      <li><a href="{{url('/departments')}}">Departments</a></li>
      <li><a href="{{url('/about')}}">About us</a></li>

      @if ($data)
      <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
      @endif



      <!-- <li tabindex="0">
        <details>
          <summary>SOLUTION</summary>
          <ul class="p-2">
            <li><a>Fire Safty</a></li>
            <li><a>CCTV </a></li>
          </ul>
        </details>
      </li>
      <li><a href="{{url('/product')}}">PRODUCT</a></li> -->
    </ul>
  </div>




  @if ($data)
  <div class="navbar-end mr-10">

    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
        </div>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a href="dashboard" class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a href="logout">Logout</a></li>
      </ul>
    </div>
  </div>
  @else
  <div class="navbar-end mr-10">
    <a href="{{ url('/login') }}">Login</a>
  </div>
  @endif
</div>

</div>