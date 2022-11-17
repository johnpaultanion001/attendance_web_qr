<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <a href="/">
            <h2>LOGO</h2>
            <!-- <img src="{{ asset('/assets/img/logo.png') }}" width="80" alt="logo" style="border-radius: 40px;">  -->
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>

         

        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/patient/home">
              <i class="fas fa-address-card fa-lg p-2"></i> Home
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/events">
              <i class="fas fa-address-card fa-lg p-2"></i> Events
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/#about" onclick="scrollToAbout()">
              <i class="fas fa-address-card fa-lg p-2"></i> ABOUT YMC
              </a>
            </li>


            

            
            <li class="nav-item">
              <a class="nav-link" href="/#contact" onclick="scrollToContact()">
                <i class="far fa-envelope fa-lg p-2"></i> Contact Us
              </a>
            </li>
          
        
            
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/rphsangono/" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                <i class="fab fa-facebook-square fa-2x"></i>
              </a>
            </li>
          
          </ul>
        
          <ul class="navbar-nav ml-auto">
              @if (Auth::user())
              <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fas fa-user fa-lg p-2"></i> {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-with-icons">
                      <a href="/patient/update" class="dropdown-item">
                          <i class="fas fa-user-edit fa-lg p-2"></i> Update Info.
                      </a>
                      <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                          <i class="fas fa-sign-out-alt fa-lg p-2"></i> Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form> 
                  </div>
              </li>
              @else
              <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link {{ request()->is('login') || request()->is('register') ? 'active' : '' }}" data-toggle="dropdown">
                  <i class="fas fa-users fa-lg p-2"></i> Accounts
                  </a>
                  <div class="dropdown-menu dropdown-with-icons">
                      <a href="/login" class="dropdown-item">
                          <i class="fas fa-sign-in-alt fa-lg p-2"></i>Admin Login
                      </a>
                      <a href="/register" class="dropdown-item">
                      <i class="fas fa-user-plus fa-lg p-2"></i> Student Registration
                      </a>
                  </div>
              </li>
              @endif
          </ul>

        </div>
      </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter"></div>
  