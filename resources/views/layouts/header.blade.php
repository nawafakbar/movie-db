<header class="">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary pixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Movie DB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @yield('navHome')" aria-current="page" href="/movies">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link @yield('navView')" href="/view">Data Movie</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link disabled">{{ Auth::user()->name }}</a>
        </li>  
        @else
        <li class="nav-item">
          <a class="nav-link @yield('navLogin')" href="/login">Login</a>
        </li>
        @endauth
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      @auth
    <form action="{{ route('logout') }}" method="POST" class="ms-2">
      @csrf
      <button type="submit" class="btn btn-outline-light" onclick="return confirmLogout()">
      <i class="bi bi-box-arrow-right"></i> Logout
    </button>
    </form>
    @endauth
    </div>
  </div>
</nav>
</header>

<script>
  function confirmLogout() {
    return confirm("Apakah Anda yakin ingin logout?");
  }
</script>
{{-- <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Akademik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link @yield('navHome')" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navMhs')" href="/mahasiswa2">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navDosen')" href="/dosen2">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navProdi')" href="{{route('prodi2', ['jurusan'=>'Teknologi Informasi','prodi2'=>'TRPL'])}}">Prodi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> --}}