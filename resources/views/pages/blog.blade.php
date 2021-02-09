@extends('layouts.app-blog')

@section('title')
    Blog
@endsection

@section('content')
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo mr-auto"><a href="index.html">Arsha</a></h1> --}}
       <a href="/" class="logo mr-auto"><img src="/images/Etnicode.png" alt="" style="width: 100px"></a>
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
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Artikel</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="card-deck">
              @forelse ($blog as $blog)
            <div class="card">
                <img class="card-img-top" src="{{ Storage::url($blog->photo) }}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{ $blog->name }}</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    <a href="{{ route('detail-blog', $blog->slug) }}">Read More</a>
                </p>
                <p class="card-text"><small class="text-muted">{{ $blog->created_at }}</small></p>
            </div>
        </div>
            @empty

       @endforelse
            </div>
        </div>
    </section>

  </main><!-- End #main -->


@endsection
