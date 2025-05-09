@extends('layout.master.index')
@section('content')
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="container">
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}" >Home</a></li>
          <li class="current">Blog Details</li>
        </ol>
      </nav>
      <h1>Blog Details</h1>
    </div>
  </div><!-- End Page Title -->

  <div class="container">
    <div class="row">

      <div class="col-lg-8">

        <!-- Blog Details Section -->
        <section id="blog-details" class="blog-details section">
          <div class="container">

            <article class="article">

              <div class="post-img">
                <img src="{{ asset('storage/'.$berita->gambar)}}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{$berita->judul}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="{{ $berita->created_at->format('Y-m-d') }}">
                    {{ $berita->created_at->format('M j, Y') }}
                </time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  {{$berita->isi}}
                </p>

                
                

                

              </div><!-- End post content -->
            </article>
          </div>
        </section><!-- /Blog Details Section -->
      </div>
    </div>
  </div>
  @endsection