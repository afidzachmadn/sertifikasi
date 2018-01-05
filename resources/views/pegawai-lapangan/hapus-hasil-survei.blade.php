@extends('layout.master-pegawai-lapangan')

@section ('sidebar-dashboard-pegawai-lapangan')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/pegawailapangan/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/pegawailapangan/upload-hasil-survei" class="waves-effect"><i class="ti-upload p-r-10"></i> <span class="hide-menu">Upload Hasil Survei</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/pegawailapangan/hapus-hasil-survei" class="waves-effect active"><i class="ti-close p-r-10"></i> <span class="hide-menu">Hapus Hasil Survei</span></a> </li>
                     
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
                            <li class="active">Hapus hasil survei</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-pegawai-lapangan")


<div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Hapus hasil survei</h3>
                            <p class="text-muted m-b-30">Silahkan hapus hasil survei ISO atau SNI di menu dibawah ini, lalu klik delete di kolom aksi.</p>
                            <div class="vtabs">
                                <ul class="nav tabs-vertical">
                                    <li class="tab nav-item active">
                                        <a data-toggle="tab" class="nav-link" href="#iso" aria-expanded="true"> <span class="visible-xs"><i class="ti-home"></i></span> <span class="hidden-xs">ISO</span> </a>
                                    </li>
                                    <li class="tab nav-item">
                                        <a data-toggle="tab" class="nav-link" href="#sni" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">SNI</span> </a>
                                    </li>
                                </ul>



                                <div class="tab-content">
                                    <div id="iso" class="tab-pane active">

                                        <h3 class="box-title">List pendaftar ISO yang sudah di survei dan telah mempunyai laporan survei/bukti laporan hasil survei
                            </br>
                            <p>Jika ingin menghapus/membatalkan/ingin mengupload ulang. Silahkan klik tombol delete</p>
                            </br>
                            
                            
                            </br>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Status Survei</th>
                                            <th>Hasil Survei</th>
                                            <th>Aksi</th>
                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        @foreach($userList as $user)
                                        
                                            <tr>
                                            <form action="{{url('delete-hasil-survei-lapangan-proses-iso')}}" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                <td><p>{{$user->id}}</p></td>
                                                <td><p>{{$user->company_name}}</p></td>
                                                <td>
                                                
                                                    <p>{{$user->email}}</p>

                                                    
                                                    <input type="hidden" class="form-control text-center" id="" required="" name="email" value="{{$user->email}}" />
                                                

                                                </td>

                                                <td>
                                                    <p><b>Selesai di survei</b></p>

                                                </td>
                                                
                                                <td>
         <a href="{{env('APP_URL')}}/storage/pdf/iso/hasil-survei-lapangan/{{$user->surat_inspeksi_ISO}}" target="_Blank">lihat</a>
                                                </td>

                                                <td>
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light m-r-10">delete</button>
                                                </td>
                                            </form>
                                            </tr>
                                        
                                        @endforeach
                                       
                                    
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Status Survei</th>
                                            <th>Hasil Survei</th>
                                            <th>Aksi</th>
                    
                                        </tr>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                                       
                                
                                    </div>
                                
                                    <div id="sni" class="tab-pane">

                                        <h3 class="box-title">List pendaftar SNI yang sudah di survei dan telah mempunyai laporan survei/bukti laporan hasil survei
                            </br>
                            <p>Jika ingin menghapus/membatalkan/ingin mengupload ulang. Silahkan klik tombol delete</p>
                            </br>
                            
                            
                            </br>
                            <div class="table-responsive">
                                <table id="myTable2" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Status Survei</th>
                                            <th>Hasil Survei</th>
                                            <th>Aksi</th>
                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        @foreach($userList_2 as $user)
                                        
                                            <tr>
                                            <form action="{{url('delete-hasil-survei-lapangan-proses-sni')}}" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                <td><p>{{$user->id}}</p></td>
                                                <td><p>{{$user->company_name}}</p></td>
                                                <td>
                                                
                                                    <p>{{$user->email}}</p>

                                                    
                                                    <input type="hidden" class="form-control text-center" id="" required="" name="email" value="{{$user->email}}" />
                                                

                                                </td>

                                                <td>
                                                    <p><b>Selesai di survei</b></p>

                                                </td>
                                                
                                                <td>
         <a href="{{env('APP_URL')}}/storage/hasil-upload/pdf/sni/hasil-survei-lapangan/{{$user->surat_inspeksi_SNI}}" target="_Blank">lihat</a>
                                                </td>

                                                <td>
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light m-r-10">delete</button>
                                                </td>
                                            </form>
                                            </tr>
                                        
                                        @endforeach
                                       
                                    
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Status Survei</th>
                                            <th>Hasil Survei</th>
                                            <th>Aksi</th>
                    
                                        </tr>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection