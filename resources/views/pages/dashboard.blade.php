@extends('layouts.dashboard')

@section('title')
    Store Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Dashboard</h2>
    <p class="dashboard-subtitle">
        Look what you have made today!
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
            <div class="dashboard-card-title">
                Customer
            </div>
            <div class="dashboard-card-subtitle">

            </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
            <div class="dashboard-card-title">
                Dompet
            </div>
            <div class="dashboard-card-subtitle">

            </div>
            </div>
        </div>
        </div>
        <i class="fas fa-close"></i>
        <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
            <div class="dashboard-card-title">
              Waktu
            </div>
            <div class="dashboard-card-subtitle" >
              <div class="clock"></div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 mt-2">
            <h5 class="mb-3">Status Lelang</h5>

                <a href="" class="card card-list d-block">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                {{-- <img src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}" class="w-50"/> --}}
                                Kode
                            </div>
                            <div class="col-md-2">
                                {{-- {{ $transaction->product->name ?? '' }} --}} Status Lelang
                            </div>
                            <div class="col-md-2">
                                {{-- {{ number_format($transaction->product->price) ?? '' }} --}} Tanggal Lelang
                            </div>
                            <div class="col-md-2">
                                Nama Barang
                            </div>

                            <div class="col-md-2">
                                {{-- {{ $transaction->created_at ?? '' }} --}}
                            </div>
                            <div class="col-md-1 d-none d-md-block">
                                <img src="/images/dashboard-arrow-right.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </a>

        </div>
    </div>
    </div>
</div>
</div>
@endsection

@push('addon-script')
<script>
    function clock() {// We create a new Date object and assign it to a variable called "time".
        var time = new Date(),

            // Access the "getHours" method on the Date object with the dot accessor.
            hours = time.getHours(),

            // Access the "getMinutes" method with the dot accessor.
            minutes = time.getMinutes(),


            seconds = time.getSeconds();

        document.querySelectorAll('.clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);

    function harold(standIn) {
        if (standIn < 10) {
        standIn = '0' + standIn
        }
        return standIn;
    }
}
    setInterval(clock, 1000);
</script>
@endpush
