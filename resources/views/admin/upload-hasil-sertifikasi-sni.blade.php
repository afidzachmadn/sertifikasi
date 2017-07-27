@extends('layout.master-admin')

@section ('sidebar-sni-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="/admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="/admin/sni" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="/admin/sni" class="waves-effect active"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="one-stop-service.html" class="waves-effect"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection


                
@section ('breadcrumb-upload-hasil-sertifikasi-sni-admin')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Sertifikasi Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li><a href="/admin/dashboard">Dashboard</a></li>
                            <li><a href="/admin/sni">SNI</a></li>
                            <li class="active">Upload Hasil Sertifikasi sni</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-upload-hasil-sertifikasi-sni-admin")

<div class="col-sm-12">
                     <form action="{{env('APP_URL')}}/upload-hasil-terbit-sertifikat-sni" method="post" enctype="multipart/form-data">
                       {{csrf_field()}}
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Upload hasil sertifikat yang telah terbit</h3>
                            <p class="text-muted m-b-30"> Untuk mengupload silahkan pilih perusahaan yang anda ingin terbitkan sertifikat sni nya. 
                            </br>
                            <strong>Jika nama perusahaan tidak terdapat pada pilihan, silahkan konfirmasi pembayaran untuk sertifikasi sni dari perusahaan tersebut terlebih dahulu.</strong>
                            </p>
                            <h5 class="m-t-30">Pilih:</h5>
                           

                                <select class="form-control select2" type="text" name="nama-perusahaan">
                                
                                    <option>Nama Perusahaan</option>
                                    @foreach($userList as $user)
                                    <option value="{{$user->company_name}}">{{$user->company_name}}</option>
                                    
                                    @endforeach     

                                </select>
                        </div>
                        <div class="white-box">
                            <label for="input-file-max-fs">Silahkan upload disini</label>
                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-hasil-terbit-sertifikat-sni" data-default-file=""/> 
                        </div>

                        <div class="row button-box">
                            <div class="col-lg-12">
                                <input class="btn btn-block btn-success" type="submit" value="Kirim"/>

                            </div>
                        </div>
                    </form>
</div>










<!--
  <div>
                    <form action="http://localhost/user/upload-bukti-pembayaran-sni-proses" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="UgXxrjXQ53NfZRkYelltEnyg0PMffYXTLjNRSC4g">
                        <div class="white-box" class="col-sm-12 col-md-2 col-xs-12 col-lg-12">
                            <h3 class="box-title">File Upload Bukti Pembayaran sni</h3>
                            <label for="input-file-max-fs">Silahkan upload bukti pembayaran untuk permintaan sertifikasi sni anda (*JPG) (*Max 2MB)</label>
                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="jpg" name="pdf-bukti-pembayaran-sni" data-default-file="http://localhost/storage/img/bukti-pembayaran/sni/ArqlQUT30Xj9XKaShLv3HFVZlSacJhqYQB3JN5aK.jpeg" value="http://localhost/storage/img/bukti-pembayaran/sni/ArqlQUT30Xj9XKaShLv3HFVZlSacJhqYQB3JN5aK.jpeg"/> 
                        </div>

                        <div class="row button-box">
                            <div class="col-lg-12">
                                <input class="btn btn-block btn-success" type="submit" value="Kirim"/>

                            </div>
                        </div>
                        
                    </form>
    </div>
  
-->

    
@endsection