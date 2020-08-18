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
                                        <li class="current"><a href="{{url('kegiatan-unduh-materi')}}">Unduh Materi</a></li>
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
                                        <li class="current"><a href="{{url('kegiatan-unduh-materi')}}">Unduh Materi</a></li>
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
			<h3 class="text-info">Unduh Materi Kegiatan Pengadaan Barang dan Jasa</h3>
            <br>
			<hr  size="10px"  width="20%" style="margin: auto; height: 8px; background-color: lightblue;border-radius: 20px;">
		</div>
	</div>
</div>
@endsection

@section('welcome-section')
<div class="container  " style="margin-top: 30px;">
            <div class="row">
                <div class="image-column col-sm-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
             <th >No</th>
                  <th>Nama Kegiatan</th>
                  <th>Tanggal Kegiatan</th>
                  <th>Download</th>
                </tr>
            </tr>
        </thead>
        <tbody>

                                                <tr>
                    <td align="center"> 1 </td>
                    <td>Sosialisasi Peraturan Menteri PUPR No.14/2020 Tahap III</td>
                    <td>16 Juli 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Sosialisasi_PUPR_16_Juli.rar"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 2 </td>
                    <td>Bimbingan Teknis Pengadaan Pekerjaan Jasa Konstruksi PERMEN PUPR 14/2020</td>
                    <td>8 s.d. 10 Juli 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_Bimtek_PERMEN_PUPR_8_Juli_2020.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 3 </td>
                    <td>Sosialisasi Peraturan Menteri PUPR No. 14/2020 </td>
                    <td>17 Juni 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Pokok_Perubahan_Pengaturan_Permen_14__2020_lengkap.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 4 </td>
                    <td>Sosialisasi Katalog Elektronik Sektoral versi 5.0</td>
                    <td>3 s.d. 5 Juni 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_-_VC_3_4_5_Juni_2020.rar"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 5 </td>
                    <td>Panduan e-Katalog 5.0 </td>
                    <td>LKPP</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Panduan_-_eKatalog_ver50_-_LKPP.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 6 </td>
                    <td>Materi Sosialisasi dan Bimbingan Teknis SIMPEL (VIDEO CONFERENCE)</td>
                    <td>22 April 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/SIMPEL_2020.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 7 </td>
                    <td>Bimbingan Teknis penggunaan Aplikasi Katalog Elektronik Versi 5.0 Pasca Tayang</td>
                    <td>21 April 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Info_PBJ_Katalog_Sektoral_Dikbud.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 8 </td>
                    <td>Dokumen persyaratan penyesuaian/Inspassing (FPPBJ)</td>
                    <td>21 April 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Dokumen_Penyesuaian_Inpassing1.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 9 </td>
                    <td>Materi Sosialisasi dan Bimbingan Teknis SIPPBJ (VIDEO CONFERENCE)</td>
                    <td>6 s.d. 9 April 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_VICON_SIPPBJ_6-9_April_2020.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 10 </td>
                    <td>Materi Penilaian Angka Kredit Fungsional Pengelola PBJ - 12 sd 14 Maret 2020</td>
                    <td>12 sd 14 Maret 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi 12 sd 14 Maret 2020.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 11 </td>
                    <td>Kebijakan Sistem Pengadaan Secara Elektronik (SPSE) - Kemendikbud</td>
                    <td>9 Maret 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Kebijakan_SPSE_untuk_Kemendikbud_(9_Maret_2020)_-_LKPP3.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 12 </td>
                    <td>Sosialisasi dan BImtek SIMPEL PTN Kemendikbud - Regional III Bali</td>
                    <td>27 s.d. 29 Februari 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_SIMPEL_-_Regional_III_-_Bali.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 13 </td>
                    <td>Sosialisasi dan BImtek SIMPEL PTN Kemendikbud - Regional II Yogyakarta</td>
                    <td>20 s.d. 22 Februari 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_-_SIMPEL_PTN-DIKBUD_Yogyakarta_2020.rar"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 14 </td>
                    <td>Sosialisasi dan BImtek SIMPEL PTN Kemendikbud - Regional I Jakarta</td>
                    <td>13 s.d 15 Februari 2020 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_-_Kebijakan_Simpel.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 15 </td>
                    <td>Rapat Koordinasi Pejabat Fungsional Pengadaan Barang/Jasa - Kemendikbud</td>
                    <td>6 Februari 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_-_Rakor_Pejabat_Fungsional_PBJ_KEmendikbud_-_6_Februari_2020.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 16 </td>
                    <td>Bimtek Perencanaan PBJ Satker PTN Kemendikbud - 30 Januari 2020</td>
                    <td>30 Januari 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/How_To_SIRENBAJA.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 17 </td>
                    <td>Bimtek Perencanaan PBJ Satker PTN Kemendikbud - 29 Januari 2020</td>
                    <td>29 Januari 2020</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_-_29_Januari_2020.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 18 </td>
                    <td>Bimbingan Teknis Perencanaan Pengadaan Barang/Jasa TA 2020 Tahap II </td>
                    <td>12 s.d. 14 Desember 2019</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi_-_Sirenbaja_Tahap_II_-_Jakarta1.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 19 </td>
                    <td>Bimtek Perencanaan Pengadaan Barang/Jasa TA 2020 - 28 s.d. 30 November 2019</td>
                    <td>28 s.d. 30 November 2019</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Bimtek SIRENBAJA 28 - 30 November 2019.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 20 </td>
                    <td>Sosialisasi Sitem Monev PBJ, Bimbingan Teknis Sirenbaja & Simpel - 28 s.d. 29 Oktober 2019</td>
                    <td>28 s.d. 29 Oktober 2019</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Malang.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 21 </td>
                    <td>Bimbingan Teknis Aplikasi SiRenBaja dan Aplikasi SIMPeL - 16 s.d. 17 Oktober 2019</td>
                    <td>16 s.d. 17 Oktober 2019</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Kegiatan.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 22 </td>
                    <td>Surat Edaran SIRENBAJA</td>
                    <td>3 Oktober 2019</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/SE_SIRenBaja.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 23 </td>
                    <td>Materi e-Katalog Sektoral Buku Nonteks Tahun 2019</td>
                    <td>25 Juni 2019</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi e-Katalog Sektoral Buku Nonteks Tahun 2019.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 24 </td>
                    <td>Materi Sosialisasi Permen PUPR 7/2019 - Amarossa Cosmo
