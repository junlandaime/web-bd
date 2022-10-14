@extends('layouts.ecommerce')

@section('title')
    <title>Web Bidang Dakwah</title>
@endsection

@section('content')
    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid"
        style="background: url({{ asset('' . env('linkpub') . 'priba/img/image17.png') }});">
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
                        <img src="{{ asset('' . env('linkpub') . 'priba/img/aman.png') }}" alt="aman"
                            class="float-left rounded-circle" width="90">
                        <h4>AMAN</h4>
                        <p>Semoga Anda Aman bersama Kami.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('' . env('linkpub') . 'priba/img/nyaman.png') }}" alt="nyaman"
                            class="float-left rounded-circle" width="90">
                        <h4>NYAMAN</h4>
                        <p>Semoga Anda Nyaman Berada Disini.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('' . env('linkpub') . 'priba/img/mengesankan.PNG') }}" alt="mengesankan"
                            class="float-left rounded-circle" width="90">
                        <h4>MENGESANKAN</h4>
                        <p>Semoga Pelayanan Kami Mengesankan di Hati Anda.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir info panel -->

    </div>
    <!-- akhir container -->

    <!-- Start category Area -->
    <section class="category-area mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                {{-- <img class="img-fluid w-100" src="https://source.unsplash.com/500x500?{{ $products->categpry-name }}" alt=""> --}}
                                {{-- <img class="img-fluid w-100" src="https://source.unsplash.com/450x180?Kajian" alt=""> --}}
                                <img class="img-fluid w-100" src="{{ asset('' . env('linkpub') . 'priba/img/kateg4.png') }}"
                                    alt="">
                                <a href="https://source.unsplash.com/500x500?Kajian" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Kajian</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                {{-- <img class="img-fluid w-100" src="https://source.unsplash.com/210x180?Pendidikan" alt=""> --}}
                                <img class="img-fluid w-100" src="{{ asset('' . env('linkpub') . 'priba/img/kateg3.png') }}"
                                    alt="">
                                <a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Pendidikan</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="{{ asset('' . env('linkpub') . 'priba/img/kateg2.png') }}"
                                    alt="">
                                <a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Pernikahan</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="{{ asset('' . env('linkpub') . 'priba/img/kateg5.png') }}"
                                    alt="">
                                <a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Islam</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('' . env('linkpub') . 'priba/img/kateg1.png') }}"
                            alt="">
                        <a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Al Qur'an</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category Area -->

    <!-- start product Area -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Kegiatan Terbaru</h1>
                            {{-- <p>Untuk Kegiatan Kami Seluruhnya <br><a href="/event"><button class="btn bg-gradient-success">View More</button></a></p> --}}
                            <p>Untuk Kegiatan Kami Seluruhnya <br><a href="/event"><span
                                        class="badge bg-gradient-success">View More</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    @forelse ($events as $row)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    {{-- <img class="img-fluid w-100" src="https://source.unsplash.com/500x500?{{ $products->categpry-name }}" alt=""> --}}
                                    <img class="img-fluid"
                                        src="{{ asset('storage' . env('linkstore') . '/events/' . $row->image) }}"
                                        alt="{{ $row->name }}">
                                    <a class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            {!! $row->status_event_label !!}
                                            @php
                                                $cd0 = strtotime($row->published_at->format('Y-m-d')) - mktime(0, 0, 0);
                                                $cd1 = strtotime($row->published_end->format('Y-m-d')) - mktime(0, 0, 0);
                                                $cd2 = strtotime($row->event_end->format('Y-m-d')) - mktime(0, 0, 0);
                                            @endphp
                                            @switch($row->status_event)
                                                @case(0)
                                                    <h6 class="deal-title">Coming Soon <strong>{{ $cd0 / 86400 + 10 }}</strong>
                                                        hari
                                                        lagi </h6>
                                                @break

                                                @case(1)
                                                    <h6 class="deal-title">Pendaftaran berakhir
                                                        <strong>{{ $cd1 / 86400 }}</strong> hari lagi
                                                    </h6>
                                                @break

                                                @case(2)
                                                    <h6 class="deal-title">Kegiatan berakhir <strong>{{ $cd2 / 86400 }}</strong>
                                                        hari lagi </h6>
                                                @break
                                            @endswitch
                                            {{-- <h6 class="deal-title">Kajian</h6> --}}
                                        </div>
                                    </a>
                                </div>

                                <div class="product-details">
                                    <h6>{{ $row->name }}</h6>
                                    <div class="price">
                                        <h6>Rp {{ number_format($row->price) }}</h6>
                                        <h6 class="l-through">Rp {{ number_format($row->price) }}</h6>
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="" class="social-info" data-toggle="modal"
                                            data-target="#{{ $row->slug }}">
                                            <span class="ti-bag"><i class="fas fa-info"></i></span>
                                            <p class="hover-text">Info</p>
                                        </a>

                                        <div class="modal fade" id="{{ $row->slug }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-default">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Info Singkat</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{!! $row->excerpt !!}</p>
                                                        <p>Kategori: <a
                                                                href="/category/{{ $row->category->slug }}">{!! $row->category->name !!}</a>
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-outline-light"
                                                            data-dismiss="modal">
                                                            Close
                                                        </button>

                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                        {{-- <a href="" class="social-info">
                            <span class="lnr lnr-heart"><i class="fab fa-facebook-f"></i></span>
                            <p class="hover-text">Wishlist</p>
                        </a> --}}

                                        <a href="/event/{{ $row->slug }}" class="social-info">
                                            <span class="lnr lnr-move"><i class="fa fa-fw fa-th-large"></i></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                        @endforelse

                    </div>
                    {{-- <div class="row">
        {{ $events->links() }}
      </div> --}}
                </div>
            </div>
            <!-- single event slide -->


        </section>
        <!-- end event Area -->



        <div class="single-product-slider">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1 class="mb-2">Butuh Tempat Konsultasi?</h1>
                            <div class="row justify-content-center">

                                <div class="col-md-8 d-flex justify-content-center">
                                    <!-- DIRECT CHAT SUCCESS -->
                                    <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Konsultasi Bidang Dakwah</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="direct-chat-messages">
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Saya</span>
                                                    </div>
                                                    <img class="direct-chat-img"
                                                        src="{{ asset('' . env('linkpub') . 'priba/img/employee.png') }}"
                                                        alt="Message User Image">
                                                    <div class="direct-chat-text">
                                                        Wahmin, Saya mau Konsultasi
                                                    </div>
                                                </div>
                                                <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Admin Konsultasi Bidang
                                                            Dakwah</span>
                                                    </div>
                                                    <img class="direct-chat-img"
                                                        src="{{ asset('' . env('linkpub') . 'priba/img/logo-bd.png') }}"
                                                        alt="Message User Image">
                                                    <div class="direct-chat-text">
                                                        Silahkan, ada yang bisa dibantu Wahmin (Bidang Dakwah Admin)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="input-group">
                                                <input type="text" id="message" name="message"
                                                    placeholder="Kebutuhan Konsultasimu..." class="form-control">
                                                <span class="input-group-append">
                                                    <a href="#" class="btn btn-success"
                                                        onclick="getgInputValue()">Send</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
            function getgInputValue() {
                // Selecting the input element and get its value 
                let inputVal = document.getElementById("message").value;
                let tombol = document.querySelector('.card-footer .input-group span a')
                // Displaying the value
                // alert(inputVal);
                // console.log(tombol);
                let hrefAwal = `https://wa.me/6282119029098?text=` + inputVal
                tombol.href = hrefAwal
                // console.log(hrefAwal);
            }
            // https://wa.me/6285722489834?text=Saya%20tertarik%20dengan%20mobil%20Anda%20yang%20dijual
        </script>
    @endsection
