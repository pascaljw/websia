@extends('layout.master.index')
@section('content')
<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container">
    <nav class="breadcrumbs">
        <ol>
        <li><a href="{{ route('home') }}" >Beranda</a></li>
        <li class="current">Galeri</li>
        </ol>
    </nav>
    <h1>Galeri</h1>
    </div>
</div><!-- End Page Title -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">Semua</li>
        {{-- <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-product">Product</li>
        <li data-filter=".filter-branding">Branding</li>
        <li data-filter=".filter-books">Books</li> --}}
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($galeris as $galeri)
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <div class="container" style="position: relative; height: 300px; ">
                            <img src="{{ asset('storage/' . $galeri->gambar) }}" class="img-fluid" alt="{{ $galeri->judul }}">
                        </div>
                        <div class="portfolio-info">
                            <h4>{{ $galeri->judul }}</h4>
                            <p>{{ $galeri->gambar }}</p>
                            <a href="{{ asset('storage/' . $galeri->gambar) }}" title="{{ $galeri->judul }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            {{-- </a>
                            <a href="{{ route('admin.galeri.d', $galeri->id) }}" title="More Details" class="details-link">
                                <i class="bi bi-link-45deg"></i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        {{-- <!-- End Portfolio Item --> --}}

        </div><!-- End Portfolio Container -->

    </div>

    </div>

</section><!-- /Portfolio Section -->
@endsection