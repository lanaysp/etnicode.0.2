@extends('layouts.admin')

@section('title')
 Portfolio
@endsection
    @push('addon-style')

    @endpush
@section('content')
<!-- Section Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard Etnicode</h1>
          </div>
          <div class="section-body">
              <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Portfolio</h4>
                  </div>
                  <div class="card-body">
                    <div class="clearfix"></div>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="name" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Link</label>
                      <input type="text" class="form-control" name="link" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Kategori</label>
                      <select name="kategori" id="kategori" class="form-control">
                          <option value="filter-seo">SEO</option>
                          <option value="filter-android">ANDROID</option>
                          <option value="filter-web">Web</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Poto</label>
                        <input type="file" name="photo" class="form-control" required>
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success btn-login"
                    >
                      Simpan
                    </button>
                  </div>
              </div>
            </div>
         </div>

            </div>
        </div>
        </div>
    </div>
    </div>
</section>
</div>
@endsection


