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
                                 <li class="current"><a href="{{url('regulasi')}}">Regulasi</a>
                                  
                                </li>
                                 <li class="dropdown"><a href="#">Artikel</a>
                                    <ul>
                                        <li><a href="{{url('artikel_penyedia')}}">Penyedia</a></li>
                                        <li class="current"><a href="{{url('non_penyedia')}}">Non Penyedia</a></li>
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
                                    <li ><a href="{{url('/')}}">Home</a></li>
                                 <li class="current"><a href="{{url('regulasi')}}">Regulasi</a>
                                  
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
                    </nav><!-- Main Menu End-->
                </div>                
            </div>
        </div>
        @endsection
@section('slider')
<div class="container" style="margin-top: 80px;">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h3>Unduh Regulasi Pengadaan Barang dan Jasa</h3>
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
	              <th >Kategori</th>
	              <th>Nomor</th>
	              <th >Tentang</th>
	              <th >Download</th>
            </tr>
        </thead>
        <tbody>
         		            <tr>
	            	<td align="center"> 1 </td>
	            	<td>SOP</td>
	            	<td>LKPP</td>
	            	<td>Surat Edaran Kepala LKPP Nomor 4 Tahun 2020</td>
	            	<td align="center" class="text-center" ><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Surat_Edaran_Kepala_LKPP_Nomor_4_Tahun_2020_1468_1.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	                <tr>
	            	<td align="center" > 2 </td>
	            	<td>SOP</td>
	            	<td>LKPP</td>
	            	<td>Prosedur Verifikasi Online SPSE di Kementerian Pendidikan dan Kebudayaan</td>
	            	<td align="center" class="text-center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Prosedur Verifikator SPSE di Kemendikbud_.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 3 </td>
	            	<td>SOP</td>
	            	<td>7</td>
	            	<td>Surat Edaran (SE) No. 7 Tahun 2020 tentang Pakaian Kerja pegawai di lingkungan Kementerian Pendidikan dan Kebudayaan</td>
	            	<td class="text-center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/SE Sesjen No 7 Thn 2020 ttg Pakaian Kerja Pegawai di Lingkungan Kemendikbud.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	             <tr>
	            	<td align="center"> 4 </td>
	            	<td>SOP</td>
	            	<td>2</td>
	            	<td>Surat Edaran (SE) Menteri Pendidikan dan Kebudayaan No.2 Tahun 2020 tentang Pencegahan dan penanganan CORONA VIRUS DISEASE (CONVID-19) di Kementerian Pendidikan dan Kebudayaan</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/SE Nomor 2 Tahun 2020 tentang Pencegahan dan Penanganan Corona di Kemendikbud.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 5 </td>
	            	<td>SOP</td>
	            	<td>4</td>
	            	<td>Surat Edaran (SE) Sekretaris Jenderal No. 4 Tahun 2020 tentang Pelaksanaan Pengadaan Barang/jasa Tahun Anggaran 2020 di kementerian Pendidikan dan Kebudayaan</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/26157.A7.LK.2020 Tinjut SE.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 6 </td>
	            	<td>Peraturan</td>
	            	<td>46</td>
	            	<td>Rincian Tugas Unit Kedja di lingkungan Kementerian Pendidikan dan Kebudayaan</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 7 </td>
	            	<td>Peraturan</td>
	            	<td>45</td>
	            	<td>Organisasi dan Tata Kerja Kementerian Pendidikan dan Kebudayaan</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 8 </td>
	            	<td>Peraturan</td>
	            	<td>82</td>
	            	<td>Peraturan Persiden RI tentang Kementerian Pendidikan dan Kebudayaan</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	    <tr>
	            	<td align="center"> 9 </td>
	            	<td>Standar Dokumen</td>
	            	<td>5</td>
	            	<td>STANDAR DOKUMEN PEMILIHAN MELALUI PENGADAAN LANGSUNG UNTUK PENGADAAN BARANG/JASA LAINNYA/JASA KONSULTANSI (Doc)</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Keputusan Deputi I Nomor 5 Tahun 2018.docx"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 10 </td>
	            	<td>Standar Dokumen</td>
	            	<td>5</td>
	            	<td>STANDAR DOKUMEN PEMILIHAN MELALUI PENGADAAN LANGSUNG UNTUK PENGADAAN BARANG/JASA LAINNYA/JASA KONSULTANSI (PDF)</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Keputusan Deputi I Nomor 5 Tahun 2018.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	             <tr>
	            	<td align="center"> 11 </td>
	            	<td>Standar Dokumen</td>
	            	<td>4</td>
	            	<td>STANDAR DOKUMEN PEMILIHAN MELALUI PENUNJUKAN LANGSUNG UNTUK PENGADAAN BARANG/JASA LAINNYA/JASA KONSULTANSI (Doc)</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Keputusan Deputi I Nomor 4 Tahun 2018.docx"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 12 </td>
	            	<td>Standar Dokumen</td>
	            	<td>4</td>
	            	<td>STANDAR DOKUMEN PEMILIHAN MELALUI PENUNJUKAN LANGSUNG UNTUK PENGADAAN BARANG/JASA LAINNYA/JASA KONSULTANSI (PDF)</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Keputusan Deputi I Nomor 4 Tahun 2018.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 13 </td>
	            	<td>Standar Dokumen</td>
	            	<td>3</td>
	            	<td>STANDAR DOKUMEN PEMILIHAN MELALUI TENDER, SELEKSI, DAN TENDER CEPAT
UNTUK PENGADAAN BARANG/JASA LAINNYA/JASA KONSULTANSI (Doc)</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Keputusan Deputi I Nomor 3 Tahun 2018.docx"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	            	            <tr>
	            	<td align="center"> 14 </td>
	            	<td>Standar Dokumen</td>
	            	<td>3</td>
	            	<td>STANDAR DOKUMEN PEMILIHAN MELALUI TENDER, SELEKSI, DAN TENDER CEPAT
UNTUK PENGADAAN BARANG/JASA LAINNYA/JASA KONSULTANSI (PDF)</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Keputusan Deputi I Nomor 3 Tahun 2018.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
	            </tr>
	             <tr>
	            	<td align="center"> 15 </td>
	            	<td>SOP</td>
	            	<td>4</td>
	            	<td>Layanan Penyelesaian Sengketa Pengadaan Barang/Jasa Pemerintah</td>
	            	<td align="center"><a href="https://pengadaan.kemdikbud.go.id/regulasi/download/Perka_LKPP_no__4_tahun_20163.pdf"><button><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
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
