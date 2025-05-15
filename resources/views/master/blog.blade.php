@extends('layout.master.index')
@section('content')
<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container">
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}" >Home</a></li>
          <li class="current">Blog</li>
        </ol>
      </nav>
      <h1>Blog</h1>
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
                    <a href="blog-details.html">{{$item->judul}}</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="#" class="category-badge" style="background-color: #f0f8ff; padding: 2px 8px; border-radius: 4px; color: #0066cc; font-size: 0.85em; font-weight: 500;">{{ $item->kategori }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="{{ $item->created_at->format('Y-m-d') }}">
                        {{ $item->created_at->format('M j, Y') }}
                    </time></a></li>
                      {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> --}}
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      {{ \Illuminate\Support\Str::limit($item->isi, 100, '...') }}

                    </p>

                    <div class="read-more">
                      <a href="{{ route('blog.show', $item->id)}}">Read More</a>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->
              @endforeach

            </div><!-- End blog posts list -->

          </div>

        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">
          <div class="container">
            <div class="d-flex justify-content-center">
              <ul class="pagination">

                {{-- Tombol sebelumnya --}}
                @if ($berita->onFirstPage())
                    <li class="page-item disabled"><span class="page-link"><i class="bi bi-chevron-left"></i></span></li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $berita->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a>
                    </li>
                @endif

                {{-- Nomor halaman --}}
                @for ($i = 1; $i <= $berita->lastPage(); $i++)
                    <li class="page-item {{ $berita->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $berita->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                {{-- Tombol selanjutnya --}}
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

      <div class="col-lg-4 sidebar">

        <div class="widgets-container">

          <!-- Search Widget -->
          
           <!-- Categories Widget -->
          <style>
            /* General Widget Styling */
            .sidebar .widgets-container {
              margin-top: 30px;
            }
            
            .widget-item {
              background-color: #fff;
              border-radius: 8px;
              padding: 25px;
              margin-bottom: 30px;
              box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            }
            
            .widget-title {
              font-size: 18px;
              font-weight: 600;
              margin-bottom: 20px;
              padding-bottom: 10px;
              border-bottom: 2px solid #f0f0f0;
              position: relative;
            }
            
            .widget-title:after {
              content: '';
              position: absolute;
              left: 0;
              bottom: -2px;
              width: 40px;
              height: 2px;
              background-color: #006A71;
            }
            
            /* Search Widget Styling */
            .search-widget form {
              position: relative;
            }
            
            .search-widget input {
              width: 100%;
              padding: 12px 50px 12px 15px;
              border: 1px solid #f0f0f0;
              border-radius: 5px;
              font-size: 14px;
              transition: all 0.3s ease;
            }
            
            .search-widget input:focus {
              border-color: #0066cc;
              outline: none;
              box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
            }
            
            .search-widget button {
              position: absolute;
              right: 0;
              top: 0;
              height: 100%;
              width: 45px;
              background-color: #0066cc;
              border: none;
              border-top-right-radius: 5px;
              border-bottom-right-radius: 5px;
              color: #fff;
              cursor: pointer;
              transition: background-color 0.3s ease;
            }
            
            .search-widget button:hover {
              background-color: #0052a3;
            }
          </style>

          <!-- Categories Widget -->
          <div class="categories-widget widget-item">

            <h3 class="widget-title">Categories</h3>
            <ul class="mt-3 category-list">
              @php
                // Get unique categories from the $berita collection
                $categories = collect($berita->items())->pluck('kategori')->unique();
              @endphp
              
              @foreach($categories as $category)
                <li>
                  <a href="{{ route('blog') }}?kategori={{ $category }}" class="category-link">
                    <span class="category-name">{{ $category }}</span>
                    <span class="category-arrow"><i class="bi bi-chevron-right"></i></span>
                  </a>
                </li>
              @endforeach
            </ul>

          </div><!--/Categories Widget -->

          <style>
            .category-list {
              list-style-type: none;
              padding: 0;
            }
            
            .category-list li {
              border-bottom: 1px solid #f0f0f0;
              transition: all 0.3s ease;
            }
            
            .category-list li:last-child {
              border-bottom: none;
            }
            
            .category-link {
              display: flex;
              justify-content: space-between;
              align-items: center;
              padding: 10px 5px;
              background-color: #006A71
              color: #fff;
              text-decoration: none;
              transition: all 0.3s ease;
            }

            .category-link .category-name {
              color: #000000
            }
            .category-link .category-name:hover {
              color: #006A71
            }
            
            .category-link:hover {
              
              padding-left: 10px;
              color: #ccd2d7;
            }
            
            .category-arrow {
              opacity: 0;
              transition: all 0.3s ease;
            }

            
            
            .category-link:hover .category-arrow {
              opacity: 1;
            }
          </style>

          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">

            <h3 class="widget-title">Recent Posts</h3>
            
            @php
              // Use the existing $berita collection
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
              </div><!-- End recent post item-->
            @endforeach

          </div><!--/Recent Posts Widget -->
          
          <style>
            .recent-posts-widget .post-item {
              display: flex;
              margin-bottom: 20px;
              padding-bottom: 20px;
              border-bottom: 1px solid #f0f0f0;
            }
            
            .recent-posts-widget .post-item:last-child {
              margin-bottom: 0;
              padding-bottom: 0;
              border-bottom: none;
            }
            
            .recent-posts-widget .post-image {
              flex: 0 0 80px;
              margin-right: 15px;
              border-radius: 5px;
              overflow: hidden;
            }
            
            .recent-posts-widget .post-image img {
              object-fit: cover;
              height: 60px;
              width: 80px;
              transition: transform 0.3s ease;
            }
            
            .recent-posts-widget .post-item:hover img {
              transform: scale(1.05);
            }
            
            .recent-posts-widget .post-content {
              flex: 1;
            }
            
            .recent-posts-widget h4 {
              font-size: 15px;
              margin-bottom: 5px;
              font-weight: 600;
              line-height: 1.4;
            }
            
            .recent-posts-widget h4 a {
              color: #333;
              text-decoration: none;
              transition: color 0.3s ease;
            }
            
            .recent-posts-widget h4 a:hover {
              color: #006A71;
            }
            
            .recent-posts-widget .post-meta {
              font-size: 13px;
              color: #888;
            }
          </style>

          </div><!--/Recent Posts Widget -->

          

        </div>

      </div>

    </div>
  </div>
@endsection