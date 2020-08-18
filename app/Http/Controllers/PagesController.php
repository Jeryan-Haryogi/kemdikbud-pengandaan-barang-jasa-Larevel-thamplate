<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  
  public function index() 
  {
  	return view('home');
  }

   public function regulasi_all() {
   	return view('pages.regulasi');
   }
   public function artikel_penyedia() {
   	return view('pages.artikel_penyedia');
   }
   public function non_penyedia() {
   	return view('pages.non_penyedia');
   }
   public function video() {
   	return view('pages.vidio');
   }
   public function kegiatan_registrasi()
   {
   	return view('pages.kegiatan-registrasi');
   }
   public function kegiatan_unduh_materi() 
   {
   	   	return view('pages.kegiatan-unduh-materi');

   }
   public function gallery()
   {
   	return view('pages.gallery');
   }
   public function kontak()
   {
   	return view('pages.kontak');
   }
}
