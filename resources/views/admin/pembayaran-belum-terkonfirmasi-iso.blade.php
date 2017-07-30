@extends('layout.master-admin')

@section ('sidebar-iso-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/admin/iso" class="waves-effect active"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/admin/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                    <li> <a href="#" class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection


                
@section ('breadcrumb-belum-terverifikasi-pembayaran-iso-admin')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Sertifikasi Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li><a href="{{env('APP_URL')}}/admin/dashboard">Dashboard</a></li>
                            <li><a href="{{env('APP_URL')}}/admin/iso">ISO</a></li>
                            <li class="active">Belum Terverifikasi Pembayaran ISO</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-belum-terverifikasi-pembayaran-iso-admin")
    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">List pendaftar ISO yang belum dikonfirmasi pembayarannya</h3>
                            <p class="text-muted">Untuk mengkonfirmasi, klik tombol &nbsp<span><button type="button" class="btn btn-danger">Konfirmasi ini</button></span> &nbsp yang ada di kolom <code>Aksi</code> dan ikuti instruksi yang muncul.
                            </br>
                            Jika berhasil, maka perusahaan yang anda konfirmasi pembayarannya akan hilang dari tabel ini. Untuk mengeceknya, silahkan ke menu pendaftar yang sudah terkonfirmasi pembayarannya.
                            </p>
                            
                            </br>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Bukti Upload Pembayaran</th>
                                            <th>Status Konfirmasi Pembayaran</th>
                                            <th>Aksi</th>
                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($userList as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->company_name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/storage/img/bukti-pembayaran/iso/{{$user->file_upload_bukti_pembayaran_ISO ? $user->file_upload_bukti_pembayaran_ISO : '#'}}" target="_blank">Lihat</a>

                                                </td>
                                                <td>{{$user->status_pembayaran_ISO}}</td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Konfirmasi ini
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                       
                                        
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Bukti Upload Pembayaran</th>
                                            <th>Status Konfirmasi Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>




<!-- yang dibawah ini enggak kelihatan -->

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel1">Konfirmasi Pembayaran Vertifikasi ISO</h4> </div>
                                        <div class="modal-body">
                                            <form action="{{url('konfirmasi-pembayaran-iso-proses')}}" method="post" enctype="multipart/form-data">
                                             {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Masukan no perusahaan yang barusan anda pilih: </label>
                                                    <input type="text" class="form-control" id="no" name="no" required=""> </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Ketik "terbayar" tanpa tanda petik:</label>
                                                    <input class="form-control" id="texted" name="texted" required=""></input>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <input class="btn btn-block btn-primary" type="submit" value="Saya yakin untuk mengkonfirmasi pembayaran ini!"/>
                                        </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  


    <!-- HELOOOOOOO ->
@endsection