@extends('layouts.admin')

@section('title')
    <title>List member</title>
@endsection

@section('content')
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">member</li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    List member

                                    <a href="{{ route('member.bulk') }}" class="btn btn-success btn-sm float-right">Mass
                                        Upload</a>
                                    <a href="{{ route('member.create') }}"
                                        class="btn btn-primary btn-sm float-right">Tambah</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                <form action="{{ route('member.index') }}" method="get">
                                    <div class="input-group mb-3 col-md-3 float-right">
                                        <input type="text" class="form-control" name="q" placeholder="Cari..."
                                            value="{{ request()->q }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button">Cari</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Foto</th>
                                                <th>member</th>
                                                <th>Harga</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($member as $row)
                                                <tr>
                                                    <td>
                                                        {{-- <img src="{{ asset(''. env('linkpub') .'storage'.env('linkstore').''.env('linkstore').' /members/' . $row->image) }}"
                                                            alt="{{ $row->name }}" width="100px" height="100px"> --}}
                                                        <img src="https://drive.google.com/uc?export=view&amp;id={{ $row->image }}"
                                                            alt="{{ $row->name }}" width="100px" height="100px">
                                                    </td>
                                                    <td>
                                                        <strong>{{ $row->name }}</strong><br>

                                                        <label>Kategori: <span {{-- class="badge bg-gradient-info">{{ $row->category->name }}</span></label><br> --}} <label>Jumlah
                                                                Pertemuan: <span {{-- class="badge bg-gradient-info">{{ $row->meet }}</span></label> --}} </td>
                                                    <td>Rp {{ number_format($row->phone_number) }}</td>
                                                    <td>
                                                        <span>{{ $row->created_at->format('d-m-Y') }}</span> <br>
                                                        <span>Lahir {{ $row->tanggal_lahir->format('d-m-Y') }}

                                                    </td>

                                                    <td>
                                                        <span>{!! $row->status_label !!}</span>
                                                        {{-- <span>{!! $row->status_member_label !!}</span> --}}
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('member.destroy', $row->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('member.edit', $row->id) }}"
                                                                class="btn btn-warning btn-sm">Edit</a>
                                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="text-center" colspan="5">Tidak ada data</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                {!! $member->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
