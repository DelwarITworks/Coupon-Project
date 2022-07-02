
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-custom d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#"> <i class="fa-solid fa-tag"></i> GetCoupon</a>
        
        <div class="sing_and_login">
          @guest
          <a href="{{ route('register') }}" class="btn sign_up">Sign up</a>
          <a href="{{ route('login') }}" class="btn join">Join</a>
          @else
          @if(Auth::user()->is_admin == 1)
            
          <a href="{{ route('dashboard') }}" class="btn sign_up">Dashboard</a>
          @endif
          <a href="{{ route('logout') }}" class="btn join">Logout</a>

          @endguest
        </div>
      </div>
  </nav>
</header>
    