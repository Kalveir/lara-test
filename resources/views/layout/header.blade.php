<header class="pc-header ">
  <div class="header-wrapper">
    <div class="mr-auto pc-mob-drp">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item">
          <div class="dropdown-menu pc-h-dropdown">
            <a href="#!" class="dropdown-item">
              <i data-feather="user"></i>
              <span>My Account</span>
            </a>
            <div class="pc-level-menu">
              <a href="#!" class="dropdown-item">
                <i data-feather="menu"></i>
                <span class="float-right"><i data-feather="chevron-right" class="mr-0"></i></span>
                <span>Level2.1</span>
              </a>
              <div class="dropdown-menu pc-h-dropdown">
                <a href="#!" class="dropdown-item">
                  <i class="fas fa-circle"></i>
                  <span>My Account</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fas fa-circle"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fas fa-circle"></i>
                  <span>Support</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fas fa-circle"></i>
                  <span>Lock Screen</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fas fa-circle"></i>
                  <span>Logout</span>
                </a>
              </div>
            </div>
            <a href="#!" class="dropdown-item">
              <i data-feather="settings"></i>
              <span>Settings</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i data-feather="life-buoy"></i>
              <span>Support</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i data-feather="lock"></i>
              <span>Lock Screen</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i data-feather="power"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <div class="ml-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item">
          <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i data-feather="search"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
            <form class="px-3">
              <div class="form-group mb-0 d-flex align-items-center">
                <i data-feather="search"></i>
                <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
              </div>
            </form>
          </div>
        </li>
        <li class="dropdown pc-h-item">
          <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
            <span>
              <span class="user-name">{{ Auth::user()->name }}</span>
              <span class="user-desc">{{ optional(Auth::user()->roles->first())->name }}</span>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
            <div class=" dropdown-header">
              <h6 class="text-overflow m-0">Welcome !</h6>
            </div>
            <a href="#"  class="dropdown-item" onclick="event.preventDefault(); document.getElementById('profile.menu').submit()">
              <i data-feather="user"></i>
              <span>My Account</span>
            </a>
            {{-- get profile --}}
            <form id="profile.menu" action="{{ route('profile.info',Auth::user()->id)}}" method="POST">
              @csrf
            </form>
            <a href="#!" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout.menu').submit()">
              <i data-feather="power"></i>
              <span>Logout</span>
            </a>
          </div>
          {{-- get logout --}}
          <form id="logout.menu" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
        </li>
      </ul>
    </div>

  </div>
</header>