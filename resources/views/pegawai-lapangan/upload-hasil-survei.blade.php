@extends('layout.master-pegawai-lapangan')

@section ('sidebar-dashboard-pegawai-lapangan')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/pegawailapangan/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/pegawailapangan/upload-hasil-survei" class="waves-effect active"><i class="ti-upload p-r-10"></i> <span class="hide-menu">Upload Hasil Survei</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/pegawailapangan/hapus-hasil-survei" class="waves-effect"><i class="ti-close p-r-10"></i> <span class="hide-menu">Hapus Hasil Survei</span></a> </li>
                     
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
                            <li class="active">Upload hasil survei</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-pegawai-lapangan")

<div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Upload Hasil Survei Lapangan / Tempat</h3>
                            <p class="text-muted m-b-30 font-13">Pilih perusahaan, lali silahkan pilih hasil data untuk di upload</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{url('upload-hasil-survei-lapangan-proses')}}" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                        
                                        <div class="form-group">
                                            <label class="col-sm-12">Perusahaan pilihan:</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" type="text" name="nama-perusahaan" required>
                                                    <option></option>
                                                    @foreach ($nama_perusahaan as $namaPer)
                                                    <option value="{{$namaPer->company_name}}">{{$namaPer->company_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">File upload</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="hasil_upload" required> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                    
                                            <input class="btn btn-block btn-primary" type="submit" value="kirim"/>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
 
            
            
                

@endsection