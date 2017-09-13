@extends('layout.master')

@section ('sidebar-sni-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/user/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/user/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/sni" class="waves-effect active"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#"class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/tips" class="waves-effect"><i class="ti-help p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection

@section ('breadcrumb-sni-user')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Informasi Sertifikasi</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Sistem</a></li>
                            <li><a href="{{env('APP_URL')}}/user/dashboard">Dashboard</a></li>
                            <li class="active">SNI</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section('isi-sni-user')
<div class="col-sm-12">
                    <form action="{{url('sni-proses')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="white-box">
                            <h3 class="box-title">File Upload 1</h3>
                            <label for="input-file-max-fs">Silahkan upload file Struktur Organisasi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-sni-1" data-default-file="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_1}}" value="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_1}}" required=""/> 
                        </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 2</h3>
                            <label for="input-file-max-fs">Silahkan upload file Diagram alir proses produksi/penyedia jasa termasuk jumlah line proses produksi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-sni-2" data-default-file="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_2}}" value="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_2}}" required=""/> </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 3</h3>
                            <label for="input-file-disable-remove">Silahkan upload dokumen Sistem Manajemen Mutu (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-sni-3" data-default-file="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_3}}" value="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_3}}" required=""/> </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 4</h3>
                            <label for="input-file-disable-remove">Silahkan upload Daftar Induk Dokumen / Daftar Informasi terdokumentasi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-sni-4" data-default-file="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_4}}" value="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_4}}" required=""/> </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 5</h3>
                            <label for="input-file-disable-remove">Silahkan upload Diagram alir proses Sistem Manajemen Mutu (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-sni-5" data-default-file="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_5}}" value="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_5}}" required=""/> </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 6</h3>
                            <label for="input-file-disable-remove">Silahkan upload Rekaman Audit Internal dan Tinjauan Manajemen (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify"  data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-sni-6" data-default-file="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_6}}" value="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->file_upload_sni_6}}" required=""/>
                             </div>
                    
                         <div class="row button-box">
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <input class="btn btn-block btn-success" type="submit" value="Kirim"/>
                        </div>
                        <br>

                        <div class="col-lg-3 col-sm-6 col-xs-12">

                            <a href="{{env('APP_URL')}}/user/lihat-dokumen-sni">
                            <div  class="btn btn-block btn-danger" >Download</div></a>
                        </div>
                       <br>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <a href="{{env('APP_URL')}}/user/upload-bukti-pembayaran-sni">
                            <div  class="btn btn-block btn-warning" >Upload Bukti Pembayaran</div>
                            </a>
                        </div>
                        <br>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <a href="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$sni_p->surat_pengesahan_SNI}}" target="_blank">
                            <div  class="btn btn-block btn-info" >Surat Pengesahan</div>
                            </a>
                        </div>
                        
                    </div>
                    <br>
                    </form>
                </div>
    @endsection
