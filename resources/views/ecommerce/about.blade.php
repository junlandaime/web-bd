@extends('layouts.ecommerce')

@section('title')
    <title>Tentang Bidang Dakwah</title>
@endsection

@section('content')
<!-- Jumbotron -->
  
  <div class="jumbotron jumbotron-fluid" style="background: url({{ asset('priba/img/img55.jpg') }});">
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
        <div class="row">
            <div class="col-lg">

                <h1 class="" style="text-align: center">Tentang Kami</h1>
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
            <h1 class="mb-2">Apa Itu Bidang Dakwah Masjid Salman ITB?</h1>
            <div class="row">
                <div class="col-md">
                    <div class="info-box">
                    <div class="info-box-content">
                        <span class="font-weight-bold">Bidang Dakwah merupakan bidang yang mengelola seluruh bentuk kegiatan dakwah dan pelayanan ibadah jamaah yang diselenggarakan oleh YPM Salman ITB baik yang berkaitan dengan Civitas Academica ITB maupun pihak lain.</span>
                        <span class="">Adapun beberapa program unggulan dari Bidang Dakwah adalah:</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            
            </div>
              <div class="container mt-3">
                <div class="col-md">
                    <div class="card card-primary collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title text-white">Ketakmiran</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <ol>
                            <li>Kajian Sabtu Dhuha</li>
                            <li>Kajian Shaum Senin Kamis / KISSMIS</li>
                            <li>Layanan Ibadah Harian</li>
                            <li>Konsultasi</li>
                            <li>Pelatihan dan Pengurusan Jenazah</li>
                            <li>Pelayanan Muallaf</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card card-primary collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title text-white">Studi Islam</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <ol>
                            <li>Kelas Tahsin</li>
                            <li>Kelas Tahfidz</li>
                            <li>Kelas Maqamat/Murattal</li>
                            <li>Kelas Bahasa Arab Percakapan</li>
                            <li>Kelas Bahasa Arab Al Quran</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card card-primary collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title text-white">Pendidikan Keluarga</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <ol>
                            <li>Sekolah Pranikah</li>
                            <li>Ta'aruf Masjid Salman</li>
                            <li>Seminar Pranikah</li>
                            <li>Seminar Parenting</li>
                            <li>Sekolah Sakinah Salman</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card card-primary collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title text-white">Kelompok Bimbingan Haji dan Umrah (KBIHU)</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <ol>
                            <li></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card card-primary collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title text-white">Pengajian Wanita Salman (PWS)</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body text-left">
                        <ol>
                            <li></li>
                        </ol>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <!--================Contact Area =================-->
  
	<section class="contact_area section_gap_bottom">
		<div class="container">
            
			<div id="mapBox" class="mapBox">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.944062863299!2d107.6123765!3d-6.8939488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e650eb4f8499%3A0x5d08d070d6d3c906!2sMasjid%20Salman%20ITB!5e0!3m2!1sid!2sid!4v1657080620695!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>Bidang Dakwah, Masjid Salman</h6>
							<p>Jl. Ganesa No.7, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132</p>
							
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">(+62) 857 2218 35852</a></h6>
							<p>Senin sampai Jumat</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">bidangdakwa@salmanitb.com</a></h6>
							<p>Send us your query anytime!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->





  

@endsection