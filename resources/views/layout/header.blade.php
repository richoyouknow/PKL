<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
            <a href="{{ route('beranda') }}" class="navbar-brand">
                <img src="denmart.jpeg" alt="Logo" style="height: 50px; width: auto;">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('beranda') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">
                        Beranda
                    </a>

                    <a href="{{ route('simpanan') }}"
                        class="nav-item nav-link {{ Request::is('simpanan') ? 'active' : '' }}">
                        Simpanan
                    </a>

                    <a href="{{ route('pinjaman') }}"
                        class="nav-item nav-link {{ Request::is('pinjaman') ? 'active' : '' }}">
                        Pinjaman
                    </a>

                    <a href="{{ route('transaksi') }}"
                        class="nav-item nav-link {{ Request::is('transaksi') ? 'active' : '' }}">
                        Transaksi
                    </a>

                    <a href="{{ route('login') }}" class="nav-item nav-link">Masuk</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
