@extends('layout.master-admin')

@section ('sidebar-dashboard-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/admin/dashboard" class="waves-effect active"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/admin/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/admin/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/admin/one-stop-service" class="waves-effect"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection

@section ('header-dashboard-admin')
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
                
@section ('breadcrumb-dashboard-admin')
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

@section("isi-dashboard-admin")
 <!-- .row -->

                    <div class="col-lg-6 col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">Sertifikasi ISO</h3>
                            <div class="stats-row">
                                
                                <div class="stat-item">
                                    <h6>Hi,&nbsp{{Session::get('name')}}. Anda sudah melakukan verifikasi ISO sebanyak :</h6> <b>{{$verifiedIso}}</b>
                                </div>
                                
                            <div id="sparkline8">
                                <canvas width="245" height="50" style="display: inline-block; width: 245px; height: 50px; vertical-align: top;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">Sertifikasi SNI</h3>
                            <div class="stats-row">
                                
                                <div class="stat-item">
                                    <h6>Hi,&nbsp{{Session::get('name')}}. Anda sudah melakukan verifikasi SNI sebanyak :</h6> <b>{{$verifiedSni}}</b>
                                </div>
                                
                            <div id="sparkline9">
                                <canvas width="245" height="50" style="display: inline-block; width: 245px; height: 50px; vertical-align: top;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                

@endsection