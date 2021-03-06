@extends('layout.master-admin')

@section ('sidebar-iso-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/admin/iso" class="waves-effect active"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/admin/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#" class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection


                
@section ('breadcrumb-iso-admin')
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
                            <li class="active">ISO</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-iso-admin")

                     <div class="col-md-12">
                        <div class="white-box animated jello">
                            <h3 class="text-center" class="box-title" >URUTAN UNTUK MEMVERIFIKASI PERUSAHAAN</h3>
                            <div class="row thin-steps" >
                                <div class="col-md-4 column-step active" style="background-color:#5c74b8">
                                    <div class="step-number">1</div>
                                    <div class="step-title">Pembayaran</div>
                                    <div class="step-info">Konfirmasi Pembayarannya</div>
                                </div>
                                <div class="col-md-4 column-step active" style="background-color:#5c74b8">
                                    <div class="step-number">2</div>
                                    <div class="step-title">Pilih Petugas</div>
                                    <div class="step-info">Pilih Petugas survei lapangannya</div>
                                </div>
                                <div class="col-md-4 column-step active" style="background-color:#5c74b8">
                                    <div class="step-number">3</div>
                                    <div class="step-title">Konfirmasi Petugas</div>
                                    <div class="step-info">Tunggu konfirmasi data-datanya</div>
                                </div>
                                <div class="col-md-4 column-step active" style="background-color:#5c74b8">
                                    <div class="step-number">4</div>
                                    <div class="step-title">Double Checklist</div>
                                    <div class="step-info">Teliti kembali seluruh persyaratannya</div>
                                </div>

                                <div class="col-md-4 column-step active" style="background-color:#5c74b8">
                                    <div class="step-number">5</div>
                                    <div class="step-title">Upload</div>
                                    <div class="step-info">Upload hasil terbit sertifikatnya</div>
                                </div>
                                
                                <div  class="col-md-4 column-step active" style="background-color:#5c74b8" >
                                    
                                    <div class="step-number">6</div>
                                    <div class="step-title">Final</div>
                                    <div class="step-info">Konfirmasi verifikasinya</div>
                                    
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-6 col-sm-6 text-center">
                        <div class="panel panel-danger">
                            <div class="panel-heading"> Pendaftar yang menunggu konfirmasi pembayaran
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Menu ini akan menampilkan seluruh pendaftar ISO yang pembayarannya belum di konfirmasi</p>
                                </div>
                                
                                <a href="{{env('APP_URL')}}/admin/pembayaran-belum-terkonfirmasi-iso" class="btn btn-block btn-danger waves-effect waves-light" style="color: white">Lihat</a>
                                
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 text-center">
                        <div class="panel">
                            <div class="panel-heading" style="background-color:#01c0c8;color:white"> Pendaftar yang sudah terkonfirmasi pembayarannya
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Menu ini akan menampilkan seluruh pendaftar yang pembayarannya ISO-nya sudah terkonfirmasi</p>
                                </div>
                                
                                <a href="{{env('APP_URL')}}/admin/pembayaran-terkonfirmasi-iso" class="btn btn-block btn-default waves-effect waves-light" style="background-color:#01c0c8;color:white">Lihat</a>
                                
                                <br>
                            </div>
                        </div>
                    </div>


                     <div class="col-lg-12 col-sm-12 text-center">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#ff497a;color:white;">Pegawai
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body" >
                                    <p>Pilih pegawai untuk melakukan inspeksi dan terjun ke lapangan</p>
                                </div>
                                <a href="{{env('APP_URL')}}/admin/pilih-pegawai-inspeksi-iso" class="btn btn-block btn-default waves-effect waves-light" style="color:white;background-color:#ff497a">Disini</a>
                                <br>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-sm-12 text-center">
                        <div class="panel panel-success">
                            <div class="panel-heading">Upload hasil sertifikat ISO
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Menu ini digunakan untk mengupload hasil sertifikat iso yang telah terbit</p>
                                </div>
                                <a href="{{env('APP_URL')}}/admin/upload-sertifikat-iso" class="btn btn-block btn-success waves-effect waves-light" style="color: white">Disini</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 text-center">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Pendaftar yang menunggu verifikasi anda
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Menu ini akan menampilkan seluruh pendaftar untuk sertifikasi ISO yang belum anda konfirmasi</p>
                                </div>
                                
                                <a href="{{env('APP_URL')}}/admin/belum-terverifikasi-iso" class="btn btn-block btn-info waves-effect waves-light" style="color: white">Lihat</a>
                                
                                <br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 text-center">
                        <div class="panel panel-primary">
                            <div class="panel-heading"> Pendaftar yang sudah terverifikasi
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Menu ini akan menampilkan seluruh pendaftar untuk sertifikasi ISO yang telah terkonfirmasi</p>
                                </div>
                                <a href="{{env('APP_URL')}}/admin/terverifikasi-iso" class="btn btn-block btn-primary waves-effect waves-light" style="color: white">Lihat</a>
                                <br>
                            </div>
                        </div>
                    </div>
@endsection