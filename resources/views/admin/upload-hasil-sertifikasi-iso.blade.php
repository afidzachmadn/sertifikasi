@extends('layout.master-admin')

@section ('sidebar-iso-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/admin/iso" class="waves-effect active"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/admin/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#" class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection


                
@section ('breadcrumb-upload-hasil-sertifikasi-iso-admin')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Informasi Sertifikasi</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Sistem</a></li>
                            <li><a href="{{env('APP_URL')}}/admin/dashboard">Dashboard</a></li>
                            <li><a href="{{env('APP_URL')}}/admin/iso">ISO</a></li>
                            <li class="active">Upload Hasil Sertifikasi ISO</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-upload-hasil-sertifikasi-iso-admin")

<div class="col-sm-12">
                     <form action="{{env('APP_URL')}}/upload-hasil-terbit-sertifikat-iso" method="post" enctype="multipart/form-data">
                       {{csrf_field()}}
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Upload hasil sertifikat yang telah terbit</h3>
                            <p class="text-muted m-b-30"> Untuk mengupload silahkan pilih perusahaan yang anda ingin terbitkan sertifikat ISO nya. 
                            </br>
                            <strong>
                            Catatan:<br>
                            1.Jika nama perusahaan tidak terdapat pada pilihan, silahkan konfirmasi pembayaran untuk sertifikasi ISO dari perusahaan tersebut terlebih dahulu.<br>
                            2. Pastikan petugas/pegawai survei lapangan telah melaporkan laporan perusahaan yang anda maksud.</strong>
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
                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="pdf-hasil-terbit-sertifikat-iso" data-default-file="" required=""/> 
                        </div>

                        <div class="row button-box">
                            <div class="col-lg-12">
                                <input class="btn btn-block btn-success" type="submit" value="Kirim"/>

                            </div>
                        </div>
                    </form>
</div>












    
@endsection