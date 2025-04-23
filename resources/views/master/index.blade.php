@extends('layout.master.index')
@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

<div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        @foreach ($slides as $index => $slider)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slider->title }}</h5>
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

    <div class="featured container">

    <div class="row gy-4">

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
            <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
        </div><!-- End Featured Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
            <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
        </div><!-- End Featured Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
        </div><!-- End Featured Item -->

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
<section id="services" class="services section">

    <div class="container">

    <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative">
            <div class="icon">
            <i class="bi bi-activity"></i>
            </div>
            <a href="#" class="stretched-link">
            <h3>Nesciunt Mete</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
            <div class="icon">
            <i class="bi bi-broadcast"></i>
            </div>
            <a href="#" class="stretched-link">
            <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
            <div class="icon">
            <i class="bi bi-easel"></i>
            </div>
            <a href="#" class="stretched-link">
            <h3>Ledo Markt</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
            <div class="icon">
            <i class="bi bi-bounding-box-circles"></i>
            </div>
            <a href="#" class="stretched-link">
            <h3>Asperiores Commodit</h3>
            </a>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="#" class="stretched-link"></a>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
            <div class="icon">
            <i class="bi bi-calendar4-week"></i>
            </div>
            <a href="#" class="stretched-link">
            <h3>Velit Doloremque</h3>
            </a>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="#" class="stretched-link"></a>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
            <div class="icon">
            <i class="bi bi-chat-square-text"></i>
            </div>
            <a href="#" class="stretched-link">
            <h3>Dolori Architecto</h3>
            </a>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="#" class="stretched-link"></a>
        </div>
        </div><!-- End Service Item -->

    </div>

    </div>

</section><!-- /Services Section -->
@endsection