</td>
                    <td>24 s.d. 25 April 2019</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi KM and Partners.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>

                                <tr>
                    <td align="center"> 25 </td>
                    <td>Materi Sertifikasi Gelombang 1 - 2019
</td>
                    <td>27 Maret s.d. 29 Maret 2019</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Sertifikasi Gelombang 1 - 2019.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 26 </td>
                    <td>Materi Kegiatan Workshop Ahli Kontrak Angkatan 2 - Royal Kuningan Hotel</td>
                    <td>12 Maret s.d. 13 Maret 2019 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Workshop Angkatan 2.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 27 </td>
                    <td>Materi Kegiatan Workshop Aplikasi SPSE 4.3 - Hotel Aryaduta Makassar </td>
                    <td>28 Februari s.d. 1 Maret 2019 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Workshop e-procurement Makassar.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 28 </td>
                    <td>Materi Kegiatan Bimtek SPSE 4.3 - Salak Tower Hotel Bogor</td>
                    <td>25 s.d. 27 Februari 2019 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Bimtek SPSE 4.3 - Hotel Salak Tower 2019.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 29 </td>
                    <td>Materi Kegiatan Bimtek SPSE 4.3 - Santika Hotel Bintaro</td>
                    <td>18 s.d. 20 Februari 2019 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Kegiatan Bimtek SPSE 4.3 - Santika Hotel Bintaro.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 30 </td>
                    <td>Materi Kegiatan SIMPeL - Ambon Swiss bell Hotel</td>
                    <td>18 s.d. 19 Desember 2018 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Kegiatan SIMPeL - Ambon Swiss bell Hotel.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 31 </td>
                    <td>Materi Bimtek Vendor 15 s.d. 19 Desember 2018</td>
                    <td>15 s.d. 19 Desember 2018 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Bimtek Vendor 15 s.d. 19 Desember 2018.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 32 </td>
                    <td>Surat Edaran NOMOR:95931/A.A6.3/LK/2018</td>
                    <td>-</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/image4629.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 33 </td>
                    <td>Materi BIMTEK SPSE 4.3 - Indoluxe Hotel Yogyakarta</td>
                    <td>28 s.d. 29 November 2018 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi-BIMTEK-SPSE-4-3-Yogyakarta.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 34 </td>
                    <td>Bimtek SIMPeL Bangka Belitung - BW Suite Hotel Belitung</td>
                    <td>9 s.d. 10 November 2018</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/METERI BIMTEK-SIMPEL BELITUNG.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 35 </td>
                    <td>Reviu Sirenbaja Tahap 2 - Soll Marina Serpong</td>
                    <td>5 s.d. 7 November 218</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Reviu Sirenbaja Tahap 2.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 36 </td>
                    <td>Kegiatan Bimtek Sirenbaja - Hotel Peninsula</td>
                    <td>22 s.d. 24 Oktober 2018 </td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Kegiatan-Bimtek-Sirenbaja-2018-Hotel-Peninsula.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 37 </td>
                    <td>Materi Kegiatan Ambhara</td>
                    <td>27 s.d. 29 September 2018</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Kegiatan Ambhara 27-29 September 2018.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 38 </td>
                    <td>Materi SIMPeL Banjarmasin 2018</td>
                    <td>-</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi SIMPeL Banjarmasin.zip"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
                                <tr>
                    <td align="center"> 39 </td>
                    <td>Materi Pengantar - Pelatihan BIMTEK Vendor 2018 Versi 4.3 Batch 1 s/d 10</td>
                    <td>-</td>
                    <td align="center"><a href="https://pengadaan.kemdikbud.go.id/kegiatan/download/Materi Pengantar - Pelatihan Vendor.pptx"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                </tr>
        </tbody>
        
    </table>
                </div>
                </div>
                </div>
            </div>
        </div>
@endsection
  @section('script')

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable({
    	 "language": {
            "lengthMenu": "Halaman _MENU_ ",
            "zeroRecords": "Data Tidak Tersedia",
            "info": "Halaman _PAGE_ Dari  _PAGES_",
            "infoEmpty": "Tidak Ada Data Tersedia",
            "infoFiltered": "( Dari Data _MAX_ total records)"
        }
    });
} );
        </script>
        @endsection
