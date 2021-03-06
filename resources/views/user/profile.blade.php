@extends('layout.master')

@section ('sidebar-profile-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/user/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/user/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#"class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/tips" class="waves-effect"><i class="ti-help p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection

@section ('breadcrumb-profile-user')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Informasi Sertifikasi</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Sistem</a></li>
                            <li class="active">Profil</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section('isi-profile-user')

                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="{{env('APP_URL')}}/storage/hasil-upload/img/{{$profile->img_url}}"> 
                            </div>
                            <div class="user-btm-box">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12 b-r"><strong>Nama Perusahaan</strong>
                                        <p>{{$profile->company_name}}</p>
                                    </div> 
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12 b-r"><strong>Nomor Telpon</strong>
                                        <p>{{$profile->telp}}</p>
                                    </div>
                                </div>
                                <hr>
                                <!-- .row-->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12 b-r"><strong>Email</strong>
                                        <p>{{$profile->email}}</p>
                                    </div>     
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Alamat Perusahaan</strong>
                                        <p>{{$profile->address}}</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                     
                            <p class="m-t-30">{{$profile->description}}</p>
                        </div>
                    </div>
               
                <!-- .row -->
                
    @endsection
