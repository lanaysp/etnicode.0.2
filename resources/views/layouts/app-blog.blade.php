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
