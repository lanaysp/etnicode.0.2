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
          <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Judul Blog</label>
                      <input type="text" class="form-control" name="name" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori Blog</label>
                      <select name="blogcategories_id" class="form-control">
                        @foreach ($blogcategories as $blogcategories)
                          <option value="{{ $blogcategories->id }}">{{ $blogcategories->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Thumbnai</label>
                        <input type="file" name="photo" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Penulis Blog</label>
                      <input type="text" class="form-control" name="users_id" value="{{ Auth::user()->id }}" hidden/>
                      <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="description" id="description"></textarea>
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
