@extends('layouts.admin')

@section('title')
  Dashboard Admin Blog Baru | Tokokoi
@endsection
    @push('addon-style')

    @endpush
@section('content')
<!-- Section Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blog Etnicode</h1>
          </div>
          <div class="section-body">
              <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Blog</h4>
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
          <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
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
                      <label>Jabatan</label>
                      <input type="text" class="form-control" name="jabatan" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Whatsapp</label>
                      <input type="text" class="form-control" name="wa" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Facebook</label>
                      <input type="text" class="form-control" name="fb" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Instagram</label>
                      <input type="text" class="form-control" name="ig" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Github</label>
                      <input type="text" class="form-control" name="git" required />
                    </div>
                  </div>
                   <div class="col-md-12">
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

@push('addon-script')
 <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endpush
