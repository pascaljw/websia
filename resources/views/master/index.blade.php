@extends('layout.master.index')
@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        @foreach ($slides as $index => $slider)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" class="d-block w-100">
                <div class="carousel-container">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                    </div>
                </div>
        </div>
        @endforeach
    </div>

 
    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    </div> 

    <div class="container my-5">
        <h4 class="text-center mb-4 fw-bold">Berita Terbaru</h4>
        <div class="d-flex justify-content-center overflow-auto gap-3 pb-3" style="scroll-snap-type: x mandatory;">
            @foreach($beritas as $berita)
                <a href="{{ route('blog.show', $berita->id) }}" 
                   class="flex-shrink-0 text-decoration-none text-dark" 
                   style="width: 250px; scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" 
                             class="position-relative card-img-top" 
                             alt="{{ $berita->judul }}" 
                             style="height: 160px; object-fit: cover; border-radius: 10px 10px 0 0;">
                        <div class="card-body text-center">
                            <h6 class="card-title text-truncate">{{ $berita->judul }}</h6>
                            <div class="btn btn-success rounded-pill px-4 mt-2">Lihat</div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="section about">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets/img/direktur_politani.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 order-2 order-lg-1 content">
                <h3>Sambutan Direktor Politeknik Pertanian Negeri Samarinda</h3>
                <p class="fst-italic">
                    “Politeknik Pertanian Negeri Samarinda (Politani) berdiri sejak 06 Februari 1989.
                    Pada mulanya bernama Politeknik Pertanian Universitas Mulawarman. Berdasarkan SK.
                    Menpan No. B-703/I/1995 tanggal 30 Juni 1995,
                    maka secara resmi telah mandiri menjadi lembaga pendidikan vokasi di Kalimantan Timur.”
                </p>
                <ul>
                    <li><span>Hamka, S.TP.,M.Sc., MP</span></li>
                    <!-- <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li> -->
                </ul>
                <p>
                    Direktur
                </p>
            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Services Section -->
<section id="portfolio" class="portfolio section">

    <div class="container">

          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">Galeri terbaru</li>
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
                            
                            <a href="{{ asset('storage/' . $galeri->gambar) }}" title="{{ $galeri->judul }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- End Portfolio Container -->

    </div>

    </div>

</section><!-- /Services Section -->
@endsection