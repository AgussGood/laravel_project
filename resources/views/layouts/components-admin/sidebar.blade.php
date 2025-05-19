        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="/home" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('admin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Agus</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('home') }}" class="nav-item nav-link"><i class="fa fa-table fa-fw"></i> Dashboard</a>
                    <a href="{{ route('informasi.index') }}" class="nav-item nav-link"><i class="fa fa-table fa-fw"></i> Informasi</a>
                    <a href="{{ route('karyawan.index') }}" class="nav-item nav-link"><i class="fa fa-table fa-fw"></i> Karyawan</a>
                    <a href="{{ route('eskul.index') }}" class="nav-item nav-link"><i class="fa fa-table fa-fw"></i> Eskul</a>
                    <a href="{{ route('fasilitas.index') }}" class="nav-item nav-link"><i class="fa fa-table fa-fw"></i> Fasilitas</a>
                    <a href="{{ route('jurusan.index') }}" class="nav-item nav-link"><i class="fa fa-table fa-fw"></i> Jurusan</a>
                    <a href="{{ route('industri.index') }}" class="nav-item nav-link"><i class="fa fa-table fa-fw"></i> Industri</a>
                    <a href="{{ route('prestasi.index') }}" class="nav-item nav-link"><i class="fa fa-table fa-fw"></i> Prestasi</a>
                </div>
            </nav>
        </div>