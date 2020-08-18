@extends('defult.defult-main')

    <!-- Main Header-->
    @section('header-menu-logo')
        <div class="header-top">
            <div class="container">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="main-logo">
                        <figure>
                            <a href="#"><img src="https://pengadaan.kemdikbud.go.id//assets/images/logo/GIF%20New_LOGO%20WEB.gif" alt="" width="100%"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
                    
        <div class="header-lower">
            <div class="container">
                <div class="header-area">
                    <nav class="main-menu">
                        <div class="ml-auto">
                        <div class="navbar-header clearfix">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix ">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{url('/')}}">Home</a></li>
                                 <li class=""><a href="{{url('regulasi')}}">Regulasi</a>
                                  
                                </li>
                                 <li class="dropdown"><a href="#">Artikel</a>
                                    <ul>
                                        <li><a href="{{url('artikel_penyedia')}}">Penyedia</a></li>
                                        <li><a href="{{url('non_penyedia')}}">Non Penyedia</a></li>
                                         <li><a href="{{url('video')}}">Videp</a></li>
                                         <li><a href="{{url('info_grafis')}}">Info Grafis</a></li>                                    
                                     </ul>
                                </li>
                                 <li class="dropdown"><a href="#">Kegiatan</a>
                                    <ul>
                                        <li><a href="{{url('kegiatan-registrasi')}}">Registrasi</a></li>
                                        <li><a href="{{url('kegiatan-unduh-materi')}}">Unduh Materi</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('gallery')}}">Gallery</a></li>
                                <li><a href="{{url('kontak')}}">Kontak</a></li>
                            </ul>
                        </div>     
                        </div>               
                    </nav>
                   
                </div>
            </div>
        </div>

        <div class="sticky-header">
        	<div class="container clearfix">
                <!--Logo-->
                <div class="logo">
                    <a href="index-2.html"><img src="https://cdn.clipart.email/1036d2a00fe12444b669e4be50e337bb_gratisan-logo-logo-kementerian-pendidikan-vector_200-150.png" width="35%" alt=""></a>
                </div>
                
                <!--Right Col-->
                <div class="text-center">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header clearfix">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                           <ul class="navigation clearfix">
                                <li class="current"><a href="{{url('/')}}">Home</a></li>
                                  <li class=""><a href="{{url('regulasi')}}">Regulasi</a>
                                 <li class="dropdown"><a href="#">Artikel</a>
                                 <ul>
                                        <li><a href="{{url('artikel_penyedia')}}">Penyedia</a></li>
                                        <li><a href="{{url('non_penyedia')}}">Non Penyedia</a></li>
                                         <li><a href="{{url('video')}}">Videp</a></li>
                                         <li><a href="{{url('info_grafis')}}">Info Grafis</a></li>                                    
                                     </ul>
                                </li>
                                 <li class="dropdown"><a href="#">Kegiatan</a>
                                    <ul>
                                        <li><a href="{{url('kegiatan-registrasi')}}">Registrasi</a></li>
                                        <li><a href="{{url('kegiatan-unduh-materi')}}">Unduh Materi</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('gallery')}}">Gallery</a></li>
                                <li><a href="{{url('kontak')}}">Kontak</a></li>
                            </ul>
                        </div>                    
                    </nav><!-- Main Menu End-->
                </div>                
            </div>
        </div>
        @endsection
    <!--End Main Header -->
    
    
    <!--Main Slider-->
    @section('slider')
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul> 
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="https://pengadaan.kemdikbud.go.id/assets/slider/Ayo.png"  data-saveperformance="off" >
                        <img src="https://pengadaan.kemdikbud.go.id/assets/slider/Ayo.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">                  
                        <div class="tp-caption sft sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-105"
                        data-speed="1500"
                        data-start="0"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        </div> 
                    </li>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="https://pengadaan.kemdikbud.go.id/assets/slider/Follo.png"  data-saveperformance="off"  >
                        <img src="https://pengadaan.kemdikbud.go.id/assets/slider/Follo.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">                   
                        <div class="tp-caption sft sfb tp-resizeme"
                        data-x="right" data-hoffset="-15"
                        data-y="center" data-voffset="-105"
                        data-speed="1500"
                        data-start="0"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        </div> 
                    </li>  
                  
                   
                </ul>                
            	<div class="tp-bannertimer"></div>

  <div class="bg-primary " style="height: 30px;">
    <marquee>Unit Kerja Pengadaan Barang dan Jasa (UKPBJ) - Biro Umum dan Pengadaan Barang dan Jasa Sekretariat Jenderal - Kementerian Pendidikan dan K</marquee>
        </div>
            </div>
        </div>
        @endsection
    <!--End Main Slider-->
                

    <!--couses-section-->
   
    @section('welcome-section')
        <div class="container-fullwidth text-center " style=" padding: 90px 0px 70px;">
            <div class="row">
                <div class="image-column col-sm-6">
                    <a href="{{url('kegiatan-registrasi')}}">
                      <button class="btn btn-info " style="height: 60px; width: 300px; border-radius: 20px; font-size: 23px;" >KEGIATAN PBJ</button>
                      </a>
                      <a href="{{url('kegiatan-unduh-materi')}}">
                       <button class="btn btn-info " style="height: 60px; width: 300px; border-radius: 20px; font-size: 23px; margin: 10px;" >UNDUH MATERI</button>
                       </a>
                </div>
                <div class="col-sm-6">
                    <h2>Pengadaan Barang dan Jasa</h2>
                    <hr >
                    <p class="text-left mt-3">Menghasilkan barang/jasa yang tepat dari setiap uang yang dibelanjakan, diukur dari aspek kualitas, jumlah, waktu, biaya, lokasi, dan penyedia. Meningkatkan penggunaan produksi dalam negeri. ... Mendorong pengadaan berkelanjutan.</p>
                </div>
                </div>
                </div>
            </div>
        </div>
        @endsection
    @section('cause-section-pengandaan')
        <div class="container">
            <div class="sec-title text-center">
                <h3>Artikel <span>Pengadaan</span></h3>
                <hr  size="10px"  width="20%" style="margin: auto; height: 8px; background-color: lightblue;border-radius: 20px;">
            </div>
            <div class="row " style="margin-top: 20px;">
                <div class="image-column col-md-3 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="#">
                                    <img src="https://pengadaan.kemdikbud.go.id//assets/images/artikel/Artikel_Sos_Siplah.jpg" alt="">
                                </a>
                            </figure>               
                        </div>
                        <div class="image-content">
                            <p>Sosialisasi Sistem Informasi Pengadaan di Sekolah ( SIPLah 2020…</p>
                            <p>01 Agustus 2020 - 14:29:52 WIB</p>
                            <div class="link-btn">
                                <a href="#" class="btn-style-three">Detail</a>
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="image-column col-md-3 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/artikel/Artikel_PUPR_Tahap_II.jpg" alt=""></a>
                            </figure>      
                        </div>
                        <div class="image-content">
                            <p>Sosialisasi Strategi Pengadaan Jasa Konstruksi berdasarkan PERMEN PUPR 14/2020…</p>
                            <p>03 Juli 2020 - 11:18:02 WIB</p>
                            <div class="link-btn">
                                <a href="cause-details.html" class="btn-style-three">Detail</a>
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="image-column col-md-3 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/artikel/Thm_Artikel.jpg" alt=""></a>
                            </figure>                  
                        </div>
                        <div class="image-content">
                            <p>Sosialisasi Peraturan Menteri PUPR No. 14/2020 tentang Standar dan…</p>
                            <p>13 Juni 2020 - 10:37:51 WIB</p>
                            <div class="link-btn">
                                <a href="cause-details.html" class="btn-style-three">Detail</a>
                            </div>              
                        </div>
                    </div>
                </div>

                <div class="image-column col-md-3 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/artikel/Ekatalog_Artikel.jpg" alt=""></a>
                            </figure>      
                        </div>
                        <div class="image-content">
                            <p>Video Conference Bimbingan Teknis Katalag Elektronik versi 5.0</p>
                            <p>06 Juni 2020 - 12:49:29 WIB</p>
                            <div class="link-btn">
                                <a href="cause-details.html" class="btn-style-three">Detail</a>
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="#"><button class="btn btn-info" style="border-radius: 20px;">Artikel Selanjutnya</button></a>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    <!-- end artikel pengadaan -->
    @section('cause-section-penyedia')
        <div class="container">
            <div class="sec-title text-center">
                <h3>Artikel <span>Penyedia</span></h3>
                <hr  size="10px"  width="20%" style="margin: auto; height: 8px; background-color: lightblue;border-radius: 20px;">
            </div>
            <div class="row " style="margin-top: 20px;">
                <div class="image-column col-md-3 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="#">
                                    <img src="https://pengadaan.kemdikbud.go.id//assets/images/artikel/Artikel_Sos_Siplah.jpg" alt="">
                                </a>
                            </figure>               
                        </div>
                        <div class="image-content">
                            <p>Sosialisasi Sistem Informasi Pengadaan di Sekolah ( SIPLah 2020…</p>
                            <p>01 Agustus 2020 - 14:29:52 WIB</p>
                            <div class="link-btn">
                                <a href="#" class="btn-style-three">Detail</a>
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="image-column col-md-3 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/artikel/Artikel_PUPR_Tahap_II.jpg" alt=""></a>
                            </figure>      
                        </div>
                        <div class="image-content">
                            <p>Sosialisasi Strategi Pengadaan Jasa Konstruksi berdasarkan PERMEN PUPR 14/2020…</p>
                            <p>03 Juli 2020 - 11:18:02 WIB</p>
                            <div class="link-btn">
                                <a href="cause-details.html" class="btn-style-three">Detail</a>
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="image-column col-md-3 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/artikel/Thm_Artikel.jpg" alt=""></a>
                            </figure>                  
                        </div>
                        <div class="image-content">
                            <p>Sosialisasi Peraturan Menteri PUPR No. 14/2020 tentang Standar dan…</p>
                            <p>13 Juni 2020 - 10:37:51 WIB</p>
                            <div class="link-btn">
                                <a href="cause-details.html" class="btn-style-three">Detail</a>
                            </div>              
                        </div>
                    </div>
                </div>

                <div class="image-column col-md-3 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/artikel/Ekatalog_Artikel.jpg" alt=""></a>
                            </figure>      
                        </div>
                        <div class="image-content">
                            <p>Video Conference Bimbingan Teknis Katalag Elektronik versi 5.0</p>
                            <p>06 Juni 2020 - 12:49:29 WIB</p>
                            <div class="link-btn">
                                <a href="cause-details.html" class="btn-style-three">Detail</a>
                            </div>              
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="{{url('artikel_penyedia')}}"><button class="btn btn-info" style="border-radius: 20px;">Artikel Selanjutnya</button></a>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    <!--End couses-section-->


    <!--welcome-section-->
    @section('follow-me')
        <div class="container-fullwidth">
            <div class="row">
                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="image-holder">
                        <figure>
                            <img src="images/hmmm.jpg" alt="" style="opacity: 0.7">
                        </figure>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="image-content">
                        <div class="sec-title">
                            <h3>Apa Yang Bisa <span>Kami Bantu</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        </div>
                        <div class="item-list">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item text-center">
                                        <div class="icon-box">
                                            <span class="flaticon-charity-donation"></span>
                                        </div>
                                        <h6>Become Donator</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item text-center">
                                        <div class="icon-box">
                                            <span class="flaticon-saving-pig"></span>
                                        </div>
                                        <h6>Fundrising</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item text-center">
                                        <div class="icon-box">
                                            <span class="flaticon-users-group"></span>
                                        </div>
                                        <h6>Become Volunteer</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item text-center">
                                        <div class="icon-box">
                                            <span class="flaticon-people"></span>
                                        </div>
                                        <h6>Adopt a Child</h6>
                                    </div>
                                </div>
                            </div>                                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    <!--End welcome-section-->
    @section('berlanggana')
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 right-side">
                    <div class="section-text">
                        <h5>Hubungi Kami : </h5>
                    </div>
                    <div class="icon-links">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <form method="post" action="http://html.tonatheme.com/2017/charity2/index.html" class="subscribe-form">
                        <div class="form-group">
                            <input type="email" name="useremail" value="" placeholder="Enter Your Email Address" required="">

                            <button type="submit">Berlanganan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
         @section('script')
  
<script type="text/javascript" src="js/jquery-2.1.4.js"></script> 
        </script>
        @endsection


      
    


    <!--End sponsors-subscribe Style-->
