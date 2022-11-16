@extends('layouts.admin')

@section('title')
    <title>Edit Event</title>
@endsection

@section('content')
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Event</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <form action="{{ route('event.update', $event->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Event</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Event</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $event->name }}" required>
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="excerpt">Ringkasan Event</label>
                                        <input type="text" class="form-control" name="excerpt"
                                            value="{{ $event->excerpt }}" required>
                                        <p class="text-danger">{{ $errors->first('excerpt') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="description" class="form-control">{{ $event->description }}</textarea>
                                        <p class="text-danger">{{ $errors->first('description') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Link Pendaftaran</label>
                                        <input type="text" class="form-control" name="link"
                                            value="{{ $event->link }}" required>
                                        <p class="text-danger">{{ $errors->first('link') }}</p>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-3">
                                            <label for="published_at">Publikasi Mulai</label>
                                            <input class="form-control" name="published_at" type="date"
                                                value="{{ $event->published_at->format('Y-m-d') }}" id="example-date-input"
                                                required />
                                            <p class="text-danger">{{ $errors->first('published_at') }}</p>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="published_end">Publikasi Selesai</label>
                                            <input class="form-control" name="published_end" type="date"
                                                value="{{ $event->published_end->format('Y-m-d') }}"
                                                id="example-date-input" required />
                                            <p class="text-danger">{{ $errors->first('published_end') }}</p>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="event_start">Kegiatan Mulai</label>
                                            <input class="form-control" name="event_start" type="date"
                                                value="{{ $event->event_start->format('Y-m-d') }}" id="example-date-input"
                                                required />
                                            <p class="text-danger">{{ $errors->first('event_start') }}</p>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="event_end">Kegiatan Selesai</label>
                                            <input class="form-control" name="event_end" type="date"
                                                value="{{ $event->event_end->format('Y-m-d') }}" id="example-date-input"
                                                required />
                                            <p class="text-danger">{{ $errors->first('event_end') }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Stats</label>
                                        <select name="status" class="form-control" required>
                                            <option value="1" {{ $event->status == '1' ? 'selected' : '' }}>Publish
                                            </option>
                                            <option value="0" {{ $event->status == '0' ? 'selected' : '' }}>Draft
                                            </option>
                                        </select>
                                        <p class="text-danger">{{ $errors->first('status') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_event">Status Event</label>
                                        <select name="status_event" class="form-control" required>
                                            <option value="1" {{ $event->status_event == '1' ? 'selected' : '' }}>
                                                Pendaftaran</option>
                                            <option value="0" {{ $event->status_event == '0' ? 'selected' : '' }}>
                                                Coming Soon</option>
                                            <option value="2" {{ $event->status_event == '2' ? 'selected' : '' }}>
                                                Event On Going</option>
                                            <option value="3" {{ $event->status_event == '3' ? 'selected' : '' }}>
                                                Event Selesai</option>
                                        </select>
                                        <p class="text-danger">{{ $errors->first('status_event') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Kategori</label>
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Pilih</option>
                                            @foreach ($category as $row)
                                                <option value="{{ $row->id }}"
                                                    {{ $event->category_id == $row->id ? 'selected' : '' }}>
                                                    {{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('category_id') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Harga</label>
                                        <input type="number" name="price" class="form-control"
                                            value="{{ $event->price }}" required>
                                        <p class="text-danger">{{ $errors->first('price') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="meet">Jumlah Pertemuan</label>
                                        <input type="number" class="form-control" name="meet"
                                            value="{{ $event->meet }}" required>
                                        <p class="text-danger">{{ $errors->first('meet') }}</p>
                                    </div>

                                    <!-- GAMBAR TIDAK LAGI WAJIB, JIKA DIISI MAKA GAMBAR AKAN DIGANTI, JIKA DIBIARKAN KOSONG MAKA GAMBAR TIDAK AKAN DIUPDATE -->
                                    <div class="form-group">
                                        <label for="image">Poster Kegiatan</label>
                                        <br>
                                        <!--  TAMPILKAN GAMBAR SAAT INI -->
                                        <img src="{{ asset('storage' . env('linkstore') . '' . env('linkstore') . ' /events/' . $event->image) }}"
                                            width="100px" height="100px" alt="{{ $event->name }}">
                                        <hr>
                                        <input type="file" name="image" class="form-control">
                                        <p><strong>Biarkan kosong jika tidak ingin mengganti gambar</strong></p>
                                        <p class="text-danger">{{ $errors->first('image') }}</p>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Update</button>
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
        CKEDITOR.replace('description');
    </script>
@endsection
