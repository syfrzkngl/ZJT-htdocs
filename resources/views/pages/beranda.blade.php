<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>zetorojanaloka.site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img.logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">

    <!-- ==========================================================================
       TAMBAHAN CSS RESPONSIF UNTUK MOBILE INSPECT (TANPA MERUBAH STRUKTUR)
       ========================================================================== -->
    <style>
        @media (max-width: 767.98px) {
            body, html {
                overflow-x: hidden;
            }
            .hero-section h1 {
                font-size: 1.8rem !important;
                line-height: 1.3;
            }
            .hero-section p {
                font-size: 1rem !important;
            }
            .profil-container {
                display: flex !important;
                flex-direction: column !important;
                padding: 20px !important;
                text-align: center !important;
            }
            .profil-text {
                max-width: 100% !important;
                margin-bottom: 20px !important;
            }
            .profil-img img {
                width: 100% !important;
                max-width: 280px !important;
                height: auto !important;
                margin: 0 auto !important;
            }
            .klien-slider {
                display: flex !important;
                flex-wrap: wrap !important;
                justify-content: center !important;
                gap: 15px !important;
            }
            .klien-item {
                padding: 10px !important;
            }
            .klien-item img {
                height: 50px !important;
            }
            #misiText ul {
                display: block !important;
                text-align: left !important;
                padding-left: 20px !important;
            }
            .wa-float {
                width: 50px !important;
                height: 50px !important;
                bottom: 20px !important;
                right: 20px !important;
                font-size: 25px !important;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" alt="Zetoro Logo" width="40" height="40" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#beranda">BERANDA</a></li>
                <li class="nav-item"><a class="nav-link" href="#layanan">LAYANAN</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">KONTAK</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="beranda" class="hero-section text-center py-5">
    <div class="container">
        <h1 class="display-4 text-success">Selamat Datang, di <br> <span class="fw-bold">Zetoro Janaloka Teknologi</span></h1>
        <p class="lead">Solusi Teknologi & Konsultasi Bisnis</p>
        <a href="https://katalog.inaproc.id/zetoro-janaloka-teknologi" class="btn btn-success btn-lg mt-3">Lihat Toko</a>
    </div>
</section>

<section id="profil-owner" data-aos="fade-up">
    <div class="profil-container">
        <div class="profil-text">
            <h2>Zetoro Janaloka</h2>
            <p>Perusahaan CV. Zetoro Janaloka Teknologi berdiri pada tahun 2021 oleh Bapak Gatot Wahyu dengan penuh perjuangan.
            Perusahaan yang berspesialisasi dalam memberikan solusi dan layanan teknologi untuk memberdayakan bisnis dan individu di berbagai industries.
            Zetoro Janaloka didirikan dengan semangat kolaborasi dan inovasi serta menyediakan solusi visual yang memikat dengan fokus pada kreativitas,
            kualitas, dan keunggulan teknologi serta berspesialisasi juga dalam menyediakan berbagai layanan multimedia yang komprehensif untuk memenuhi kebutuhan klien.</p>
        </div>
        <div class="profil-img">
            <img src="{{ asset('img/owner.png') }}" alt="Foto Owner Zetoro Janaloka">
        </div>
    </div>
</section>

<section id="layanan" class="py-5">
    <div class="container text-center">
        <h2 class="mb-5 fw-bold text-success">Layanan Kami</h2>
        <div class="row g-4">

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="layanan-box shadow">
                    <i class="bi bi-terminal" style="font-size: 3rem; color: #28a745;"></i>
                    <br>
                    <h5 class="fw-semibold">Pengembangan Perangkat Lunak</h5>
                    <p class="text-muted">Kami menawarkan layanan pengembangan perangkat lunak khusus yang
                    dirancang untuk memenuhi kebutuhan dan persyaratan unik klien kami.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="layanan-box shadow">
                <i class="bi bi-building" style="font-size: 3rem; color: #28a745;"></i>
                <br>
                <br>
                <h5 class="fw-semibold">Solusi Infrastruktur IT</h5>
                <p class="text-muted">Solusi infrastruktur TI komprehensif kami mencakup desain dan
                    implementasi jaringan, manajemen server, komputasi awan, keamanan siber, dan banyak lagi.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="layanan-box shadow">
                    <i class="bi bi-hdd-network" style="font-size: 3rem; color: #28a745;"></i>
                    <br>
                    <h5 class="fw-semibold">Layanan Terkelola</h5>
                    <p class="text-muted">Kami menyediakan dukungan TI proaktif dan layanan manajemen untuk
                    memastikan kelancaran operasional infrastruktur teknologi Anda.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="layanan-box shadow">
                    <i class="bi bi-display" style="font-size: 3rem; color: #28a745;"></i>
                    <br>
                    <h5 class="fw-semibold">Solusi Videotron</h5>
                    <p class="text-muted">Kami menawarkan solusi videotron untuk display dalam dan luar ruangan,
                    acara, pameran, dan aplikasi papan reklame digital. Dari konsep hingga instalasi,
                    kami menyediakan layanan menyeluruh, termasuk pembuatan konten, pemilihan perangkat keras,
                    instalasi, dan pemeliharaan untuk memastikan pengalaman visual yang mulus dan memukau.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
                <div class="layanan-box shadow">
                    <i class="bi bi-camera-video" style="font-size: 3rem; color: #28a745;"></i>
                    <br>
                    <h5 class="fw-semibold">Liputan Acara Langsung</h5>
                    <p class="text-muted">Baik itu acara perusahaan, konferensi, konser,
                    atau peluncuran produk, kami menawarkan layanan liputan acara langsung profesional
                    berupa pengaturan multi-kamera, streaming langsung, dan penyuntingan pasca-acara.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="layanan-box shadow">
                    <i class="bi bi-person-gear" style="font-size: 3rem; color: #28a745;"></i>
                    <br>
                    <h5 class="fw-semibold">Konsultasi IT</h5>
                    <p class="text-muted">Memberikan konsultasi untuk membantu perusahaan mengoptimalkan penggunaan teknologi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="visi-misi" class="py-5 bg-light" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="text-success mb-4">Visi & Misi</h2>

        <div class="d-flex justify-content-center gap-3 mb-4 flex-wrap">
            <button class="btn btn-outline-success" onmouseover="showVisi()">Visi</button>
            <button class="btn btn-outline-success" onmouseover="showMisi()">Misi</button>
        </div>

        <div id="visiText" class="toggle-text">
            <p class="lead">Menjadi perusahaan teknologi lokal terpercaya dalam transformasi digital sektor bisnis dan pemerintahan.</p>
        </div>

        <div id="misiText" class="toggle-text" style="display: none;">
            <ul class="list-unstyled lead text-start d-inline-block text-success">
                <li>✔ Memberikan solusi berbasis data dan teknologi.</li>
                <li>✔ Menyediakan layanan konsultasi dengan pendekatan humanis.</li>
                <li>✔ Meningkatkan efisiensi dan kinerja klien melalui inovasi.</li>
            </ul>
        </div>
    </div>
</section>

<div class="container my-5" data-aos="fade-up">
    <h2 class="text-center text-success mb-4">Kenapa Harus Memilih Kami?</h2>
    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card why-card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-stars icon-big"></i>
                    <h5 class="card-title mt-3">Inovasi</h5>
                    <p class="card-text">Kami mengutamakan keamanan data dan proses setiap layanan yang kami berikan.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card why-card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill icon-big"></i>
                    <h5 class="card-title mt-3">Integrasi</h5>
                    <p class="card-text">Kami menjalankan bisnis dengan jujur, transparan, dan
                    integritas, membangun kepercayaan dan membina hubungan jangka panjang dengan klien kami.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card why-card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-lightbulb icon-big"></i>
                    <h5 class="card-title mt-3">Kreativitas</h5>
                    <p class="card-text">Kami bersemangat tentang kreativitas dan inovasi,
                    mendobrak batasan untuk menghadirkan pengalaman multimedia yang unik dan berdampak.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="card why-card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-heart-fill icon-big"></i>
                    <h5 class="card-title mt-3">Kualitas Terbaik</h5>
                    <p class="card-text">Kami berkomitmen untuk memberikan solusi dan layanan berkualitas
                    tertinggi, mematuhi praktik dan standar industri terbaik untuk melampaui harapan klien.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="card why-card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-handshake icon-big"></i>
                    <h5 class="card-title mt-3">Kepuasan Klien</h5>
                    <p class="card-text">Kami mengutamakan kepuasan pelanggan, memberikan layanan
                    yang responsif dan personal untuk memastikan pengalaman yang positif.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="kontak" class="py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-md-5" data-aos="fade-right">
                <h2 class="text-success mb-3">Tertarik Bekerja Sama?</h2>
                <p class="text-muted">Silakan kirim pesan anda melalui form berikut atau klik icon WhatsApp pada layar. Kami akan segera membalas pesan anda secepatnya.</p>
            </div>

            <div class="col-md-7" data-aos="fade-left">
                <div class="card shadow p-4 border-0">
                    <form action="{{ route('kontak.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control rounded" id="nama" placeholder="Nama lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control rounded" id="email" placeholder="Alamat email" required>
                        </div>
                        <div class="mb-3">
                            <label whitespace for="pesan" class="form-label">Pesan</label>
                            <textarea name="pesan" class="form-control rounded" id="pesan" rows="4" placeholder="Tulis pesan Anda" required></textarea>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-success px-4">Kirim</button>
                            <a href="https://wa.me/628224564552" class="btn btn-outline-success px-4">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </form>
                    @if(session('success'))
                    <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session("success") }}',
                    confirmButtonColor: '#28a745',
                    confirmButtonText: 'OK'
                    });
                    </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>


