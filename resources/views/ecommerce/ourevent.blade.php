@extends('layouts.member')

@section('title')
    <title>Data Kegiatan - Alumni BD</title>
@endsection

{{-- @dd($arsip->data) --}}

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4">Detail Kegiatan</h5>
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 text-center">
                                <img class="w-100 border-radius-lg shadow-lg mx-auto"
                                    src="https://drive.google.com/uc?export=view&id={{ substr($arsip->poster, 32, 33) }}"
                                    alt="chair">

                            </div>
                            <div class="col-lg-5 mx-auto">
                                <h3 class="mt-lg-0 mt-4">{{ $arsip->name }}</h3>
                                <h6 class="mb-0 mt-3">waktu pelaksanaan</h6>
                                <h5>{{ $arsip->event_time->format('d-F-Y') }}</h5>
                                <span class="badge badge-success">In Stock</span>
                                <br>
                                <label class="mt-4">Description</label>
                                <ul>
                                    <li>The most beautiful curves of this swivel stool adds an elegant touch to any
                                        environment</li>
                                    <li>Memory swivel seat returns to original seat position</li>
                                    <li>Comfortable integrated layered chair seat cushion design</li>
                                    <li>Fully assembled! No assembly required</li>
                                </ul>

                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <h5 class="ms-3">Materi Kegiatan</h5>
                                <div class="table table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Judul Materi</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    pertemua ke</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    tanggal pelaksanaan</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Availability</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($arsip->data as $data)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <iframe
                                                                    src="https://drive.google.com/file/d/{{ substr($data->link, 32, 33) }}/preview"
                                                                    width="600" height="480"
                                                                    class="w-75 min-height-100 max-height-100 border-radius-lg shadow"></iframe>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $data->name }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-sm text-secondary mb-0">{{ $data->meet_ke }}</p>
                                                    </td>
                                                    <td>
                                                        {{ $data->meet_time->format('d-M-Y') }}
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                        <div class="progress mx-auto">
                                                            <div class="progress-bar bg-gradient-success" role="progressbar"
                                                                style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm">230019</span>
                                                    </td>
                                                </tr>

                                            @empty
                                            @endforelse

                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-wood.jpg"
                                                                class="avatar avatar-md me-3" alt="table image">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Modern Square</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-secondary mb-0">$59.99</p>
                                                </td>
                                                <td>
                                                    <div class="rating ms-lg-n4">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="progress mx-auto">
                                                        <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-sm">001992</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
