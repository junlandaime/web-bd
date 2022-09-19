<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p class="text-white">
                        Bidang pengelola kegiatan dakwah dan pelayanan ibadah jamaah yang diselenggarakan oleh YPM
                        Salman ITB
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Hubungi Kami Langsung</h6>
                    <p>Keep in Touch with US</p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">

                            <div class="d-flex flex-row">

                                <input class="form-control" id="messagetouch" name="message"
                                    placeholder="Sampaikan pertanyaan kamu" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Sampaikan pertanyaan kamu '" required=""
                                    type="text">


                                {{-- <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button> --}}
                                <a id="keeptouch" onclick="getInputValue()" class="click-btn btn btn-default"><i
                                        class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
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
                    <h6 class="mb-20">Instagram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        @foreach ($dataPhotos as $photo)
                            @switch($photo[1])
                                @case('VIDEO')
                                    <video width="70" class="img-thumbnail">
                                        <source src="{{ $photo[2] }}" type="video/mp4" />
                                    </video>
                                @break

                                @default
                                    <li><img src="{{ $photo[2] }}" class="img-thumbnail" alt=""></li>
                            @endswitch
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget ml-3">
                    <h6>Kontak Kami</h6>
                    <p>Jl. Ganesa No.7, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="https://www.facebook.com/bidangdakwah.salmanitb" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/bidakwah.salmanitb/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCOivuK5MQ3QMiI7WeSJWE6w" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                        <a href="https://wa.me/6285722183585" target="_blank"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap pb-3">
            <p class="footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                    aria-hidden="true"></i> by <a href="https://www.youtube.com/watch?v=eU9rZpbfWwk"
                    target="_blank">Sandiga</a> & <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<script>
    // let message = document.getElementById('message').value;
    // console.log(message);
    function getInputValue() {
        // Selecting the input element and get its value 
        let Valinput = document.getElementById("messagetouch").value;
        let tekan = document.getElementById('keeptouch')
        // Displaying the value
        // alert(inputVal);
        // console.log(tekan);
        let hrefAwal = `https://wa.me/6285722183585?text=` + Valinput
        tekan.href = hrefAwal
        // console.log(hrefAwal);
    }
    // https://wa.me/6285722489834?text=Saya%20tertarik%20dengan%20mobil%20Anda%20yang%20dijual
</script>
