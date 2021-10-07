<div class="header @@classList">
  <!-- navbar -->
  <nav class="navbar-classic navbar navbar-expand-lg">
    <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
    <div class="ms-lg-3 d-none d-md-none d-lg-block">
      <!-- Form -->
      <div class="avatar avatar-lg">
        <img alt="avatar" src="{{asset('assets')}}/images/avatar/logo-pragma.png" class="rounded-circle" />
      </div>
      <span>
        FORUM PRAGMA-INFOMATIKA
      </span>
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
        @csrf
        <button type="submit" class="btn"> Logout</button>
      </form>
      <!-- List -->
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="{{asset('assets')}}/images/avatar/avatar-1.jpg" class="rounded-circle" />
          </div>
        </a>
      </li>
    </ul>
  </nav>
</div>