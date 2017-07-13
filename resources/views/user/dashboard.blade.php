@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="{{env('APP_URL')}}/user/dashboard" class="waves-effect active"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/user/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#"class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
                     <li> <a href="/user/tips" class="waves-effect"><i class="ti-help p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection

@section ('header-dashboard-user')
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-wrapper p-b-10 collapse in">
                                <div id="owl-demo" class="owl-carousel owl-theme">
                                    <div class="item"><img src="../plugins/images/heading-bg/slide3.jpg" alt="Owl Image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
                
@section ('breadcrumb-dashboard-user')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Sertifikasi Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->
               
                    
                     <div class="col-lg-6 col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Status ISO
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Jika permintaan sertifikasi ISO anda sudah di tindak lanjuti oleh tim kami, maka anda akan melihat status permintaan anda menjadi "Terverifikasi". Jika anda merasa telah mengirimkan data-data pendukung dan status sertifikasi ISO anda masih "Belum Terverifikasi" dalam kurun waktu yang di tentukan, dimohon untuk menginformasikannya kepada kami melalui form bantuan yang ada di menu tips penggunaan atau silahkan telpon di call center kami. </p>
                                </div>
                                <div class="text-center">
                                <!--<div class="btn btn-danger">Belum Terverifikasi
                                    </div>
                                    <span><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </button>
                                </span>-->
                                    <img src="{{env('APP_URL')}}/storage/img/{{$status_iso->status_ISO}}.png" class="text-center" class="img-responsive" />
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"> Status SNI
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Jika permintaan sertifikasi SNI anda sudah di tindak lanjuti oleh tim kami, maka anda akan melihat status permintaan anda menjadi "Terverifikasi". Jika anda merasa telah mengirimkan data-data pendukung dan status sertifikasi SNI anda masih "Belum Terverifikasi" dalam kurun waktu yang di tentukan, dimohon untuk menginformasikannya kepada kami melalui form bantuan yang ada di menu tips penggunaan atau silahkan telpon di call center kami. </p>
                                </div>
                                <div class="text-center">
                                <!--<div class="btn btn-success">Terverifikasi
                                </div>
                                    <span><button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i> </button>
                                </span>-->
                                    <img src="{{env('APP_URL')}}/storage/img/{{$status_sni->status_SNI}}.png" class="text-center" class="img-responsive" />
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>
                

@endsection