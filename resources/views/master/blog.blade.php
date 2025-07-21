@extends('layout.master.index')
@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="container">
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Blog</li>
      </ol>
    </nav>
    <h1>Blog</h1>

    @if(request('kategori'))
      <div class="alert alert-info mt-3">
        Menampilkan kategori: <strong>{{ request('kategori') }}</strong>
        <a href="{{ route('blog') }}" class="btn btn-sm btn-outline-secondary ms-2">Reset</a>
      </div>
    @endif

  </div>
</div><!-- End Page Title -->

<div class="container">
  <div class="row">
    <div class="col-lg-8">

      <!-- Blog Posts Section -->
      <section id="blog-posts" class="blog-posts section">
        <div class="container">
          <div class="row gy-4">
            @foreach ($berita as $item)
            <div class="col-lg-12">
              <article>
                <div class="post-img">
                  <img src="{{ asset('storage/'.$item->gambar)}}" alt="" class="img-fluid">
                </div>

                <h2 class="title">
                  <a href="{{ route('blog.show', $item->id) }}">{{$item->judul}}</a>
                </h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-folder"></i>
                      <a href="{{ route('blog') }}?kategori={{ $item->kategori }}" class="category-badge" style="background-color: #f0f8ff; padding: 2px 8px; border-radius: 4px; color: #0066cc; font-size: 0.85em; font-weight: 500;">
                        {{ $item->kategori }}
                      </a>
                    </li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-clock"></i>
                      <a href="#">
                        <time datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('M j, Y') }}</time>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="content">
                  <p>{{ \Illuminate\Support\Str::limit($item->isi, 100, '...') }}</p>
                  <div class="read-more">
                    <a href="{{ route('blog.show', $item->id)}}">Read More</a>
                  </div>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </section>

      <!-- Blog Pagination Section -->
      <section id="blog-pagination" class="blog-pagination section">
        <div class="container">
          <div class="d-flex justify-content-center">
            <ul class="pagination">
              @if ($berita->onFirstPage())
              <li class="page-item disabled"><span class="page-link"><i class="bi bi-chevron-left"></i></span></li>
              @else
              <li class="page-item">
                <a class="page-link" href="{{ $berita->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a>
              </li>
              @endif

              @for ($i = 1; $i <= $berita->lastPage(); $i++)
              <li class="page-item {{ $berita->currentPage() == $i ? 'active' : '' }}">
                <a class="page-link" href="{{ $berita->url($i) }}">{{ $i }}</a>
              </li>
              @endfor

              @if ($berita->hasMorePages())
              <li class="page-item">
                <a class="page-link" href="{{ $berita->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a>
              </li>
              @else
              <li class="page-item disabled"><span class="page-link"><i class="bi bi-chevron-right"></i></span></li>
              @endif
            </ul>
          </div>
        </div>
      </section>

    </div>

    <!-- SIDEBAR -->
    <div class="col-lg-4 sidebar">
      <div class="widgets-container">

        <!-- Categories Widget -->
        <div class="categories-widget widget-item">
          <h3 class="widget-title">Categories</h3>
          <ul class="mt-3 category-list">
            @php
              $categories = collect($berita->items())->pluck('kategori')->unique();
            @endphp
            @foreach($categories as $category)
              <li class="{{ request('kategori') === $category ? 'active' : '' }}">
                <a href="{{ route('blog') }}?kategori={{ $category }}" class="category-link">
                  <span class="category-name">{{ $category }}</span>
                  <span class="category-arrow"><i class="bi bi-chevron-right"></i></span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>

        <!-- Recent Posts Widget -->
        <div class="recent-posts-widget widget-item">
          <h3 class="widget-title">Recent Posts</h3>
          @php
            $recentPosts = collect($berita->items())->take(5);
          @endphp
          @foreach($recentPosts as $post)
            <div class="post-item">
              <div class="post-image">
                <img src="{{ asset('storage/'.$post->gambar) }}" alt="{{ $post->judul }}" class="img-fluid rounded">
              </div>
              <div class="post-content">
                <h4><a href="{{ route('blog.show', $post->id) }}">{{ \Illuminate\Support\Str::limit($post->judul, 40) }}</a></h4>
                <div class="post-meta">
                  <i class="bi bi-calendar me-1"></i>
                  <time datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('M j, Y') }}</time>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Highlight Active Category Style -->
<style>
  .category-list li.active .category-link {
    background-color: #004b4f !important;
  }

  .category-list li.active .category-name {
    color: #ffffff !important;
    font-weight: bold;
  }
</style>

@endsection
