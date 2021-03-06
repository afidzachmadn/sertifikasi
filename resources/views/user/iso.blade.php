@extends('layout.master')

@section ('sidebar-iso-user')
<li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="{{env('APP_URL')}}/user/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/user/iso" class="waves-effect active"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#"class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/tips" class="waves-effect"><i class="ti-help p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection

@section ('breadcrumb-iso-user')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Informasi Sertifikasi</h4> 
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Sistem</a></li>
                            <li><a href="{{env('APP_URL')}}/user/dashboard">Dashboard</a></li>
                            <li class="active">ISO</li>

                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
 </div>
@endsection

@section('isi-iso-user')

                    
                <div class="col-sm-12">
                    <form action="{{url('iso-proses')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="white-box">
                            <h3 class="box-title">File Upload 1</h3>
                            <label for="input-file-max-fs">Silahkan upload file Struktur Organisasi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-iso-1" data-default-file="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_1}}" value="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_1}}" required=""/> 
                        </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 2</h3>
                            <label for="input-file-max-fs">Silahkan upload file Diagram alir proses produksi/penyedia jasa termasuk jumlah line proses produksi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-iso-2" data-default-file="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_2}}" value="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_2}}" required=""/> </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 3</h3>
                            <label for="input-file-disable-remove">Silahkan upload dokumen Sistem Manajemen Mutu (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-iso-3" data-default-file="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_3}}" value="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_3}}" required=""/> </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 4</h3>
                            <label for="input-file-disable-remove">Silahkan upload Daftar Induk Dokumen / Daftar Informasi terdokumentasi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-iso-4" data-default-file="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_4}}" value="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_4}}" required=""/> </div>
                    
                    
                        <div class="white-box" >
                            <h3 class="box-title">File Upload 5</h3>
                            <label for="input-file-disable-remove">Silahkan upload Diagram alir proses Sistem Manajemen Mutu (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-iso-5" data-default-file="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_5}}" value="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_5}}" required=""/> </div>
                    
                    
                        <div class="white-box">
                            <h3 class="box-title">File Upload 6</h3>
                            <label for="input-file-disable-remove">Silahkan upload Rekaman Audit Internal dan Tinjauan Manajemen (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify"  data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-iso-6" data-default-file="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_6}}" value="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->file_upload_iso_6}}" required=""/>
                        </div>


                        
                    <div class="row button-box">
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <input class="btn btn-block btn-success" type="submit" value="Kirim"/>
                        </div>
                        <br>

                        <div class="col-lg-3 col-sm-6 col-xs-12">

                            <a href="{{env('APP_URL')}}/user/lihat-dokumen-iso">
                            <div  class="btn btn-block btn-danger" >Download</div></a>
                        </div>
                       <br>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <a href="{{env('APP_URL')}}/user/upload-bukti-pembayaran-iso">
                            <div  class="btn btn-block btn-warning" >Upload Bukti Pembayaran</div>
                            </a>
                        </div>
                        <br>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <a href="{{env('APP_URL')}}/storage/hasil-upload/pdf/iso/hasil-terbit-sertifikat/{{$iso_p->surat_pengesahan_ISO}}" target="_blank">
                            <div  class="btn btn-block btn-info" >Surat Pengesahan</div>
                            </a>
                        </div>
                        
                    </div>
                    <br>
                    </form>
                </div>
               

@endsection