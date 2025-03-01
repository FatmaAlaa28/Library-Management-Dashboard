<nav class="navbar navbar-expand-lg" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.1);">
  <div class="container-fluid row">
    <a class="navbar-brand col-1" href="#"><img src="{{ asset('assets/images/logo.jpeg') }}"  style="width:40px;" alt=""></a>

      <form class="d-flex col-6" role="search">
        <input class="form-control  me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div class="col-3">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Auth.login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Auth.register') }}">Register</a>
          </li>
          @endguest
          @auth
          <p class="mt-3 h5"> Welcome {{ Auth::user()->name}}</p>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Auth.logout') }}"> <span style="color:red;">Logout</span></a>
          </li>
          @endauth
        </ul>
      </div>

  </div>
</nav>