<section id="klien" class="py-5 bg-light" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="text-success mb-4">Klien Kami</h2>
        <div class="klien-slider-wrapper overflow-hidden position-relative">
            <div class="klien-slider d-flex align-items-center justify-content-center">
                @foreach ([
                'sumenep', 'surabaya', 'madiun', 'jasuindo',
                'cubiespot', 'capita', 'lnk', 'bhinneka', 'cubiehome', 'jalantara', 'l1v',
                'sidoarjo', 'smart', 'tigaraksa', 'pamekasan', 'pasuruan', 'jawatimur',
                'pendidikan', 'tuban', 'smart', 'umum',
                ] as $logo)

                <div class="klien-item px-4 py-2">
                    <img src="{{ asset('img/' . $logo . '.png') }}" alt="{{ $logo }}" class="img-fluid" style="height: 80px;">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<a href="https://wa.me/628224564552" class="wa-float" target="_blank" style="text-decoration: none;">
    <i class="fab fa-whatsapp"></i>
</a>

<footer class="bg-light border-top mt-5 py-4" data-aos="fade-up">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-3">
                <h6 class="text-success mb-2">Lokasi Kami</h6>
                <div class="rounded overflow-hidden" style="height: 180px;">
                    <iframe
                    src="https://www.google.com/maps?q=Maspion%20Square%2C%20Surabaya%2C%20Indonesia&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
            </div>

            <div class="col-md-6 d-flex flex-column justify-content-between">
                <div>
                    <h6 class="text-success mb-2">Tentang Kami</h6>
                    <p class="text-muted" style="font-size: 14px;">Zetoro Janaloka adalah mitra digital Anda yang siap membantu kebutuhan sistem informasi, aplikasi, dan layanan berbasis teknologi lainnya. Fokus kami adalah pelayanan terbaik untuk instansi pemerintah dan swasta.</p>
                </div>

                <div>
                    <h6 class="text-success mb-2">Hubungi Kami</h6>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#kontak" class="text-dark text-decoration-none">
                                <i class="bi bi-envelope-fill me-2"></i>Formulir Kontak
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/zetoro.janaloka" target="_blank" class="text-dark text-decoration-none">
                                <i class="bi bi-instagram me-2"></i>@zetoro.janaloka
                            </a>
                        </li>
                    </ul >
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="text-center">
            <small class="text-muted">&copy; 2025 Zetoro Janaloka. All rights reserved.</small>
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", () => {
    let currentSection = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 150;
        if (pageYOffset >= sectionTop) {
            currentSection = section.getAttribute("id");
        }
    });

    navLinks.forEach((link) => {
        link.classList.remove("active-nav");
        if (link.getAttribute("href") === "#" + currentSection) {
            link.classList.add("active-nav");
        }
    });
});
});
</script>

<script>
function showVisi() {
    document.getElementById('visiText').style.display = 'block';
    document.getElementById('misiText').style.display = 'none';
}

function showMisi() {
    document.getElementById('visiText').style.display = 'none';
    document.getElementById('misiText').style.display = 'block';
}
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll(".klien-item");
    let currentIndex = 0;

    function showLogo(index) {
        items.forEach(item => item.classList.remove("active"));
        items[index].classList.add("active");
    }

    function nextLogo() {
        currentIndex = (currentIndex + 1) % items.length;
        showLogo(currentIndex);
    }

    showLogo(currentIndex);
    setInterval(nextLogo, 3000);
});
</script>

<script>
AOS.init({
    duration: 800,
    once: true
});
</script>

</body>
</html>