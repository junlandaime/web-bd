@extends('layouts.member')

@section('title')
    <title>Alumni BD - Dashboard</title>
@endsection

{{-- @dd($member->profil) --}}

@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url({{ asset('' . env('linkpub') . 'priba/img/image17.png') }}); background-position-y: 50%;">
            <span class="mask bg-gradient-secondary opacity-1"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="https://drive.google.com/uc?export=view&id={{ substr($profil[0]->foto, 33) }}"
                            alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $profil[0]->name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            CEO / Co-Founder
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            {{-- @if (session('error'))
                                <div class="alert alert-danger text-white">{{ session('error') }}</div>
                            @endif --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">{{ $profil[0]->name }}</h5>
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 border-radius-lg shadow-lg mt-3"
                                    src="https://drive.google.com/uc?export=view&id={{ substr($profil[0]->foto, 33) }}"
                                    alt="product_image">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Profile Information</h5>
                        <div class="row">
                            <div class="col-12 col-sm-3">
                                <label>Email</label>
                                <p class="text-sm">{{ $profil[0]->email }}</p>
                            </div>
                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                <label>Tanggal Lahir</label>
                                <p class="text-sm">{{ $profil[0]->tanggal_lahir->format('l, d-M-Y') }}</p>
                            </div>
                            {{-- <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                <label>NIK</label>
                                <p class="text-sm">{{ $profil[0]->nik }}</p>
                            </div> --}}
                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                <label>Pendidikan Terakhir</label>
                                <p class="text-sm">{{ $profil[0]->education }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label class="mt-4">Gender</label>
                                <p>{!! $profil[0]->gender_label !!}</p>
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Status</label>
                                <p>{!! $profil[0]->marriage_label !!}</p>
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Nomor Whatsapp</label>
                                <p class="text-sm">{{ $profil[0]->wa_number }}</p>
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Suku</label>
                                <p><span class="badge bg-gradient-primary">{{ $profil[0]->suku }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="mt-2">Alamat</label>
                                <p class="form-text text-muted text-xs ms-1 d-inline">
                                    (domisili)
                                </p>
                                <div id="edit-deschiption-edit" class="h-50">
                                    {{ $profil[0]->domisili }}
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <label class="mt-n2">Alamat</label>
                                <p class="form-text text-muted text-xs ms-1 d-inline">
                                    (tempat tinggal)
                                </p>
                                <div id="edit-deschiption-edit" class="h-50">
                                    {{ $profil[0]->tinggal }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Socials</h5>
                        <label>Shoppify Handle</label>
                        <input class="form-control" type="text" value="@soft" />
                        <label class="mt-4">Facebook Account</label>
                        <input class="form-control" type="text" value="https://" />
                        <label class="mt-4">Instagram Account</label>
                        <input class="form-control" type="text" value="https://" />
                    </div>
                </div>
            </div>
            <div class="col-sm-8 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="font-weight-bolder">Pricing</h5>
                            <div class="col-3">
                                <label>Price</label>
                                <input class="form-control" type="number" value="99.00" />
                            </div>
                            <div class="col-4">
                                <label>Currency</label>
                                <select class="form-control" name="choices-sizes" id="choices-currency-edit">
                                    <option value="Choice 1" selected="">USD</option>
                                    <option value="Choice 2">EUR</option>
                                    <option value="Choice 3">GBP</option>
                                    <option value="Choice 4">CNY</option>
                                    <option value="Choice 5">INR</option>
                                    <option value="Choice 6">BTC</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <label>SKU</label>
                                <input class="form-control" type="text" value="71283476591" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="mt-4">Tags</label>
                                <select class="form-control" name="choices-tags" id="choices-tags-edit" multiple>
                                    <option value="Choice 1" selected>In Stock</option>
                                    <option value="Choice 2">Out of Stock</option>
                                    <option value="Choice 3">Sale</option>
                                    <option value="Choice 4">Black Friday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-1">Kegiatan Bidang Dakwah</h6>
                        <p class="text-sm">Kegiatan yang pernah Anda Ikuti di Bidang Dakwah Masjid Salman ITB</p>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            @forelse ($profil as $i => $item)
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://drive.google.com/uc?export=view&id={{ substr($item->arsip->poster, 32, 33) }}"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>

                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <p class="text-gradient text-dark mb-2 text-sm">Kegiatan
                                                #{{ $i + 1 }}</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    {{ $item->arsip->name }}
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                {{ $item->arsip->event_time->format('l, d-M-Y') }}
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="dashboard/event/{{ $item->arsip->id }}"><button type="button"
                                                        class="btn btn-outline-primary btn-sm mb-0">Lihat
                                                        Materi</button></a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @empty
                            @endforelse


                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card h-100 card-plain border">
                                    <div class="card-body d-flex flex-column justify-content-center text-center">
                                        <a href="{{ route('front.event') }}" target="_blank">
                                            <i class="fa fa-plus text-secondary mb-3"></i>
                                            <h5 class=" text-secondary"> Ikuti Kegiatan Lainnya </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
