<nav class="navbar navbar-expand-lg bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto me-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Home
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('beranda') }}">Beranda</a></li>
                  <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
                  <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                </ul>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('view-lowongan') }}">Lowongan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Perusahaan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Kerjasama Perushaan</a></li>
              <li><a class="dropdown-item" href="#">Daftar Perusahaan</a></li>
              <li><a class="dropdown-item" href="#">Penilaian Stakholder</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Trace Study</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>