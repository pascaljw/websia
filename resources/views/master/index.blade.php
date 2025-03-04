@extends('layout.master.index')
@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
        <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
        <div class="carousel-container">
        <h2>Welcome to <span>Eterna</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="about.html" class="btn-get-started">Get Started</a>
        </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
        <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
        <div class="carousel-container">
        <h2>At vero eos et accusamus</h2>
        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
        <a href="about.html" class="btn-get-started">Get Started</a>
        </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
        <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
        <div class="carousel-container">
        <h2>Temporibus autem quibusdam</h2>
        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
        <a href="about.html" class="btn-get-started">Get Started</a>
        </div>
    </div><!-- End Carousel Item -->

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
        <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 content">
        <h3>Voluptatem dignissimos provident</h3>
        <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
        </p>
        <ul>
            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
        </ul>
        <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
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