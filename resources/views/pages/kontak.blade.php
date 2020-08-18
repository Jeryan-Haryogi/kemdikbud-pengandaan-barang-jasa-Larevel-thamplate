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
                                <li><a href="{{url('gallery')}}">Gallery</a></li>
                                <li class="current"><a href="{{url('kontak')}}">Kontak</a></li>
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
                                 <li><a href="{{url('regulasi')}}">Regulasi</a>
                                  
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
                                <li class="current"><a href="{{url('kontak')}}">Kontak</a></li>
                            </ul>
                        </div>                    
                    </nav><!-- Main Menu End-->
                </div>                
            </div>
        </div>
        @endsection
@section('slider')
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <img src="https://image.freepik.com/free-vector/flat-color-modern-isometric-illustration-web-development_145666-25.jpg" width="100%">
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h3>Kirim <span>Pesan</span></h3>
                    </div>                    
                    <div class="default-form-area">
                        <form id="contact-form" name="contact_form" class="default-form" action="http://html.tonatheme.com/2017/charity2/inc/sendmail.php" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text"  style="color: black;" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  style="color: black;" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" style="color: black;" placeholder="Telp">
                                    </div>
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea placeholder="Pesan" style="color: black;"></textarea>
                                    </div>
                                     <button class="btn-style-two" type="submit" data-loading-text="Please wait...">Kirim</button>
                                </div>
                            </div>                                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection


    <!--Start Google map area-->
   
  <!--   <section class="google-map-area">
        <div class="container">
            <div 
                class="google-map" 
                id="contact-google-map" 
                data-map-lat="44.799511" 
                data-map-lng="-106.951309" 
                data-icon-path="images/resource/map-marker.png" 
                data-map-title="Sheridan School Special Education" 
                data-map-zoom="12"
                data-markers='{
                    "marker-1": [44.799511, -106.951309, "<h4>Sheridan School Special Education</h4><p>201 N Connor St Sheridan, WY 82801</p>","images/resource/map-marker.png"]
                }'>

            </div>                    
        </div>          
     
    </section> -->
    <!--End Google map area-->  


           @section('script')
  
<script type="text/javascript" src="js/jquery-2.1.4.js"></script> 
        </script>
        @endsection
