<?php include "header/header.php"; ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Randi Studio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-semibold">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#features">Fitur</a></li>
                <li class="nav-item"><a class="nav-link" href="#packages">Paket</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="#booking">Booking</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Abadikan Momen Terbaikmu</h1>
        <p class="lead mb-4">Studio foto profesional dengan peralatan lengkap dan fotografer berpengalaman</p>
        <a href="#booking" class="btn btn-primary btn-lg px-5">Booking Sekarang</a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Kenapa Memilih Kami?</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <i class="bi bi-camera feature-icon"></i>
                <h4>Peralatan Profesional</h4>
                <p>Kamera dan lighting terbaik untuk hasil foto maksimal.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-people feature-icon"></i>
                <h4>Fotografer Berpengalaman</h4>
                <p>Tim fotografer ahli yang siap membantu konsep foto Anda.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-palette feature-icon"></i>
                <h4>Editing Profesional</h4>
                <p>Foto diedit dengan sentuhan profesional untuk hasil sempurna.</p>
            </div>
        </div>
    </div>
</section>

<!-- Packages Section -->
<section id="packages" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Paket Foto Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Paket Basic</h4>
                        <small>Rp 360.000</small>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>1 Jam Sesi Foto</li>
                            <li>10 Foto Editing</li>
                            <li>1 Ganti Outfit</li>
                            <li>Background Sederhana</li>
                            <li>File Digital</li>
                        </ul>
                        <div class="d-grid">
                            <a href="#booking" class="btn btn-primary mt-3">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-success text-white text-center">
                        <h4 class="mb-0">Paket Premium</h4>
                        <small>Rp 650.000</small>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>2 Jam Sesi Foto</li>
                            <li>25 Foto Editing</li>
                            <li>2 Ganti Outfit</li>
                            <li>Background Variatif</li>
                            <li>File Digital + Cetak</li>
                        </ul>
                        <div class="d-grid">
                            <a href="#booking" class="btn btn-success mt-3">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-warning text-white text-center">
                        <h4 class="mb-0">Paket Deluxe</h4>
                        <small>Rp 1.200.000</small>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>3 Jam Sesi Foto</li>
                            <li>50 Foto Editing</li>
                            <li>3 Ganti Outfit</li>
                            <li>Background Premium</li>
                            <li>File Digital + Cetak + Album</li>
                        </ul>
                        <div class="d-grid">
                            <a href="#booking" class="btn btn-warning text-white mt-3">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Galeri Foto</h2>
        <div class="row g-3">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="img/wisuda1.jpg" alt="Gallery 1" class="gallery-img" />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="img/wisuda2.jpg" alt="Gallery 2" class="gallery-img" />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="img/wisuda3.jpg" alt="Gallery 3" class="gallery-img" />
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="img/wisuda4.jpg" alt="Gallery 4" class="gallery-img" />
            </div>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section id="booking" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Booking Sekarang</h2>
        <div id="pesan" class="text-center"></div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="bookingForm">
                    <div class="mb-3">
                        <label htmlFor="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap" />
                    </div>
                    <div class="mb-3">
                        <label htmlFor="phone" class="form-label">Nomor WhatsApp</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Contoh: 081234567890" pattern="[0-9]{9,15}" />
                        <div class="form-text">Masukkan nomor tanpa tanda + atau spasi</div>
                    </div>
                    <div class="mb-3">
                        <label htmlFor="date" class="form-label">Tanggal Booking</label>
                        <input type="date" class="form-control" id="datebooking" />
                    </div>
                    <div class="mb-3">
                        <label htmlFor="package" class="form-label">Paket Foto</label>
                        <select class="form-select" id="package">
                            <option value="" selected disabled>Pilih paket</option>
                            <option value="Paket Basic">Paket Basic - 1 jam, 10 foto</option>
                        </select>
                    </div>
                    <button type="submit" id="btnBooking" class="btn btn-primary w-100">Booking Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "footer/footer.php"; ?>