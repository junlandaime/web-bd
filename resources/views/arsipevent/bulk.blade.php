@extends('layouts.admin')

@section('title')
    <title>Mass Upload</title>
@endsection

@section('content')
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Event</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">

                <!-- ARAH ACTIONYA ADALAH KE ROUTING DENGAN NAME event.saveBulk -->
                <form action="{{ route('arsip.saveBulk') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <!-- SETIAP USER HARUS MEMILIH KATEGORI Event TERKAIT -->

                                    <div class="form-group">
                                        <label for="file">File Excel</label>
                                        <input type="file" name="file" class="form-control"
                                            value="{{ old('file') }}" required>
                                        <p class="text-danger">{{ $errors->first('file') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
