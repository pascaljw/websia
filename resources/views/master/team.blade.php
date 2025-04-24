@extends('layout.master.index')
@section('content')
<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container">
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}" >Beranda</a></li>
          <li class="current">Data Dosen</li>
        </ol>
      </nav>
      <h1>Data Dosen</h1>
    </div>
  </div><!-- End Page Title -->

  <!-- Team Section -->
  <section id="team" class="team section">
  <div class="container">
    <div class="row gy-4">
      @foreach ($dosens as $dosen)
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member d-flex align-items-start">
            <div class="pic">
              <img src="{{ asset('storage/' . $dosen->foto) }}" class="img-fluid" alt="{{ $dosen->nama }}">
            </div>
            <div class="member-info">
              <h4>{{ $dosen->nama }}</h4>
              <span>{{ $dosen->jabatan }}</span>
              <p>Dosen di Politeknik Pertanian Negeri Samarinda</p>
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- /Team Section -->
@endsection