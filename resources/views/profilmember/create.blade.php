@extends('layouts.admin')

@section('title')
    <title>Tambah member</title>
@endsection

@section('content')
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">member</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <form action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tambah member</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama member</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" required>
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email member</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required>
                                        <px class="text-danger">{{ $errors->first('email') }}</px`>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Phone member</label>
                                        <input type="number" class="form-control" name="phone_number"
                                            value="{{ old('phone_number') }}" required>
                                        <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea name="address" id="address" class="form-control">{{ old('address') }}</textarea>
                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input class="form-control" name="tanggal_lahir" type="date"
                                            value="{{ old('tanggal_lahir') }}" id="example-date-input" required />
                                        <p class="text-danger">{{ $errors->first('tanggal_lahir') }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>No Active
                                            </option>
                                        </select>
                                        <p class="text-danger">{{ $errors->first('status') }}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Link Image</label>
                                        <input type="text" class="form-control" name="image"
                                            value="{{ old('image') }}" required>
                                        <p class="text-danger">{{ $errors->first('image') }}</p>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="image">Poster</label>
                                        <input type="file" class="form-control" name="image"
                                            value="{{ old('image') }}" required>
                                        <p class="text-danger">{{ $errors->first('image') }}</p>
                                    </div> --}}

                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('address');
    </script>
@endsection
