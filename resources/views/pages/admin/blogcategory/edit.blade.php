@extends('layouts.admin')

@section('title')
    Dashboard Admin Kategori Blog Update | Tokokoi
@endsection

@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blog Etnicode</h1>
          </div>
          <div class="section-body">
              {{-- content --}}
              Hello words
              <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                  </div>
                  <div class="card-body">
                    <div class="clearfix mb-3"></div>
                                <form action="{{ route('blogcategory.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Kategori</label>
                                                <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success btn-login">
                                                Simpan
                                            </button>
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
