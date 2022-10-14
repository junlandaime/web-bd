@extends('layouts.ecommerce')

@section('title')
    <title>Layanan Bidang Dakwah</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection

@section('content')
    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid" style="background: url({{ asset('' . env('linkpub') . 'priba/img/img55.jpg') }});">
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
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">

                        <h1 class="" style="text-align: center">Layanan Kami</h1>
                        <div class="row justify-content-center">''
                            <a href="#taaruf"><span class="btn-sm bg-gradient-success"> Layanan Taaruf</span></a> &nbsp&nbsp
                            <a href="#konsultasi"><span class="btn-sm bg-gradient-success"> Layanan Konsultasi</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- akhir info panel -->

    </div>
    <!-- akhir container -->


    <div class="single-product-slider">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1 class="mb-2" id="taaruf">Layanan Taaruf Kami</h1>
                        <div class="row">
                            <div class="col-md">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <span class="font-weight-bold">Ikhtiarkan Pencarian Jodohmu bersama layanan Taaruf
                                            Kami, khusus Alumni Kegiatan Sekolah Pranikah Masjid Salman ITB</span>
                                        {{-- <span class="">Adapun beberapa program unggulan dari Bidang Dakwah adalah:</span> --}}
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col">

                    <img src="{{ asset('' . env('linkpub') . 'priba/img/alurtaaruf.jpeg') }}"
                        style="max-width: 100%; max-height: 100%;" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-slider">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1 class="mb-2" id="konsultasi">Konsultan Kami</h1>
                        <div class="row">
                            <div class="col-md">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <span class="font-weight-bold">Konsultasikan segala permasalahan hidup kamu bersama
                                            Konsultan kami, ustad Bidang Dakwah.</span>
                                        {{-- <span class="">Adapun beberapa program unggulan dari Bidang Dakwah adalah:</span> --}}
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Konsultan Bidang Dakwah
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Ustad Andri Mulyadi</b></h2>
                                    <p class="text-muted text-sm"><b>Spesialisasi: </b> Hukum Waris / Islam / Adab Adab /
                                        Hadits</p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                            Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone #: + 800 - 12 12 23 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{ asset('' . env('linkpub') . 'ecommerce/dist/img/imagead.png') }}"
                                        alt="Ustadz Andri" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Konsultan Bidang Dakwah
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Ustad Zulkarnain</b></h2>
                                    <p class="text-muted text-sm"><b>Spesialisasi: </b> Hukum Waris / Bahasa Arab / Al Quran
                                        / Hadits </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                            Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone #: + 800 - 12 12 23 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{ asset('' . env('linkpub') . 'ecommerce/dist/img/imagezu.png') }}"
                                        alt="Ustadz Zul" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Konsultan Bidang Dakwah
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Ustad Aceng Saefudin</b></h2>
                                    <p class="text-muted text-sm"><b>Spesialisasi: </b> Hukum Fiqh / Hadits / Al Quran /
                                        Pernikahan </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                            Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone #: + 800 - 12 12 23 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{ asset('' . env('linkpub') . 'ecommerce/dist/img/imageac.png') }}"
                                        alt="Ustadz Aceng" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-slider">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1 class="mb-2">Mau Langsung Konsultasi?</h1>
                        <section class="content">

                            <!-- Default box -->
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-5 text-center d-flex align-items-center justify-content-center">
                                        <div class="">
                                            <h2>Admin <strong>Konsultasi</strong></h2>
                                            <p class="lead mb-5">Bidang Dakwah <br>Masjid Salman ITB<br>
                                                Phone: +6282119029098
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="form-group">
                                            <label for="inputName">Nama</label>
                                            <input type="text" id="inputName" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTopik">Topik</label>
                                            <input type="email" id="inputTopik" class="form-control" />
                                        </div>
                                        {{-- <div class="form-group">
                      <label for="reservationdatetime">Publikasi Mulai</label>
                      <input class="form-control" data-date-format="DD MMMM YYYY" name="reservationdatetime" type="date" value="{{ old('reservationdatetime') }}" id="reservationdatetime" />
                      
                    </div> --}}
                                        <div class="form-group">
                                            <label for="reservasi">Hari - Tanggal Pengajuan</label>
                                            <input type="text" id="reservasi" class="form-control"
                                                placeholder="Hari, Tanggal-Bulan" />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputMessage">Pesan Tambahan</label>
                                            <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <a id="startcon" href="#" onclick="gettogetInputValue()"
                                                class="btn btn-primary"><i class="fab fa-whatsapp"
                                                    aria-hidden="true"></i> Mulai Percakapan</a>
                                            {{-- <input type="submit" class="btn btn-primary" value="Send message"> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Direct Chat -->

    <!-- /.row -->



    <script>
        // let message = document.getElementById('message').value;
        // console.log(message);
        function gettogetInputValue() {
            // Selecting the input element and get its value 
            let inputName = document.getElementById("inputName").value;
            let inputTopik = document.getElementById("inputTopik").value;
            let reservasi = document.getElementById("reservasi").value;
            let inputMessage = document.getElementById("inputMessage").value;
            let tombol = document.getElementById('startcon')
            // Displaying the value
            // alert(inputVal);
            // console.log(tombol);
            let hrefAwal =
                `https://wa.me/6282119029098?text=_Assalamualaikum_%20*Admin%20Konsultasi%20Bidang%20Dakwah*%0A%0APerkenalkan%20saya%20${inputName}%0A%0AIngin%20berkonsultasi%20terkait%20topik%20${inputTopik}%0AApakah%20saya%20bisa%20menjadwalkan%20konsultasi%20di%20Hari%20${reservasi}%0A%0Apesan%20tambahan%3A%0A${inputMessage}%0A%0AHatur%20Nuhun%20sebelumnya%20Admin%0AWassalamualaikum`
            tombol.href = hrefAwal
            // console.log(hrefAwal);
        }
        // https://wa.me/6285722489834?text=Saya%20tertarik%20dengan%20mobil%20Anda%20yang%20dijual



        // Assalamualaikum%20Admin%20Konsultasi%20Bidang%20Dakwah%0APerkenalkan%20saya%20%24nama%0AIngin%20berkonsultasi%20terkait%20topik%20%24topik%0AApakah%20saya%20bisa%20menjadwalkan%20konsultasi%20di%20Hari%20%24HTL%2C%20jam%20%24waktu%0A%0Apesan%20tambahan%3A%0A%24message%0A%0AHatur%20Nuhun%20sebelumnya%20Admin%0AWassalamualaikum
    </script>
@endsection
