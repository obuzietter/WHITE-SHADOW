<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - About</title>
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
            <h2>About</h2>
            <p>Welcome to White Shadow Photography, where every shutter captures the essence of life's most precious moments. Our passion for photography is driven by the desire to tell stories through stunning visuals that evoke emotion, inspire creativity, and preserve memories for a lifetime.</p>

            <a class="cta-btn" href="contact">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Professional Photography in Nairobi</h2>
            <p class="fst-italic py-3">
              Discover the Art of Timeless Photography with White Shadow Photography.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  {{-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>11th May 2002</span></li> --}}
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.whiteshadow.art</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+254 796 974 327</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Nairobi, KENYA</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li> -->
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>whiteshadow3980@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Works:</strong> <span>Freelance, Corporate, Event, Product</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              At White Shadow Photography, we believe that photography is more than just taking pictures — it's about creating art that speaks to the heart. With years of experience and a keen eye for detail, our team is dedicated to providing you with exceptional service and breathtaking images that reflect your unique personality and style. Whether it's a wedding, a family portrait, or a special event, we are committed to capturing your most cherished moments with elegance and creativity.
            </p>
            <p class="m-0">
              We understand that every client has a distinct vision, and we strive to make that vision a reality. Our approach is personalized and collaborative, ensuring that each session is tailored to your specific needs and preferences. From the initial consultation to the final delivery of your photos, we work closely with you to ensure that every detail is perfect. Using the latest equipment and techniques, we create images that are not only beautiful but also timeless, allowing you to relive your favorite memories for years to come.
            </p>
          </div>
        </div>

      </div>
      
    </section><!-- End About Section -->
    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  {{ $testimonial->message }}
                </p>
                <div class="profile mt-auto">
                  <img src="/storage/{{$testimonial->image}}" class="testimonial-img" alt="">
                  <h3>{{ $testimonial['name'] }}</h3>
                  <h4>{{$testimonial['job_title']}}</h4>
                  <h5>{{ $testimonial['company'] }}</h5>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

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