@extends('layouts.layout')

@section('content')
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('products.title') }}</h2>
            <p>{{ __('products.description') }}</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex justify-content-center">
                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($categories as $cat)
                        <li class="nav-item">
                            <a class="nav-link {{ $cat->cat_id == 1 ? 'active show' : '' }}" data-bs-toggle="tab"
                                data-bs-target="#products-tab-{{ $cat->cat_id }}">
                                <h4>{{ $cat->{'cat_name_' . session('lang')} }}</h4>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                <div class="tab-pane fade active show" id="products-tab-1">
                    @foreach ($products as $product)
                        @if ($product->prod_cat_id == 1)
                            <div class="row g-4 mt-2 mb-2">
                                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="row g-4">
                                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                                            <div id="productCarousel{{ $product->prod_id }}" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button"
                                                        data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                        data-bs-slide-to="0" class="active" aria-current="true"
                                                        aria-label="Slide 1"></button>
                                                    <button type="button"
                                                        data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button"
                                                        data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>

                                                <div class="carousel-inner text-center">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict1) }}"
                                                            class="img-fluid rounded" style="max-width: 90%; height: auto;"
                                                            alt="Produk A">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict2) }}"
                                                            class="img-fluid rounded" style="max-width: 90%; height: auto;"
                                                            alt="Produk B">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict3) }}"
                                                            class="img-fluid rounded" style="max-width: 90%; height: auto;"
                                                            alt="Produk C">
                                                    </div>
                                                </div>

                                                <!-- Tombol navigasi -->
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Sebelumnya</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Berikutnya</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="card-body">
                                                <h3 class="card-title">{{ $product->prod_name }}</h3>
                                                <p class="card-text">{{ $product->{'prod_summary_' . session('lang')} }}</p>
                                                <a href="" class="read-more">Read More <i
                                                        class="bi bi-arrow-right"></i></a><br>
                                                <span class="badge badge-cat">{{ $product->category->{'cat_name_' . session('lang')} }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="tab-pane fade" id="products-tab-2">
                    @foreach ($products as $product)
                        @if ($product->prod_cat_id == 2)
                            <div class="row g-4 mt-2 mb-2">
                                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                                            <div id="productCarousel{{ $product->prod_id }}" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner text-center">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict1) }}"
                                                            class="img-fluid rounded" style="max-width: 90%; height: auto;"
                                                            alt="Produk A">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict2) }}"
                                                            class="img-fluid rounded"
                                                            style="max-width: 90%; height: auto;" alt="Produk B">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict3) }}"
                                                            class="img-fluid rounded"
                                                            style="max-width: 90%; height: auto;" alt="Produk C">
                                                    </div>
                                                </div>

                                                <!-- Tombol navigasi -->
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Sebelumnya</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Berikutnya</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="card-body">
                                                <h3 class="card-title">{{ $product->prod_name }}</h3>
                                                <p class="card-text">{{ $product->prod_summary }}</p>
                                                <a href="" class="read-more">Read More <i
                                                        class="bi bi-arrow-right"></i></a><br>
                                                <span class="badge bg-primary">{{ $product->category->{'cat_name_' . session('lang')} }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="tab-pane fade" id="products-tab-3">
                    @foreach ($products as $product)
                        @if ($product->prod_cat_id == 3)
                            <div class="row g-4 mt-2 mb-2">
                                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                                            <div id="productCarousel{{ $product->prod_id }}" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner text-center">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict1) }}"
                                                            class="img-fluid rounded"
                                                            style="max-width: 90%; height: auto;" alt="Produk A">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict2) }}"
                                                            class="img-fluid rounded"
                                                            style="max-width: 90%; height: auto;" alt="Produk B">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets/img/sample/' . $product->prod_pict3) }}"
                                                            class="img-fluid rounded"
                                                            style="max-width: 90%; height: auto;" alt="Produk C">
                                                    </div>
                                                </div>

                                                <!-- Tombol navigasi -->
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Sebelumnya</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#productCarousel{{ $product->prod_id }}"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Berikutnya</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="card-body">
                                                <h3 class="card-title">{{ $product->prod_name }}</h3>
                                                <p class="card-text">{{ $product->prod_summary }}</p>
                                                <a href="" class="read-more">Read More <i
                                                        class="bi bi-arrow-right"></i></a><br>
                                                <span class="badge bg-primary">{{ $product->category->{'cat_name_' . session('lang')} }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- <div class="row g-4 mt-2 mb-2">
                <div class="col-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <div>
                            <h3>Eosle Commodi</h3>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic
                                non ut nesciunt dolorem.</p>
                            <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-2 mb-2">
                <div class="col-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-easel"></i>
                        </div>
                        <div>
                            <h3>Ledo Markt</h3>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas
                                adipisci eos earum corrupti.</p>
                            <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-2 mb-2">
                <div class="col-lg" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <div>
                            <h3>Asperiores Commodit</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit
                                provident adipisci neque.</p>
                            <a href="service-details.html" class="read-more">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
