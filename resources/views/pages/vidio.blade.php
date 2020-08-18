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
                                   <li ><a href="{{url('/')}}">Home</a></li>
                                 <li class=""><a href="{{url('regulasi')}}">Regulasi</a>
                                  
                                </li>
                                 <li class="dropdown"><a href="#">Artikel</a>
                                    <ul>
                                        <li><a href="{{url('artikel_penyedia')}}">Penyedia</a></li>
                                        <li><a href="{{url('non_penyedia')}}">Non Penyedia</a></li>
                                         <li class="current"><a href="{{url('video')}}">Videp</a></li>
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
                                    <li ><a href="{{url('/')}}">Home</a></li>
                                 <li class=""><a href="{{url('regulasi')}}">Regulasi</a>
                                  
                                </li>
                                 <li class="dropdown"><a href="#">Artikel</a>
                                    <ul>
                                        <li><a href="{{url('artikel_penyedia')}}">Penyedia</a></li>
                                        <li><a href="{{url('non_penyedia')}}">Non Penyedia</a></li>
                                         <li class="current"><a href="{{url('video')}}">Videp</a></li>
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
        @section('slider')
<div class="container" style="margin-top: 80px;">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Video Kegiatan Pengadaan Barang dan Jasa</h3>
            <br>
            <hr  size="10px"  width="20%" style="margin: auto; height: 8px; background-color: lightblue;border-radius: 20px;">
        </div>
    </div>
</div>
@endsection
@section('welcome-section')
<div class="container " style="margin-top: 20px;" >
    <div class="row">
        <div class="col-sm-3 ">
              <iframe class="iframe-article" alt="" width="100%" height="100%" src="https://www.youtube.com/embed/Rn8yDsmWJDI" frameborder="0"></iframe>
        </div>
          <div class="col-sm-3">
              <iframe class="iframe-article" alt="" width="100%" height="100%" src="https://www.youtube.com/embed/CSdol1Z0aqw" frameborder="0"></iframe>
        </div>
          <div class="col-sm-3">
            <iframe class="iframe-article" alt="" width="100%" height="100%" src="https://www.youtube.com/embed/nO_xLzcGjeU" frameborder="0"></iframe>
        </div>
          <div class="col-sm-3">
               <iframe class="iframe-article" alt="" width="100%" height="100%" src="https://www.youtube.com/embed/QP8PCAdt7MI" frameborder="0"></iframe>
        </div>
          <div class="col-sm-3">
               <iframe class="iframe-article" alt="" width="100%" height="100%" src="https://www.youtube.com/embed/Tr7r7jDZHyA" frameborder="0"></iframe>
        </div>
          <div class="col-sm-3">
              <iframe class="iframe-article" alt="" width="100%" height="100%" src="https://www.youtube.com/embed/_RGn7XnDVX0" frameborder="0"></iframe>
        </div>
          <div class="col-sm-3">
            <iframe class="iframe-article" alt="" width="100%" height="100%" src="https://www.youtube.com/embed/EI4JhD7Tus4" frameborder="0"></iframe>
        </div>

    </div>
     <p class="text-center" style="margin-top: 10px;">Showing : 7</p>
</div>
@endsection
           @section('script')
  
<script type="text/javascript" src="js/jquery-2.1.4.js"></script> 
        </script>
        @endsection
