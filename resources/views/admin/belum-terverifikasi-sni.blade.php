@extends('layout.master-admin')

@section ('sidebar-sni-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="/admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="/admin/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="/admin/sni" class="waves-effect active"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="one-stop-service.html" class="waves-effect"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection


                
@section ('breadcrumb-belum-terverifikasi-sni-admin')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Sertifikasi Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li><a href="/admin/dashboard">Dashboard</a></li>
                            <li><a href="/admin/sni">SNI</a></li>
                            <li class="active">Belum Terverifikasi sni</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-belum-terverifikasi-sni-admin")
    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">List pendaftar yang belum diverifikasi pengajuan sertifikasi sninya</h3>
                            <p class="text-muted">Untuk memverifikasi, klik tombol &nbsp<span><button type="button" class="btn btn-danger">Belum Terverifikasi</button></span> &nbsp yang ada di kolom <code>Status Sertifikasi sni</code> dan ikuti instruksi yang muncul.
                            </br>
                            Jika berhasil, maka perusahaan yang anda konfirmasi akan hilang dari tabel ini. Untuk mengeceknya, silahkan ke menu pendaftar yang sudah terverifikasi.
                            </br>
                            <strong>Jika nama perusahaan yang anda ingin verifikasi tidak ada disini, silahkan upload hasil surat terbit sertifikasi ISO untuk perusahaan tersebut terlebih dahulu</strong>
                            </p>
                           
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Struktur Organisasi</th>
                                            <th>Diagram alir proses produksi/penyedia</th>
                                            <th>Sistem Manajemen Mutu</th>
                                            <th>Daftar Induk Dokumen / Daftar Informasi </th>
                                            <th>Diagram alir proses Sistem Manajemen Mutu</th>
                                            <th>Rekaman Audit Internal dan Tinjauan Manajemen</th>
                                            <th>Status Konfirmasi Pembayaran</th>
                                            <th>Hasil Penerbitan Sertifikasi sni</th>
                                            <th>Status Sertifikasi sni</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($userList as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->company_name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/storage/pdf/sni/{{$user->file_upload_sni_1 ? $user->file_upload_sni_1 : '#'}}" target="_blank">Lihat</a>
                                                </td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/storage/pdf/sni/{{$user->file_upload_sni_2 ? $user->file_upload_sni_2 : '#'}}" target="_blank">Lihat</a>
                                                </td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/storage/pdf/sni/{{$user->file_upload_sni_3 ? $user->file_upload_sni_3 : '#'}}" target="_blank">Lihat</a>
                                                </td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/storage/pdf/sni/{{$user->file_upload_sni_4 ? $user->file_upload_sni_4 : '#'}}" target="_blank">Lihat</a>
                                                </td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/storage/pdf/sni/{{$user->file_upload_sni_5 ? $user->file_upload_sni_5 : '#'}}" target="_blank">Lihat</a>
                                                </td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/storage/pdf/sni/{{$user->file_upload_sni_6 ? $user->file_upload_sni_6 : '#'}}" target="_blank">Lihat</a>
                                                </td>
                                                <td>{{$user->status_pembayaran_SNI}}</td>
                                                <td>
                                                    <a href="{{env('APP_URL')}}/storage/pdf/sni/hasil-terbit-sertifikat/{{$user->surat_pengesahan_SNI ? $user->surat_pengesahan_SNI : '#'}}" target="_blank">Lihat</a>
                                                </td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Belum Terverifikasi</button>
                                                    
                                                   
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                       
                                        
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Struktur Organisasi</th>
                                            <th>Diagram alir proses produksi/penyedia</th>
                                            <th>Sistem Manajemen Mutu</th>
                                            <th>Daftar Induk Dokumen / Daftar Informasi </th>
                                            <th>Diagram alir proses Sistem Manajemen Mutu</th>
                                            <th>Rekaman Audit Internal dan Tinjauan Manajemen</th>
                                            <th>Status Konfirmasi Pembayaran</th>
                                            <th>Hasil Penerbitan Sertifikasi sni</th>
                                            <th>Status Sertifikasi sni</th>
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
                                            <h4 class="modal-title" id="exampleModalLabel1">Konfirmasi verifikasi sni</h4> </div>
                                        <div class="modal-body">
                                            <form action="{{url('verifikasi-sni-proses')}}" method="post" enctype="multipart/form-data">
                                             {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Masukan no perusahaan yang barusan anda pilih: </label>
                                                    <input type="text" class="form-control" id="no" name="no"> </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Ketik "terverifikasi" tanpa tanda petik:</label>
                                                    <input class="form-control" id="texted" name="texted"></input>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <input class="btn btn-block btn-primary" type="submit" value="Saya yakin untuk mengkonfirmasi!"/>
                                        </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  


    
@endsection