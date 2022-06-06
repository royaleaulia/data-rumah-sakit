
        @auth
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
          <div class="container">
            <a class="navbar-brand" href="#">Hopitium</a>
      
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link {{ ($title === "dokter") ? 'active' : '' }}"    href="/dokter">Dokter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ ($title === "perawat") ? 'active' : '' }}"  href="/perawat" >Perawat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ ($title === "pasien") ? 'active' : '' }}"  href="/pasien" >Pasien</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ ($title === "kamar") ? 'active' : '' }}"  href="/kamar" >Kamar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/obat">Obat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/petugas_administrasi">Petugas Administrasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
      
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Detail
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/data_pemeriksaan">Data Pemeriksaan Dokter dan Pasien</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/data_administrasi">Data Administrasi Pasien</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/data_pembelian_obat">Data Pembelian Obat pada Pasien</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="data_rawat_inap">Data Rawat Inap</a></li>
                  </ul>
                </li>
              
              <ul class="navbar-nva ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </ul>
    </div>
  </div>
</nav>

        @else
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
          <div class="container">
            <a class="navbar-brand" href="#">Hopitium</a>
      
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link disabled">Dokter</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Perawat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Pasien</a>
                </li>
              <li class="nav-item">
                <a class="nav-link disabled">Kamar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Obat</a>
              </li>
            <li class="nav-item">
              <a class="nav-link disabled">Petugas Administrasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
                <li class="nav-item dropdown disable">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Detail
                  </a>
                </li>
              
                <li class="navbar-nav ms-auto">
                  <ul class="nav-item">
                    <a href="/login" class="nav-link {{ ($title == "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                  </ul>
                </li> 
      </ul>
    </div>
  </div>
</nav>

        @endauth

      </div>
    </div>
  </nav>