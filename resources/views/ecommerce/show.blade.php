@extends('layouts.ecommerce')

@section('title')
    <title>Kegiatan Bidang Dakwah</title>
@endsection

@section('content')
    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid"
        style="background: url({{ asset('' . env('linkpub') . 'priba/img/img137.jpg') }});">
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

    {{-- @dd($product) --}}
    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_Product_carousel">
                        <div class="single-prd-item">
                            <img class="img-fluid"
                                src="{{ asset('storage' . env('linkstore') . '' . env('linkstore') . ' /events/' . $event->image) }}"
                                alt="{{ $event->name }}">
                        </div>
                        {{-- <div class="single-prd-item">
							<img class="img-fluid" src="{{ asset(''. env('linkpub') .'priba/img/workingspace3.jpg') }}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset(''. env('linkpub') .'priba/img/workingspace3.jpg') }}" alt="">
						</div> --}}
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $event->name }}</h3>
                        <h2>Rp {{ number_format($event->price) }}</h2>
                        <span>
                            <h2>Untuk {{ $event->meet }} kali pertemuan </h2>
                        </span>
                        <ul class="list">
                            <li><a class="active" href="/category/{{ $event->category->slug }}"><span>Category</span> :
                                    {{ $event->category->name }}</a></li>
                            <li><a href="#"><span>{!! $event->status_event_label !!}</span></a></li>
                            @php
                                $cd0 = strtotime($event->published_at->format('Y-m-d')) - mktime(0, 0, 0);
                                $cd1 = strtotime($event->published_end->format('Y-m-d')) - mktime(0, 0, 0);
                                $cd2 = strtotime($event->event_end->format('Y-m-d')) - mktime(0, 0, 0);
                            @endphp
                            @switch($event->status_event)
                                @case(0)
                                    <li>Coming Soon insyaallah<strong>{{ $cd0 / 86400 }}</strong> hari lagi </li>
                                @break

                                @case(1)
                                    <li>Pendaftaran berakhir <strong>{{ $cd1 / 86400 }}</strong> hari lagi </li>
                                @break

                                @case(2)
                                    <li>Kegiatan berakhir <strong>{{ $cd2 / 86400 }}</strong> hari lagi </li>
                                @break
                            @endswitch

                        </ul>
                        <p>{{ $event->excerpt }}</p>

                        <div class="card_area d-flex align-items-center">
                            <a class="primary-btn" href="{{ $event->link }}" target="blank">Daftar Kegiatan</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Specification</a>
                </li>
                {{-- <li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Comments</a>
				</li> --}}

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    {!! $event->description !!}
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5>Nama Kegiatan</h5>
                                    </td>
                                    <td>
                                        <h5>{{ $event->name }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Infaq Kegiatan</h5>
                                    </td>
                                    <td>
                                        <h5>Rp {{ number_format($event->price) }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Jumlah Pertemuan</h5>
                                    </td>
                                    <td>
                                        <h5>{{ $event->meet }}</h5>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5>Status Kegiatan</h5>
                                    </td>
                                    <td>
                                        <h5>{!! $event->status_event_label !!}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Penutupan Pendaftaran</h5>
                                    </td>
                                    <td>
                                        <h5>{{ $event->published_end->format('d-m-Y') }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Kegiatan Mulai</h5>
                                    </td>
                                    <td>
                                        <h5>{{ $event->event_start->format('d-m-Y') }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Kegiatan Berakhir</h5>
                                    </td>
                                    <td>
                                        <h5>{{ $event->event_end->format('d-m-Y') }}</h5>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item reply">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Post a comment</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> --}}

            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->
@endsection
