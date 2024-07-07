<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Services</title>
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
  <link rel="stylesheet" href="/css/booking.css">
  <link rel="stylesheet" href="/css/pricing-table.css">

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
            <h2>Services</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>

            <a class="cta-btn" href="contact">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-brilliance"></i>
              <h4><a href="" class="stretched-link">Wedding Photography</a></h4>
              <p>Capture the magic of your special day with our exquisite wedding photography services. From candid moments to stunning portraits, we ensure every precious memory is beautifully preserved.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-passport"></i>
              <h4><a href="" class="stretched-link">Portrait Photography</a></h4>
              <p> Whether it's individual, family, or corporate portraits, we specialize in creating timeless and captivating images that showcase your personality and style in the best light.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="" class="stretched-link">Event Photography</a></h4>
              <p>From birthdays and anniversaries to corporate events, our expert photographers are dedicated to documenting the essence and excitement of your event, creating memories that last a lifetime.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-currency-exchange"></i>
              <h4><a href="" class="stretched-link">Commercial Photography</a></h4>
              <p>Enhance your brand's visual appeal with our professional commercial photography services. We provide high-quality images for advertising, product showcases, and business promotions that help you stand out in the market.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-header">
          <h2>Prices</h2>
          <p>Check our adorable pricing</p>
        </div>
       
      </div>

       

    </section><!-- End Pricing Section -->

<!-- ======= Booking Section ======= -->
<section id="booking" class="booking">
  <div class="container mt-5">
    <h2 class="text-center">Book a session with us</h2>
    <form>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label for="service">Select Service</label>
            <select class="form-control custom-select" id="service" required>
                <option value="" hidden>Choose a service</option>
                <option value="portrait">Portrait Photography</option>
                <option value="wedding">Wedding Photography</option>
                <option value="event">Event Photography</option>
                <option value="product">Product Photography</option>
                <option value="realestate">Real Estate Photography</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Preferred Date</label>
            <input type="date" class="form-control" id="date" placeholder="What is the date of the occasion?" required>
        </div>
        <div class="form-group">
            <label for="time">Preferred Time</label>
            <input type="time" class="form-control" id="time" placeholder="What is the starting time?" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Enter the location of the shoot" required>
        </div>
        <div class="form-group">
            <label for="details">Additional Details</label>
            <textarea class="form-control" id="details" rows="3" placeholder="Any additional details or requests"></textarea>
        </div>
        
          <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>

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
    

    </section>
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