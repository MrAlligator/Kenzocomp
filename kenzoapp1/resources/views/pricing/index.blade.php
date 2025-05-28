@extends('layouts.layout')

@section('content')
    <section id="pricing" class="pricing section" style="margin-top: 5%">
        <div class="container section-title" data-aos="fade-up">
            <h2>Pricing</h2>
            <p>Pilih paket <b style="">Pengembangan</b> dari software house kami dan nikmati semua fitur terbaik untuk pengembangan
                aplikasi yang powerful, performa maksimal tanpa batas, serta dukungan teknis live 24/7. Solusi custom,
                integrasi lengkap, dan pemeliharaan penuh untuk memastikan bisnis Anda terus berkembang tanpa hambatan!</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center">
                <!-- Basic Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3>Basic Plan</h3>
                        <h4>Recommended For:</h4>
                        <div class="recommended-icons d-flex flex-wrap gap-4 mb-3">
                            <div class="icon-box text-center">
                                <i class="bi bi-globe2 fs-2 text-primary"></i>
                                <p class="small mt-1">Landing Page</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-person-circle fs-2 text-primary"></i>
                                <p class="small mt-1">Profil Personal</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-megaphone fs-2 text-primary"></i>
                                <p class="small mt-1">Campaign Promo</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-journal-text fs-2 text-primary"></i>
                                <p class="small mt-1">Blog Sederhana</p>
                            </div>
                        </div>
                        <p class="description">Solusi cepat dan terjangkau untuk memulai digitalisasi bisnismu.
                            Cocok untuk landing page atau profil perusahaan sederhana.</p>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1x Konsultasi Awal
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Desain UI sederhana (template)
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Pengembangan fitur inti
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1x revisi
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2 Minggu Maintenance
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Standard Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card {{-- popular --}}">
                        {{-- <div class="popular-badge">Most Popular</div> --}}
                        <h3>Standard Plan</h3>
                        <h4>Recommended For:</h4>
                        <div class="recommended-icons d-flex flex-wrap gap-3 mb-3">
                            <div class="icon-box text-center">
                                <i class="bi bi-person-vcard fs-2 text-primary"></i>
                                <p class="small mt-1">Company Profile</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-cart4 fs-2 text-primary"></i>
                                <p class="small mt-1">E-Commerce Basic</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-journal-code fs-2 text-primary"></i>
                                <p class="small mt-1">Internal Tools</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-phone fs-2 text-primary"></i>
                                <p class="small mt-1">Mobile-Friendly App</p>
                            </div>
                        </div>
                        <p class="description">Paket lengkap untuk kebutuhan bisnis skala kecil hingga menengah.
                            Ideal untuk aplikasi internal atau website dengan fitur interaktif.</p>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                2x konsultasi teknis
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Desain UI/UX kustom dasar
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Pengembangan fitur tambahan
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                3x revisi
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                1 Bulan Maintenance
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Hosting & domain 1 tahun
                            </li>
                        </ul>

                        <a href="#" class="btn btn-light">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Premium Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h3>Premium Plan</h3>
                        <h4>Recommended For:</h4>
                        <div class="recommended-icons d-flex flex-wrap gap-3 mb-3">
                            <div class="icon-box text-center">
                                <i class="bi bi-building-gear fs-2 text-primary"></i>
                                <p class="small mt-1">ERP System</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-diagram-3-fill fs-2 text-primary"></i>
                                <p class="small mt-1">Custom CRM</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-hdd-network-fill fs-2 text-primary"></i>
                                <p class="small mt-1">API Integration</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-globe-central-south-asia fs-2 text-primary"></i>
                                <p class="small mt-1">Multi-user App</p>
                            </div>
                            <div class="icon-box text-center">
                                <i class="bi bi-shield-lock-fill fs-2 text-primary"></i>
                                <p class="small mt-1">Secure System</p>
                            </div>
                        </div>
                        <p class="description">Layanan premium dengan fleksibilitas penuh dan dukungan maksimal.
                            Cocok untuk sistem kompleks dan proyek jangka panjang.</p>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Konsultasi teknis tak terbatas
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Desain UI/UX full kustom + wireframe
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Fitur lengkap + integrasi API
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Revisi tak terbatas
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Maintenance 3 bulan
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Dukungan teknis prioritas
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
