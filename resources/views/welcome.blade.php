<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <title>Coba Web Bidang Dakwah</title>

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{ asset('karma/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('karma/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('karma/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('karma/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('karma/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('karma/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('karma/css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('karma/css/ion.rangeSlider.css') }}" />
	<link rel="stylesheet" href="{{ asset('karma/css/ion.rangeSlider.skinFlat.css') }}" />
	<link rel="stylesheet" href="{{ asset('karma/css/main.css') }}">

	{{-- my css --}}
	<link rel="stylesheet" href="{{ asset('priba/css/style.css') }}">

	{{-- my font --}}
	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  {{-- <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('priba/img/logoBD.png') }}" alt="Bidang Dakwah Logo"  width="100">
  </div> --}}

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('priba/img/logoBD.png') }}" width="30" >Bidang Dakwah</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link {{ Request::is('/') ? ' active' : null }}" href="/">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link {{ Request::is('event*') ? ' active' : null }}" href="/event">Kegiatan</a>
          <a class="nav-item nav-link" href="#">Konsultasi</a>
          <a class="nav-item nav-link" href="#">Konten Kami</a>
          <a class="nav-item nav-link" href="#">Tentang Kami</a>
          <a class="nav-item nav-link btn btn-primary text-white tombol" href="#">Join Us</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir Navbar -->
	

	<!-- Jumbotron -->
  
	<div class="jumbotron jumbotron-fluid" style="background: url({{ asset('priba/img/image17.png') }});">
	<div class="container">
	  <h1 class="display-4">Selamat Datang di <br><span>Bidang Dakwah</span> <br><span>Masjid Salman ITB</span> </h1>
	  <h5>Bidang pengelola kegiatan dakwah dan pelayanan ibadah jamaah <br> yang diselenggarakan oleh YPM Salman ITB</h5>
	  {{-- <a href="#" class="btn btn-info btn-lg tombol">View Our Work</a> --}}
	</div>
  	</div>
  <!-- akhir Jumbotron -->

  <!-- container -->
  <div class="container">
  
    <!-- info panel -->
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row justify-content-center">
			<div class="col-md-5">
			  <div class="row">
				<div class="col-md-4">
				  <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
				</div>
				<div class="col-md-8">
				  <h5><?= $channelName; ?></h5>
				  <p><?= $subscriber; ?> Subscribers.</p>
				  <div class="g-ytsubscribe" data-channelid="UCOivuK5MQ3QMiI7WeSJWE6w" data-layout="default" data-count="default"></div>
				</div>
			  </div>
			  <div class="row mt-3 pb-3">
				<div class="col">
				  <div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" allowfullscreen></iframe>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-md-5">
			  <div class="row">
				<div class="col-md-4">
				  {{-- <img src="<?= $profilePictureIG; ?>" width="200" class="rounded-circle img-thumbnail"> --}}
				</div>
				<div class="col-md-8">
				  <h5><?= $username; ?></h5>
				  {{-- <p><?= $followersIG; ?> Followers.</p> --}}
				</div>
			  </div>
{{-- 	
			  <div class="row mt-3 pb-3">
				<div class="col">
				  <?php foreach ($dataPhotos as $photo) : ?>
					<div class="instafeed d-flex flex-wrap">
					  <img src="<?= $photo[2]; ?>"  height="50">
					</div>
	
				  <?php endforeach; ?>
				</div>
			  </div> --}}
			  <div >
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
						@foreach ($dataPhotos as $photo)
						@switch($photo[1])
							@case('VIDEO')
								<video class="img-thumbnail" width="90" >
									<source src="<?= $photo[2]; ?>" type="video/mp4" />
							  	</video>	
								@break
							
							@default
							<li><img src="<?= $photo[2]; ?>" class="img-thumbnail" alt=""></li>
								
						@endswitch
						@endforeach
                    </ul>
                </div>
            </div>
			</div>
		  </div>
      </div>
    </div>
    <!-- akhir info panel -->
    
  </div>
  <!-- akhir container -->
	

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset('karma/img/category/s-p1.jpg') }}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset('karma/img/category/s-p1.jpg') }}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ asset('karma/img/category/s-p1.jpg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>Faded SkyBlu Denim Jeans</h3>
						<h2>$149.99</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : Household</a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p>Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for
							something that can make your interior look awesome, and at the same time give you the pleasant warm feeling
							during the winter.</p>
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
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
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Specification</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Comments</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes
						and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in
						Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to
						London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an
						officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a
						job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when
						showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a
						child’s painting set for her birthday and it was with this that she produced her first significant work, a
						half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly
						named ‘Hangover’ by Beryl’s husband and</p>
					<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing
						more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and
						the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for
						more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a
						streamlined plan of cooking that is more efficient for one person creating less</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Width</h5>
									</td>
									<td>
										<h5>128mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Height</h5>
									</td>
									<td>
										<h5>508mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Depth</h5>
									</td>
									<td>
										<h5>85mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Weight</h5>
									</td>
									<td>
										<h5>52gm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5>yes</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Freshness Duration</h5>
									</td>
									<td>
										<h5>03days</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>When packeting</h5>
									</td>
									<td>
										<h5>Without touch of hand</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Each Box contains</h5>
									</td>
									<td>
										<h5>60pcs</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ asset('karma/img/product/review-1.png') }}" alt="">
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
											<img src="{{ asset('karma/img/product/review-2.png') }}" alt="">
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
											<img src="{{ asset('karma/img/product/review-3.png') }}" alt="">
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
				</div>
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Overall</h5>
										<h4>4.0</h4>
										<h6>(03 Reviews)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Based on 3 Reviews</h3>
										<ul class="list">
											<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ asset('karma/img/product/review-1.png') }}" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ asset('karma/img/product/review-2.png') }}" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{ asset('karma/img/product/review-3.png') }}" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
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
								<h4>Add a Review</h4>
								<p>Your Rating:</p>
								<ul class="list">
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
								</ul>
								<p>Outstanding</p>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r1.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r2.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r3.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r5.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r6.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r7.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r9.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r10.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('karma/img/r11.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="{{ asset('karma/img/category/c5.jpg') }}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->

	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p class="text-white">
							Bidang pengelola kegiatan dakwah dan pelayanan ibadah jamaah yang diselenggarakan oleh YPM Salman ITB
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
	
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">
	
								<div class="d-flex flex-row">
	
									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">
	
	
									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>
	
									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="{{ asset('priba/img/jundi.png') }}" class="img-thumbnail" alt=""></li>
							<li><img src="{{ asset('priba/img/jundi.png') }}" class="img-thumbnail" alt=""></li>
							<li><img src="{{ asset('priba/img/jundi.png') }}" class="img-thumbnail" alt=""></li>
							<li><img src="{{ asset('priba/img/jundi.png') }}" class="img-thumbnail" alt=""></li>
							<li><img src="{{ asset('priba/img/jundi.png') }}" class="img-thumbnail" alt=""></li>
							<li><img src="{{ asset('priba/img/jundi.png') }}" class="img-thumbnail" alt=""></li>
							<li><img src="{{ asset('priba/img/jundi.png') }}" class="img-thumbnail" alt=""></li>
							<li><img src="{{ asset('priba/img/jundi.png') }}" class="img-thumbnail" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Kontak Kami</h6>
						<p>Jl. Ganesa No.7, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-youtube"></i></a>
							<a href="#"><i class="fas fa-phone"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap pb-5">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.youtube.com/watch?v=eU9rZpbfWwk" target="_blank">Sandiga</a> & <a href="https://colorlib.com" target="_blank">Colorlib</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
			</div>
		</div>
	</footer>
{{-- my js --}}
<script src="{{ asset('priba/js/script.js') }}"></script>
	<script src="{{ asset('karma/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('karma/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{ asset('karma/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('karma/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('karma/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('karma/js/nouislider.min.js')}}"></script>
	<script src="{{ asset('karma/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('karma/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('karma/js/gmaps.min.js')}}"></script>
	<script src="{{ asset('karma/js/main.js')}}"></script>
	

</div>
<!-- ./wrapper -->
</body>
</html>