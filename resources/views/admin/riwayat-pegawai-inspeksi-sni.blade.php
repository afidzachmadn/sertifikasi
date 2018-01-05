@extends('layout.master-admin')

@section ('sidebar-iso-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/admin/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/admin/sni" class="waves-effect active"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                    <li> <a href="#" class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection


                
@section ('breadcrumb-riwayat-pegawai-inspeksi-iso-admin')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Informasi Sertifikasi</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Sistem</a></li>
                            <li><a href="{{env('APP_URL')}}/admin/dashboard">Dashboard</a></li>
                            <li><a href="{{env('APP_URL')}}/admin/iso">ISO</a></li>
                            <li class="active">Riwayat kerja Petugas/Pegawai survei sertifikasi ISO</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-riwayat-pegawai-inspeksi-iso-admin")
    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Riwayat Kerja</h3>
                            <p class="text-muted">
                                Berikut adalah daftar perusahaan yang sedang/telah disurvei oleh 
                                <b>{{$userList[0]->petugas_inspeksi_ISO_name}}</b>
                            </p>
                            </br>

                             <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Status Sertifikasi SNI</th>
                                            <th>Status Inspeksi</th>
                                            <th>Surat Hasil Inspeksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($userList as $user)
                                            <tr>
                                            
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->company_name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->status_SNI}}</td>
                                                @if($user->surat_inspeksi_SNI == null)
                                                <td>Belum/sedang di survei</td>
                                                @else
                                                <td>Sudah selesai di survei</td>
                                                @endif
                                                
                                                <td><a href="{{env('APP_URL')}}/storage/hasil-upload/pdf/sni/hasil-survei-lapangan/{{$user->surat_inspeksi_SNI}}" target="_Blank">lihat</a></td>
                                            
                                                
                                            </tr>
                                            @endforeach
                                       
                                       
                                        
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Status Sertifikasi ISO</th>
                                            <th>Status Inspeksi ISO</th>
                                            <th>Surat Hasil Inspeksi ISO</th>
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
                                            <h4 class="modal-title" id="exampleModalLabel1">Konfirmasi Pemilihan Pegawai/Petugas survei lapangan</h4> </div>
                                        <div class="modal-body">
                                            <form action="{{url('riwayat-pegawai-inspeksi-iso-proses')}}" method="post" enctype="multipart/form-data">
                                             {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Masukan No urut pegawai yang barusan anda pilih: </label>
                                                    <input type="text" class="form-control" id="no" name="no" required=""> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Masukan NIP pegawai yang barusan anda pilih: </label>
                                                    <input type="text" class="form-control" id="no" name="nip" required=""> 
                                                </div>
                                               
                                                <div class="form-group">
                                                
                                    <label class="control-label">Nama Perusahaan yang akan di inspeksi oleh pegawai ini</label>
                                    <select class="form-control select2" type="text" name="pilihan-perusahaan">
                                        <option></option>
                                        @foreach($userList as $user)
                                            <option value="{{$user->company_name}}">{{$user->company_name}}</option>
                                    
                                        @endforeach  
                                    </select>
                                                </div>   

                                </select>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Ketik "pilih" tanpa tanda petik:</label>
                                                    <input class="form-control" id="texted" name="texted" required=""></input>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <input class="btn btn-block btn-primary" type="submit" value="Saya yakin dengan pilihan ini!"/>
                                        </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>









                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel1">Lihat riwayat survei petugas/pegawai</h4> </div>
                                        <div class="modal-body">
                                            <form action="{{url('pegawai-inspeksi-iso-proses')}}" method="post" enctype="multipart/form-data">
                                             {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Masukan No urut pegawai yang barusan anda pilih: </label>
                                                    <input type="text" class="form-control" id="no" name="no" required=""> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Masukan NIP pegawai yang barusan anda pilih: </label>
                                                    <input type="text" class="form-control" id="no" name="nip" required=""> 
                                                </div>
                                               
                                                <div class="form-group">
                                                
                                    
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Ketik "pilih" tanpa tanda petik:</label>
                                                    <input class="form-control" id="texted" name="texted" required=""></input>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <input class="btn btn-block btn-primary" type="submit" value="Lihat!"/>
                                        </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

  


    
@endsection