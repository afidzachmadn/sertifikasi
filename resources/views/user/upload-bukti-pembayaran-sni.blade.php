@extends('layout.master')

@section ('sidebar-sni-user')
<li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="{{env('APP_URL')}}/user/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/user/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/sni" class="waves-effect active"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#"class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/tips" class="waves-effect"><i class="ti-help p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection

@section ('breadcrumb-bukti-pembayaran-sni')
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
                            <li><a href="{{env('APP_URL')}}/user/sni">SNI</a></li>
                            <li class="active">Upload Bukti Pembayaran SNI</li>

                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
 </div>
@endsection

@section('isi-bukti-pembayaran-sni')

                    
                <div class="col-sm-12">
                    <form action="{{url('/user/upload-bukti-pembayaran-sni-proses')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="white-box" class="col-sm-12 col-md-2 col-xs-12 col-lg-12">
                            <h3 class="box-title">File Upload Bukti Pembayaran SNI</h3>
                            <label for="input-file-max-fs">Silahkan upload bukti pembayaran untuk permintaan sertifikasi SNI anda (*JPG) (*Max 2MB)</label>
                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="jpg" name="pdf-bukti-pembayaran-sni" data-default-file="{{env('APP_URL')}}/storage/img/bukti-pembayaran/sni/{{$sni_pembayaran_p->file_upload_bukti_pembayaran_SNI}}" value="{{env('APP_URL')}}/storage/img/bukti-pembayaran/sni/{{$sni_pembayaran_p->file_upload_bukti_pembayaran_SNI}}" required=""/> 
                        </div>

                        <div class="row button-box">
                            <div class="col-lg-12">
                                <input class="btn btn-block btn-success" type="submit" value="Kirim"/>

                            </div>
                        </div>
                    <br>
                        
                    </form>
                </div>
               <div class="panel panel-default" class="text-center">
                            <div class="panel-heading">No Rekening <span class="label label-warning m-l-5">perhatian!</span></div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                <p>Pembayaran hanya dilakukan di:</br>
                                <strong> BANK MANDIRI Cabang Pahlawan : </strong> A/N BBTPPI Semarang <span><strong>NO REK : 136-00-0000000-0</strong></span>
                                <p><strong> BANK BNI 46 Cabang Pandanaran: </strong> A/N BBTPPI Semarang <span><strong>NO REK : 0000000000</strong></span>
                                </p>
                                </p>
                                </div>
                            </div>
                        </div>


@endsection