@extends('layouts.admin')

@section('title')
 Suport
@endsection

@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Suport Etnicode</h1>
          </div>
          <div class="section-body">
              <div class="row mt-4">
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
          <form action="{{ route('suport.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="name" value="{{ $item->name }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Link</label>
                      <input type="text" class="form-control" name="link" value="{{ $item->link }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Foto</label>
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush
