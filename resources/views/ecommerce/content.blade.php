@extends('layouts.ecommerce')

@section('title')
    <title>Konten Bidang Dakwah</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection

@section('content')
    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid" style="background: url({{ asset('priba/img/img55.jpg') }});">
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

                        <h1 class="" style="text-align: center">Konten Bidang Dakwah</h1>
                        <div class="row justify-content-center">''
                            <a href="#Youtube"><span class="btn-sm bg-gradient-success"> Konten Youtube</span></a>
                            &nbsp&nbsp
                            <a href="#Instagram"><span class="btn-sm bg-gradient-success"> Konten Instagram</span></a>
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
                        <h1 class="mb-2" id="Youtube">Youtube Kami</h1>
                        <div class="row">
                            <div class="col-md">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <span class="font-weight-bold">Nikmati Video-video Kami untuk menemani harimu, mari
                                            berusaha menjadi lebih baik lagi setiap harinya.</span>
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
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= $youtubeProfilePic ?>" width="200" class="rounded-circle img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <h5><?= $channelName ?></h5>
                            <p><?= $subscriber ?> Subscribers.</p>
                            <div class="g-ytsubscribe" data-channelid="UCOivuK5MQ3QMiI7WeSJWE6w" data-layout="default"
                                data-count="default"></div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Video Terbaru Youtube Kami</h2>
                    <div class="row mt-3 pb-3">

                        @foreach ($trilatestVideoId as $latestVideoI)
                            <div class="col-md-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/<?= $latestVideoI['id']['videoId'] ?>?rel=0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId ?>?rel=0" allowfullscreen></iframe>
              </div>
            </div> --}}
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
                        <h1 class="mb-2" id="Instagram">Instagram Kami</h1>
                        <div class="row">
                            <div class="col-md">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <span class="font-weight-bold">Nikmati Postingan Kami berupa poster dakwah atau
                                            lainnya, mari berusaha menjadi lebih baik lagi setiap harinya.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            {{-- <img src="<?= $profilePictureIG ?>" width="200" class="rounded-circle img-thumbnail"> --}}
                        </div>
                        <div class="col-md-8">
                            <h5><?= $username ?></h5>
                            {{-- <p><?= $followersIG ?> Followers.</p> --}}
                            <a href="https://www.instagram.com/bidakwah.salmanitb/"><span
                                    class="btn-sm bg-gradient-danger"><i class="fab fa-instagram"></i> instagram</span></a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h3>Postingan Terbaru Instagram Kami</h3>
                    <div class="row mt-3 pb-3">
                        @foreach ($dataPhotoss as $photo)
                            <div class="col-4 col-md-4">
                                @switch($photo[1])
                                    @case('VIDEO')
                                        <video width="70" class="img-thumbnail">
                                            <source src="{{ $photo[2] }}" type="video/mp4" />
                                        </video>
                                    @break

                                    @default
                                        <li><img src="{{ $photo[2] }}" class="img-thumbnail" alt=""></li>
                                @endswitch
                            </div>
                            {{-- @switch($photo[1])
                    @case('VIDEO')
                    <video width="150" height="150" >
                      <source src="<?= $photo[2] ?>" type="video/mp4" />
                    </video>	
                    @break
                    
                    @default
                    <img src="<?= $photo[2] ?>" width="150" height="150" alt="">
                    
                   
                @endswitch --}}
                        @endforeach


                    </div>

                </div>

            </div>
        </div>
    </div>



    <!-- /.row -->




    <script src="https://apis.google.com/js/platform.js"></script>
@endsection
