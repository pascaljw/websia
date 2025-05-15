@extends('layout.master.index')
@section('content')
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="container">
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}" >Home</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li class="current">{{ \Illuminate\Support\Str::limit($berita->judul, 30) }}</li>
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
                <img src="{{ asset('storage/'.$berita->gambar)}}" alt="{{ $berita->judul }}" class="img-fluid rounded">
              </div>

              <h2 class="title">{{$berita->judul}}</h2>
              
              <div class="meta-top">
                <ul>
                   <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="{{ route('blog') }}?kategori={{ $berita->kategori }}" class="category-badge" style="background-color: #f0f8ff; padding: 2px 8px; border-radius: 4px; color: #0066cc; font-size: 0.85em; font-weight: 500;">{{ $berita->kategori }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="{{ $berita->created_at->format('Y-m-d') }}">
                    {{ $berita->created_at->format('M j, Y') }}
                </time></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                {!! nl2br(e($berita->isi)) !!}
              </div><!-- End post content -->

              

              

            </article>
          </div>
        </section><!-- /Blog Details Section -->
        
       
      </div>

      <div class="col-lg-4 sidebar">

        <div class="widgets-container">

          

          <!-- Categories Widget -->
          <div class="categories-widget widget-item">

            <h3 class="widget-title">Categories</h3>
            <ul class="mt-3 category-list">
              @php
                // Get categories from database
                $categories = \App\Models\Berita::select('kategori')
                            ->distinct()
                            ->get()
                            ->pluck('kategori');
              @endphp
              
              @foreach($categories as $category)
                <li>
                  <a href="{{ route('blog') }}?kategori={{ $category }}" class="category-link {{ $berita->kategori }}">
                    <span class="category-name">{{ $category }}</span>
                    <span class="category-arrow"><i class="bi bi-chevron-right"></i></span>
                  </a>
                </li>
              @endforeach
            </ul>

          </div><!--/Categories Widget -->

          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">

            <h3 class="widget-title">Recent Posts</h3>
            
            @php
              // Get recent posts
              $recentPosts = \App\Models\Berita::orderBy('created_at', 'desc')
                            ->where('id', '!=', $berita->id)
                            ->take(5)
                            ->get();
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
          
          
          
          

        </div>

      </div>

    </div>
  </div>

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
      background-color: #0066cc;
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
    
    /* Categories Widget Styling */
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
      color: #444;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .category-link .category-name {
              color: #000000
            }
            .category-link .category-name:hover {
              color: #006A71
            }
    
   
    
    .category-arrow {
      opacity: 0;
      transition: all 0.3s ease;
    }
    
    .category-link:hover .category-arrow, .category-link.active .category-arrow {
      opacity: 1;
    }
    
    /* Recent Posts Widget Styling */
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
      color: #0066cc;
    }
    
    .recent-posts-widget .post-meta {
      font-size: 13px;
      color: #888;
    }
    
    /* Tags Widget Styling */
    .tags-cloud {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }
    
    .tag-item {
      display: inline-block;
      padding: 5px 12px;
      background-color: #f8f9fa;
      color: #555;
      border-radius: 4px;
      font-size: 13px;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .tag-item:hover {
      background-color: #0066cc;
      color: #fff;
      transform: translateY(-2px);
    }
    
    /* Newsletter Widget Styling */
    .newsletter-widget p {
      margin-bottom: 15px;
      font-size: 14px;
      color: #666;
    }
    
    .newsletter-form input {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #f0f0f0;
      border-radius: 5px;
      font-size: 14px;
      margin-bottom: 15px;
      transition: all 0.3s ease;
    }
    
    .newsletter-form input:focus {
      border-color: #0066cc;
      outline: none;
      box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
    }
    
    .newsletter-form button {
      background-color: #0066cc;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 12px 20px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .newsletter-form button:hover {
      background-color: #0052a3;
    }
    
    /* Blog Article Styling */
    .blog-details .article {
      background-color: #fff;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
    }
    
    .blog-details .post-img {
      margin-bottom: 25px;
      border-radius: 8px;
      overflow: hidden;
    }
    
    .blog-details .title {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #333;
    }
    
    .blog-details .meta-top {
      margin-bottom: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid #f0f0f0;
    }
    
    .blog-details .meta-top ul {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .blog-details .meta-top li {
      color: #777;
      font-size: 14px;
    }
    
    .blog-details .meta-top i {
      margin-right: 5px;
      color: #0066cc;
    }
    
    .blog-details .content {
      font-size: 16px;
      line-height: 1.8;
      color: #444;
      margin-bottom: 30px;
    }
    
    .blog-details .content p {
      margin-bottom: 20px;
    }
    
    /* Social Share Buttons */
    .social-share {
      margin-top: 30px;
      padding-top: 30px;
      border-top: 1px solid #f0f0f0;
    }
    
    .social-share h5 {
      font-size: 16px;
      margin-bottom: 15px;
      font-weight: 600;
    }
    
    .share-buttons {
      display: flex;
      gap: 10px;
    }
    
    .share-buttons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      color: #fff;
      transition: all 0.3s ease;
    }
    
    .share-buttons a.facebook {
      background-color: #3b5998;
    }
    
    .share-buttons a.twitter {
      background-color: #1da1f2;
    }
    
    .share-buttons a.linkedin {
      background-color: #0077b5;
    }
    
    .share-buttons a.whatsapp {
      background-color: #25d366;
    }
    
    .share-buttons a:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Author Box */
    .author-box {
      display: flex;
      align-items: center;
      background-color: #f9f9f9;
      border-radius: 8px;
      padding: 20px;
      margin-top: 30px;
    }
    
    .author-avatar {
      flex: 0 0 80px;
      margin-right: 20px;
    }
    
    .author-avatar img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
    }
    
    .author-details h4 {
      font-size: 18px;
      margin-bottom: 10px;
      font-weight: 600;
    }
    
    .author-details p {
      font-size: 14px;
      color: #666;
      margin: 0;
    }
    
    /* Related Posts Section */
    .related-posts {
      margin-top: 30px;
    }
    
    .related-posts .section-title {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 25px;
      position: relative;
      padding-bottom: 10px;
      border-bottom: 2px solid #f0f0f0;
    }
    
    .related-posts .section-title:after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -2px;
      width: 60px;
      height: 2px;
      background-color: #0066cc;
    }
    
    .related-post {
      background-color: #fff;
      border-radius: 8px;
      padding: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
      height: 100%;
      transition: transform 0.3s ease;
    }
    
    .related-post:hover {
      transform: translateY(-5px);
    }
    
    .related-post .post-img {
      border-radius: 5px;
      overflow: hidden;
      margin-bottom: 15px;
    }
    
    .related-post h4 {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 10px;
      line-height: 1.4;
    }
    
    .related-post h4 a {
      color: #333;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .related-post h4 a:hover {
      color: #0066cc;
    }
    
    .related-post time {
      font-size: 13px;
      color: #888;
    }
  </style>
@endsection