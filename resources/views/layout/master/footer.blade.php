{{-- <div class="footer-newsletter"> --}}
      {{-- <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div> --}}
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('home') }}" class="d-flex align-items-center">
            <span class="sitename">SIA</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl.Samratulangi</p>
            <p>Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda</p>
            <p class="mt-3"><strong>Phone:</strong> <span>(0541) 260421</span></p>
            <p><strong>Email:</strong> <span>politanismd@gmail.com</span></p>
          </div>
        </div>

        {{-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div> --}}

        {{-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div> --}}

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti sosial media kami</h4>
          <p>Untuk mengetahui lebih banyak informasi</p>
          <div class="social-links d-flex">
            @forelse ($medsos as $item)
    <a href="{{ $item->facebook ?? '#' }}">
        <i class="bi bi-facebook"></i>
    </a>
    <a href="{{ $item->instagram ?? '#' }}">
        <i class="bi bi-instagram"></i>
    </a>
@empty
    {{-- Tampilkan ikon default tanpa data --}}
    <a href="#"><i class="bi bi-facebook"></i></a>
    <a href="#"><i class="bi bi-instagram"></i></a>
@endforelse

          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Sistem Informasi Akuntansi</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://www.linkedin.com/in/muhamad-fahri-akbhar-916063279/">Kelompok PBL web SIA 2025 </a>
      </div>
    </div>