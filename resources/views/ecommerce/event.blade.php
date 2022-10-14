@extends('layouts.ecommerce')

@section('title')
    <title>Kegiatan Bidang Dakwah</title>
@endsection

@section('content')
    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid" style="background: url({{ asset('' . env('linkpub') . 'priba/img/img14.jpg') }});">
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

                        <h1 class="" style="text-align: center">Kegiatan Bidang Dakwah Masjid Salman ITB</h1>
                    </div>

                </div>
            </div>
        </div>
        <!-- akhir info panel -->

    </div>
    <!-- akhir container -->


    <div class="container my-5">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <a href="/event">
                        <div class="head">Program dan Kegiatan Kami</div>
                    </a>
                    <ul class="main-categories">
                        @foreach ($categories as $category)
                            <li class="main-nav-list"><a data-toggle="collapse"
                                    href="{{ $category->child_count > 0 ? '#' . $category->slug : url('/category/' . $category->slug) }}"
                                    aria-expanded="false" aria-controls="fruitsVegetable"><span
                                        class="lnr lnr-arrow-right"></span>{{ $category->name }}<span
                                        class="number">(53)</span></a>
                                <ul class="collapse" id="{{ $category->slug }}" data-toggle="collapse" aria-expanded="true"
                                    aria-controls="{{ $category->slug }}">
                                    @foreach ($category->child as $child)
                                        <li class="main-nav-list child"><a
                                                href="{{ url('/category/' . $child->slug) }}">{{ $child->name }}<span
                                                    class="number">(13)</span></a></li>
                                    @endforeach
                                    {{-- <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li> --}}
                                </ul>
                            </li>
                        @endforeach


                    </ul>
                </div>
                {{-- <div class="sidebar-filter mt-50">
                    <div class="top-filter-head">By Tags</div>
                    <div class="common-filter">
                        <div class="head">Brands</div>
                        <form action="#">
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="apple"
                                        name="brand"><label for="apple">Apple<span>(29)</span></label></li>

                            </ul>
                        </form>
                    </div>

                </div> --}}
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        {{-- <select>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                        </select> --}}
                    </div>
                    {{-- <div class="sorting mr-auto">
                        <select>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                        </select>
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div> --}}
                </div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
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
                                                        <h6 class="deal-title">Coming Soon insyaallah
                                                            <strong>{{ $cd0 / 86400 + 10 }}</strong> hari lagi
                                                        </h6>
                                                    @break

                                                    @case(1)
                                                        <h6 class="deal-title">Pendaftaran berakhir
                                                            <strong>{{ $cd1 / 86400 }}</strong> hari lagi
                                                        </h6>
                                                    @break

                                                    @case(2)
                                                        <h6 class="deal-title">Kegiatan berakhir
                                                            <strong>{{ $cd2 / 86400 }}</strong> hari lagi
                                                        </h6>
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
                            <p class="hover-text">Wishlist</p> --}}
                                            </a>
                                            <a href="/event/{{ $row->slug }}" class="social-info">
                                                <span class="lnr lnr-move"><i class="fa fa-fw  fa-th-large"></i></span>
                                                <p class="hover-text">view more</p>
                                            </a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @empty
                            @endforelse
                            <!-- single product -->


                        </div>
                    </section>
                    <!-- End Best Seller -->
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting mr-auto">
                            {{-- <select>
                                <option value="1">Show 11</option>
                                <option value="1">Show 13</option>
                                <option value="1">Show 12</option>
                            </select> --}}
                        </div>
                        {{-- <div class="pagination">
                            <a href="#" class="prev-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <a href="#">6</a>
                            <a href="#" class="next-arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div> --}}
                        {{ $events->links('vendor.pagination.karma') }}
                        {{ env('linkpub') }}
                    </div>

                    <!-- End Filter Bar -->
                </div>

            </div>
        </div>
    @endsection
