    <div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <img src="user/img/logo.png" alt="" style=" width: 100px" >
          <span class="text-success">SMK AL AMANAH</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="{{url('/')}}" class="nav-item nav-link text-success active">Beranda</a>
            <a href="{{url('informasi')}}" class="nav-item nav-link text-success">Informasi</a>
            <a href="{{url('jurusan')}}" class="nav-item nav-link text-success">Jurusan</a>
            <a href="{{url('guru')}}" class="nav-item nav-link text-success">Guru</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle text-success"
                data-toggle="dropdown"
                >Lainnya</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="{{url('fasilitas')}}" class="dropdown-item text-success">Fasilitas</a>
                <a href="{{url('prestasi')}}" class="dropdown-item text-success">Prestasi</a>
                <a href="{{url('eskul')}}" class="dropdown-item text-success">Eskul</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>