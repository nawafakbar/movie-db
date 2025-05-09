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
          <a class="nav-link @yield('navCard')" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('navList')" href="#">Watch list</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>
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