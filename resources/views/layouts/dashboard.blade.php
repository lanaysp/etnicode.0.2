<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/css/fa/css/all.min.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="{{ Storage::url(Auth::user()->photo) }}" alt="" class="company-header-avatar"/>
            <div style="color: white;" class="">
                {{ Auth::user()->name }}
            </div>
            <div class="" style="color: white; font-size: 12px;">
               Store : {{ Auth::user()->store_name }}
            </div>
          </div>
          <div class="list-group list-group-flush my-5">
            <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }}">
             <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="{{ route('dashboard-product') }}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/products*')) ? 'active' : '' }}">
               <i class="fas fa-couch"></i> Lelang Barang
            </a>
            {{-- <a
              href="{{ route('dashboard-transaction') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/transactions*')) ? 'active' : '' }}"
            >
              Transactions
            </a> --}}
            {{-- <a
              href="{{ route('dashboard-settings-store') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings*')) ? 'active' : '' }}"
            >
              Store Settings
            </a> --}}
            <a href="{{ route('dashboard-settings-account') }}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/account*')) ? 'active' : '' }}">
              <i class="fas fa-user-circle"></i> My Account
            </a>
<hr class="" style="background-color: white;">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action">
             <i class="fas fa-sign-out-alt"></i> Sign Out
            </a>
          </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-light d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
               <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
                <li class="nav-item dropdown">
                   <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fas fa-cogs mr-2 profile-picture"></i> Setting
                      {{-- <img
                        src="{{ Storage::url(Auth::user()->photo) }}"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      /> --}}

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                      <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">Akun</a>
                       <a class="dropdown-item" href="{{ route('dashboard-settings-store') }}">Pengaturan Toko</a>
                      <a href="{{ route('user.password.edit') }}" class="dropdown-item">Ganti Password</a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                          class="dropdown-item">
                          Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                      @php
                        $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                      @endphp
                      @if ($carts > 0)
                        <img src="/images/icon-cart-filled.svg" alt="" />
                        <div class="card-badge">{{ $carts }}</div>
                      @else
                        <img src="/images/icon-cart-empty.svg" alt="" />
                      @endif
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          {{-- Content --}}
          @yield('content')

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
  </body>
</html>
