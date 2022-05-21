<nav class="navbar navbar-expand-md navbar-light" style="min-height: 10rem;">
  <div class="container">
    <a class="fw-bold navbar-brand fs-2" href="{{ url('/') }}">
      myITSBooking
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
        <li class="px-4 border-2 fs-5 nav-item border-end">
          <a class="nav-link" href="#">Departemen</a>
        </li>
        <li class="px-4 border-2 fs-5 nav-item border-end">
          <a class="nav-link" href="#">Olahraga</a>
        </li>
        <li class="px-4 border-2 fs-5 nav-item border-end">
          <a class="nav-link" href="#">Rapat</a>
        </li>

        <!-- Authentication Links -->
        @guest
          @if (Route::has('login'))
            <li class="px-4 border-2 fs-5 nav-item fw-bolder border-end">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @endif

          @if (Route::has('register'))
            <li class="px-4 border-2 fs-5 nav-item fw-bolder">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="px-4 fs-5 nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ $name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" onclick="event.preventDefault()">
                {{ __('Profil') }}
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                                                                                                                   document.getElementById('logout-form').submit();">
                {{ __('Keluar') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
