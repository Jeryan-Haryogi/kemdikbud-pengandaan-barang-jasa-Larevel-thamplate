@extends('../defult.defult-main')
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
                                <li class=""><a href="{{url('/')}}">Home</a></li>
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
                                <li class="current"><a href="{{url('gallery')}}">Gallery</a></li>
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
                                <li class=""><a href="{{url('/')}}">Home</a></li>
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
                                <li class="current"><a href="{{url('gallery')}}">Gallery</a></li>
                                <li><a href="{{url('kontak')}}">Kontak</a></li>
                            </ul>
                        </div>                    
                    </nav><!-- Main Menu End-->
                </div>                
            </div>
        </div>
        @endsection
      
@section('cause-section-penyedia')
 <div class="container" style="margin-top: -30px;">
 	<h2 class="text-info">Gallery</h2>
 	<br>
            <div class="row">
                <div class="image-column col-md-4 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="#"><img src="https://pengadaan.kemdikbud.go.id//assets/images/thumbnail/51291822_551101832038208_5065137520098934784_o.jpg" alt=""></a>
                            </figure>      
                        </div>
                        <div class="image-content">
                            <p>Workshop Ahli Kontrak Gelombang 1</p>
                            <p>03 Juli 2020 - 11:18:02 WIB</p>           
                        </div>
                    </div>
                </div>
                <div class="image-column col-md-4 col-sm-6 col-xs-12">
                      <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/thumbnail/bimtek_sirenbaja_millenium_tanah_abang1.jpg" alt=""></a>
                            </figure>                  
                        </div>
                        <div class="image-content">
                            <p>BIMTEK Perencanaan Pengadaan Barang/Jasa Kemendikbud Tahap III - Hotel Millenium</p>
                            <p>13 Juni 2020 - 10:37:51 WIB</p>
                        </div>
                    </div>
                </div>
                <div class="image-column col-md-4 col-sm-6 col-xs-12">
                    <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/thumbnail/bimtek_spse_4_3_yogyakarta.jpg" alt=""></a>
                            </figure>      
                        </div>
                        <div class="image-content">
                            <p>Bimbingan Teknis Peningkatan Kompetensi Tatakelola LPSE dan Aplikasi SPSE Versi 4.3 - Indoluxe Hotel Yogyakarta</p>
                            <p>06 Juni 2020 - 12:49:29 WIB</p>           
                        </div>
                    </div>
                </div>
                </div>
                <div class="image-column col-md-4 col-sm-6 col-xs-12">
                     <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/thumbnail/bimtek_simpel_hs_santika_bekasi.jpg" alt=""></a>
                            </figure>                  
                        </div>
                        <div class="image-content">
                            <p>BIMTEK Sistem Informasi Manajemen Pengadaan Langsung - HS Santika Bekasi</p>
                            <p>13 Juni 2020 - 10:37:51 WIB</p>              
                        </div>
                    </div>
                </div>
                <div class="image-column col-md-4 col-sm-6 col-xs-12">
                <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/thumbnail/bimtek_sirenbaja_ambhara_blok_m.jpg" alt=""></a>
                            </figure>      
                        </div>
                        <div class="image-content">
                            <p>BIMTEK Perencanaan Pengadaan Barang/Jasa Kemendikbud TA 2019 - Hotel Ambhara Blok M</p>
                            <p>06 Juni 2020 - 12:49:29 WIB</p>           
                        </div>
                    </div>               
                     </div>
                <div class="image-column col-md-4 col-sm-6 col-xs-12">
                   <div class="image-holder">
                        <div class="image-box">
                            <figure>
                                <a href="cause-details.html"><img src="https://pengadaan.kemdikbud.go.id//assets/images/thumbnail/bimtek_spse_vendor_gelombang_10.jpg" alt=""></a>
                            </figure>      
                        </div>
                        <div class="image-content">
                            <p>BIMTEK SPSE 4.3 ( GEL-10 ) - Jumat, 14 September 2018 di Kementerian Pendidikan dan Kebudayaan</p>
                            <p>03 Juli 2020 - 11:18:02 WIB</p>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="styled-pagination style-two container">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>                    
                    <li><a href="#">4</a></li>                   
                    <li><a class="next" href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                </ul>
            </div>
        </div>
@endsection
   @section('script')
  
<script type="text/javascript" src="js/jquery-2.1.4.js"></script> 
        </script>
        @endsection
