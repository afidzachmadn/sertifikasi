@extends('layout.master-admin')

@section ('sidebar-iso-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="{{env('APP_URL')}}/admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/admin/iso" class="waves-effect active"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/admin/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                    <li> <a href="#" class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection


                
@section ('breadcrumb-pilih-pegawai-inspeksi-iso-admin')
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
                            <li class="active">Pegawai Inspeksi ISO</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-pilih-pegawai-inspeksi-iso-admin")
    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">List Pegawai Inspeksi</h3>
                            <p class="text-muted">Berikut adalah list pegawai yang bertugas untuk terjun ke lapangan dan mengecek persyaratan dari perusahaan yang akan diverifikasi, klik tombol &nbsp<span><button type="button" class="btn btn-danger">Pilih</button></span> &nbsp yang ada di kolom <code>Aksi</code> dan ikuti instruksi yang muncul.
                            </p>
                            </br>
                            <p>
                            <b>Catatan:Sangat direkomendasikan jika anda memilih pegawai yang mempunyai pengalaman inspeksi ISO minimal sebanyak 6x. Jika perusahaan yang anda inginkan tidak terdapat disini, berarti perusahaan tersebut telah sudah mempunyai petugas survei, untuk mengeceknya silahkan klik tombol&nbsp <button type="button" class="btn btn-warning">Lihat detail</button> &nbsp terdapat pada kolom <code>Banyaknya inspeksi ISO yang pernah dikerjakan</code> </b>
                            </p>
                            </br>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jabatan</th>
                                            <th>Banyaknya Inspeksi ISO yang pernah dikerjakan</th>
                                            <th>Pilih Perusahaan yang akan di inspeksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pegawaiList as $pegawai)
                                        
                                            <tr>
                                                <form action="{{url('pegawai-inspeksi-iso-proses')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <td>{{$pegawai->id}}
                                                    <div class="form-group">
                                                        <input style="visibility:hidden" type="text" class="form-control text-center" id="no" required="" name="no" value="{{$pegawai->id}}"/>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                {{$pegawai->nip}}
                                                <div class="form-group">
                                                <input style="visibility:hidden" type="text" class="form-control text-center" id="nip" required="" name="nip" value="{{$pegawai->nip}}"/>
                                                </div>
                                                
                                                </td>
                                                <td>{{$pegawai->name}}</td>
                                                <td>{{$pegawai->jabatan}}</td>
                                                <td>{{$pegawai->jumlah_total_pendaftar_ISO_yang_diverifikasi}}&nbsp&nbsp<span>
                                                <form action="{{url('riwayat-pegawai-inspeksi-iso-proses')}}" method="post" enctype="multipart/form-data">

                                                <div class="form-group">
                                                        <input style="visibility:hidden" type="text" class="form-control text-center" id="no" required="" name="no" value="{{$pegawai->id}}"/>
                                                </div>


                                                <div class="form-group">
                                                    
                                                        <input class="btn btn-block btn-success" type="submit" value="lihat"/>
                                                </div>
                                                </form>
                                                 
                                                </span></td>

                                                @if($pegawai->jumlah_total_pendaftar_ISO_yang_diverifikasi >5)
                                                <td>
                                                    <div class="form-group">
                                                
                                                        <label class="control-label">Nama Perusahaan yang akan di inspeksi oleh pegawai ini</label>
                                                        <select class="form-control select2" type="text" name="pilihan-perusahaan">
                                                            <option></option>

                                                            @foreach($userList as $user)
                                                            <option value="{{$user->company_name}}">{{$user->company_name}}</option>
                                    
                                                            @endforeach  
                                                        </select>
                                                    </div>  
                                                </td>
                                                @else
                                                <td>-</td>
                                                @endif



                                                @if($pegawai->jumlah_total_pendaftar_ISO_yang_diverifikasi <5)

                                                <td>
                                                    
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" disabled>Pilih</button>
                                                    
                                                 
                                                </td>
                                                   
                                                @else

                                                <td>

                                                    <div class="form-group">
                                                    
                                                        <input class="btn btn-block btn-primary" type="submit" value="pilih"/>
                                                    </div>
                                                 
                                                </td>

                                                @endif
                                            </form>
                                            </tr>
                                        
                                        @endforeach
                                       
                                        
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jabatan</th>
                                            <th>Banyaknya Inspeksi ISO</th>
                                            <th>Pilih Perusahaan yang akan di inspeksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">Input Pegawai</button>
                    </div>




<!-- yang dibawah ini enggak kelihatan -->

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel1">Konfirmasi Pemilihan Pegawai/Petugas survei lapangan</h4> </div>
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



                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel1">Lihat riwayat survei petugas/pegawai</h4> </div>
                                        <div class="modal-body">
                                            <form action="{{url('input-pegawai-inspeksi-iso-proses')}}" method="post" enctype="multipart/form-data">
                                             {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Masukan nama Pegawai: </label>
                                                    <input type="text" class="form-control" id="no" name="nama_pegawai" required=""> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Masukan NIP Pegawai</label>
                                                    <input type="text" class="form-control" id="no" name="nip" required=""> 
                                                </div>
                                               
                                                <div class="form-group">
                                                
                                    
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Jabatan:</label>
                                                    <input class="form-control" id="texted" name="jabatan" required="" ></input>
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