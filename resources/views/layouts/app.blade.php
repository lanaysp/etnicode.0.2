 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

<title>@yield('title')</title>

    {{-- style --}}
    @stack('perpend-style')
    @include('includes.style')
    @stack('addon-style')
    <link rel="stylesheet" href="/vendor/carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/carousel/assets/owl.theme.default.min.css">
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
      <div id='ignielToTop'></div>
{{-- navbar --}}
@include('includes.navbar')
 {{-- @if(Auth::check() && !Auth::user()->email_verified_at)
    <div class="page-content page-home">
      <section>
        <div class="alert alert-danger mb-n1 text-center" role="alert">
          Anda belum verifikasi email,

          <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
          @csrf
              <button type="submit" class="text-danger btn btn-link p-0 m-0 align-baseline">{{ __('Verifikasi ulang') }}</button>.
          </form>

        </div>
      </section>
    </div>
    @endif --}}

     <div class="container mt-3 mb-3">
      <div class="row justify-content-end">
        <div class="col-md-6">
          @if (session('resent'))
            <div class="alert alert-success" role="alert">
              {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
          @endif
        </div>
      </div>
    </div>

{{-- page content --}}
@yield('content')

{{-- footer --}}
@include('includes.footer')

{{-- script --}}
@stack('perpend-script')
@include('includes.script')
@stack('addon-script')


    </body>
</html>
