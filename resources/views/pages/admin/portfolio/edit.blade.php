@extends('layouts.admin')

@section('title')
  Edit Portfolio
@endsection

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
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('portfolio.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="name" value="{{ $item->name }}" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Kategori </label>
                      <select name="kategori" class="form-control">
                        <option value="{{ $item->id }}" hidden>{{ $item->kategori }}</option>
                        <option value="" disabled>----------------</option>
                          <option value="filter-seo">SEO</option>
                          <option value="filter-android">ANDROID</option>
                          <option value="filter-web">Web</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="photo" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Link</label>
                      <input type="text" class="form-control" name="link" value="{{ $item->link }}"/>
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
          </form>
         </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection

