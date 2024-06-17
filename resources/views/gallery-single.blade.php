<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Gallery Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('navbar')
  <!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Gallery Single</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            
              
            
            <a class="cta-btn" href="contact.html">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

     <!-- ======= Gallery Section ======= -->
     <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          @foreach ($images as $image)
              @if (is_array($image->path))
                  @foreach ($image->path as $single_path)
                      <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item h-100">
                              <img src="/storage/{{$single_path}}" class="img-fluid" alt="" style="height:100%; object-fit:cover">
                              <div class="gallery-links d-flex align-items-center justify-content-center">
                                  <a href="{{ asset('storage/' . $single_path) }}" title="Image" class="glightbox preview-link">
                                      <i class="bi bi-arrows-angle-expand"></i>
                                  </a>
                                  <a download="White Shadow Photo" href="{{ asset('storage/' . $single_path) }}" class="details-link" title="White Shadow Photo">
                                      <i class="bi bi-download"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  @endforeach
              @else
                  <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="gallery-item h-100">
                          <img src="{{ asset('storage/' . $image->path) }}" class="img-fluid" alt="" style="height:100%; object-fit:cover">
                          <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="{{ asset('storage/' . $image->path) }}" title="Image" class="glightbox preview-link">
                                  <i class="bi bi-arrows-angle-expand"></i>
                              </a>
                              <a download="White Shadow Photo" href="{{ asset('storage/' . $image->path) }}" class="details-link" title="White Shadow Photo">
                                  <i class="bi bi-download"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              @endif
          @endforeach
      </div>
      
        </div>

      </div>
    </section><!-- End Gallery Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  {{-- <div id="preloader">
    <div class="line"></div>
  </div> --}}

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>