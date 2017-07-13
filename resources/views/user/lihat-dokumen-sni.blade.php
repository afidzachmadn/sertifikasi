@extends('layout.master')

@section ('sidebar-sni-user')
<li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="/user/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="/user/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="/user/sni" class="waves-effect active"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#"class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
                     <li> <a href="/user/tips" class="waves-effect"><i class="ti-help p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection

@section ('breadcrumb-lihat-dokumen-sni')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Sertifikasi Terpadu</h4> 
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li><a href="/user/dashboard">Dashboard</a></li>
                            <li><a href="/user/sni">SNI</a></li>
                            <li class="active">Lihat dokumen SNI</li>

                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
 </div>
@endsection

@section('isi-lihat-dokumen-sni')

<div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title">List seluruh dokumen persyaratan SNI</h3>
                            <p class="text-muted">Di page ini anda dapat mendownload seluruh persyaratan dokumen SNI yang anda telah upload sebelumnya, jika ada kesalahan dimohon untuk mengupload kembali.</p>
                            <table id="mainTable"  class="table editable-table table-bordered table-striped m-b-0" >
                                <thead>
                                    <tr >
                                        <th class="text-center">Nama Dokumen</th>
                                        <th class="text-center">Link download</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">Struktur Organisasi</td>
                                        <td class="text-center"><a href="{{env('APP_URL')}}/storage/pdf/sni/{{$profile->file_upload_sni_1}}" target="_blank">download</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center">Diagram alir proses produksi/penyedia jasa termasuk jumlah line proses produksi</td>
                                        <td class="text-center"><a href="{{env('APP_URL')}}/storage/pdf/sni/{{$profile->file_upload_sni_2}}" target="_blank">download</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center">Sistem Manajemen Mutu</td>
                                        <td class="text-center"><a href="{{env('APP_URL')}}/storage/pdf/sni/{{$profile->file_upload_sni_3}}" target="_blank">download</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center">Daftar Induk Dokumen / Daftar Informasi terdokumentasi</td>
                                        <td class="text-center"><a href="{{env('APP_URL')}}/storage/pdf/sni/{{$profile->file_upload_sni_4}}" target="_blank">download</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center">Diagram alir proses Sistem Manajemen Mutu</td>
                                        <td class="text-center"><a href="{{env('APP_URL')}}/storage/pdf/sni/{{$profile->file_upload_sni_5}}" target="_blank">download</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center">Rekaman Audit Internal dan Tinjauan Manajemen</td>
                                        <td class="text-center"><a href="{{env('APP_URL')}}/storage/pdf/sni/{{$profile->file_upload_sni_6}}" target="_blank">download</a></td>
                                        
                                    </tr>
                                    
                                </tbody>
                                
                            </table>
                        </div>
                    </div>                  
                
               

@endsection
