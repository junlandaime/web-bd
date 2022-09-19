@extends('layouts.ecommerce')

@section('title')
    <title>Member Bidang Dakwah</title>
@endsection

@section('content')
    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid" style="background: url({{ asset('priba/img/img14.jpg') }});">
        <div class="container">
            <h1 class="display-4">Selamat Datang di <br><span>Bidang Dakwah</span> <br><span>Masjid Salman ITB</span> </h1>
            <h5>Bidang pengelola kegiatan dakwah dan pelayanan ibadah jamaah <br> yang diselenggarakan oleh YPM Salman ITB
            </h5>
            {{-- <a href="#" class="btn btn-info btn-lg tombol">View Our Work</a> --}}
        </div>
    </div>
    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

        <!-- info panel -->
        <div class="row justify-content-center">
            <div class="col-6 info-panel">

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form</h3>
                    </div>

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form class="form-horizontal" action="{{ route('front.member_check') }}" method="post"
                        novalidate="novalidate">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email"
                                        name="email">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Check</button>
                        </div>

                    </form>
                </div>



            </div>
        </div>
    </div>
    <!-- akhir info panel -->

    </div>
    <!-- akhir container -->
@endsection
