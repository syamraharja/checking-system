<x-app-layout :header="'Welcome'">
    <!-- Hero Section -->
    <section class="financial-gradient text-white py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="mb-4">
                        <i class="bi bi-graph-up-arrow display-1 mb-3 text-warning"></i>
                    </div>
                    <h1 class="display-4 fw-bold mb-4">Catatan Keuangan</h1>
                    <p class="lead fs-5 mb-4 text-white-50">
                        Platform terpercaya untuk mengelola keuangan Anda dengan mudah dan profesional. 
                        Kelola akun, kategori, dan transaksi dalam satu dashboard yang komprehensif.
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center mt-4">
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-light btn-lg px-4 py-3 shadow-sm">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                Masuk ke Akun
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                                    <i class="bi bi-person-plus me-2"></i>
                                    Daftar Sekarang
                                </a>
                            @endif
                        @else
                            <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg px-4 py-3 shadow-sm">
                                <i class="bi bi-speedometer2 me-2"></i>
                                Ke Dashboard
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-financial">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="bi bi-credit-card-2-front display-4 text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Kelola Akun</h5>
                            <p class="card-text text-muted">
                                Atur berbagai akun keuangan Anda dengan mudah. Pantau saldo dan riwayat transaksi dari satu tempat.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-financial">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="bi bi-tags display-4 text-success"></i>
                            </div>
                            <h5 class="card-title fw-bold">Kategori Transaksi</h5>
                            <p class="card-text text-muted">
                                Buat dan kelola kategori transaksi sesuai kebutuhan. Analisis pengeluaran berdasarkan kategori.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-financial">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="bi bi-bar-chart display-4 text-warning"></i>
                            </div>
                            <h5 class="card-title fw-bold">Dashboard Analitik</h5>
                            <p class="card-text text-muted">
                                Lihat ringkasan keuangan, grafik, dan laporan detail untuk memahami pola keuangan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="p-3">
                        <i class="bi bi-shield-check display-5 text-primary mb-3"></i>
                        <h4 class="fw-bold">Aman</h4>
                        <p class="text-muted">Data keuangan Anda terlindungi dengan enkripsi tingkat tinggi</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="p-3">
                        <i class="bi bi-lightning display-5 text-success mb-3"></i>
                        <h4 class="fw-bold">Cepat</h4>
                        <p class="text-muted">Interface yang responsif dan performa optimal untuk pengalaman terbaik</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="p-3">
                        <i class="bi bi-phone display-5 text-warning mb-3"></i>
                        <h4 class="fw-bold">Mobile Friendly</h4>
                        <p class="text-muted">Akses kapan saja dari perangkat mobile dengan desain responsif</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="p-3">
                        <i class="bi bi-graph-up display-5 text-info mb-3"></i>
                        <h4 class="fw-bold">Insights</h4>
                        <p class="text-muted">Dapatkan wawasan mendalam tentang pola pengeluaran dan pemasukan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="card border-0 shadow-financial bg-gradient" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
                        <div class="card-body p-5">
                            <i class="bi bi-rocket-takeoff display-4 text-primary mb-4"></i>
                            <h3 class="fw-bold mb-3">Mulai Kelola Keuangan Anda Hari Ini</h3>
                            <p class="text-muted mb-4">
                                Bergabunglah dengan ribuan pengguna yang telah merasakan kemudahan mengelola keuangan dengan platform kami.
                            </p>
                            @guest
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5 py-3">
                                    <i class="bi bi-arrow-right-circle me-2"></i>
                                    Mulai Gratis Sekarang
                                </a>
                            @else
                                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg px-5 py-3">
                                    <i class="bi bi-speedometer2 me-2"></i>
                                    Lanjutkan ke Dashboard
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>