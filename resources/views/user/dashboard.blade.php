@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
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

@section("isi-dashboard-user")
 <!-- .row -->
               
                    
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Status Verifikasi ISO
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Jika permintaan sertifikasi ISO anda sudah di tindak lanjuti oleh tim kami, maka anda akan melihat status permintaan anda menjadi "Terverifikasi". Jika anda merasa telah mengirimkan data-data pendukung dan status sertifikasi ISO anda masih "Belum Terverifikasi" dalam kurun waktu yang di tentukan, dimohon untuk menginformasikannya kepada kami melalui form bantuan yang ada di menu tips penggunaan atau silahkan telpon di call center kami. </p>
                                </div>
                                <div class="text-center">
                               
                                    <img src="{{env('APP_URL')}}/images/{{$status_iso->status_ISO}}.png" class="text-center" class="img-responsive" />
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading"> Status Verifikasi SNI
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Jika permintaan sertifikasi SNI anda sudah di tindak lanjuti oleh tim kami, maka anda akan melihat status permintaan anda menjadi "Terverifikasi". Jika anda merasa telah mengirimkan data-data pendukung dan status sertifikasi SNI anda masih "Belum Terverifikasi" dalam kurun waktu yang di tentukan, dimohon untuk menginformasikannya kepada kami melalui form bantuan yang ada di menu tips penggunaan atau silahkan telpon di call center kami. </p>
                                </div>
                                <div class="text-center">
                               
                                 <img src="{{env('APP_URL')}}/images/{{$status_iso->status_SNI}}.png" class="text-center" class="img-responsive" />
                                    
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading"> Status Pembayaran ISO
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                     <p>Status konfirmasi biaya sertifikasi SNI untuk perusahaan anda. Status akan berubah jika anda telah melakukan pembayaran dan telah di konfirmasi oleh tim kami </p>
                                </div>
                                <div class="text-center">
                             
                                    <img src="{{env('APP_URL')}}/images/{{$status_pembayaran_iso->status_pembayaran_ISO}}.png" class="text-center" class="img-responsive" />
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="panel panel-success">
                            <div class="panel-heading"> Status Pembayaran SNI
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Status konfirmasi biaya sertifikasi SNI untuk perusahaan anda. Status akan berubah jika anda telah melakukan pembayaran dan telah di konfirmasi oleh tim kami </p>
                                </div>
                                <div class="text-center">
                               
                                    <img src="{{env('APP_URL')}}/images/{{$status_pembayaran_sni->status_pembayaran_SNI}}.png" class="text-center" class="img-responsive" />
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>
                

@endsection