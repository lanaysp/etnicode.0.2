@extends('layouts.app-blog')

@section('title')
    Blog Detail
@endsection

@section('content')
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Arsha</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/#portfolio">Portfolio</a></li>
          <li><a href="/#team">Team</a></li>
          <li><a href="/#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/blog">Blog</a></li>
          <li>Blog Details</li>
        </ol>
        <h2>Blog Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
          <div class="row">

            <div class="col-12 col-md-12 col-lg-8 justify-content-center">
            <h1 class="judul-blog-detail mb-4 mt-4" data-aos="fade-up" data-aos-delay="200">{{ $blog->name }}</h1>
            <p class="blog-text mt-3 mb-4" data-aos="fade-up" data-aos-delay="300">{{ $blog->blogcategory->name }} . {{ $blog->created_at }}</p>
              {{-- <img
                    src="{{ Storage::url($blog->photo) }}"
                    alt=""
                    class="w-100 mb-4 " data-aos="fade-up" data-aos-delay="400"
                  /> --}}

              {!! $blog->description !!}

            </div>

          </div>
        </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


@endsection
