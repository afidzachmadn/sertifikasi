@extends('layout.master-pegawai-lapangan')

@section ('sidebar-dashboard-pegawai-lapangan')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/pegawai-lapangan/dashboard" class="waves-effect active"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/pegawai-lapangan/upload-hasil-survei" class="waves-effect"><i class="ti-upload p-r-10"></i> <span class="hide-menu">Upload Hasil Survei</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/pegawai-lapangan/hapus-hasil-survei" class="waves-effect"><i class="ti-close p-r-10"></i> <span class="hide-menu">Hapus Hasil Survei</span></a> </li>
                     
@endsection

@section ('header-dashboard-pegawai-lapangan')
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-wrapper p-b-10 collapse in">
                                <div id="owl-demo" class="owl-carousel owl-theme">
                                    <div class="item"><img src="{{env('APP_URL')}}/plugins/images/heading-bg/slide3.jpg" alt="Owl Image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
                
@section ('breadcrumb-dashboard-pegawai-lapangan')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Informasi Sertifikasi</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Sistem</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-pegawai-lapangan")
 
            
            
                

@endsection