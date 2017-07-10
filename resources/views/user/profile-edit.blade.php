@extends('layout.master')

@section ('sidebar-profile-user')
<li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="/user/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="/user/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="/user/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="one-stop-service.html" class="waves-effect"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection

@section ('breadcrumb-profile-edit-user')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Sertifikasi Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li class="active">Edit Profile</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section('isi-profile-edit-user')
<!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Edit Profile Perusahaan</h3>
                            <form class="form-material form-horizontal" action="{{url('edit-profile-proses')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Nama Perusahaan</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="example-text" name="company_name" class="form-control" placeholder="Nama Perusahaan" value="{{$profile->company_name}}">
                                    </div>
                                </div>

                               <div class="form-group">
                                    <label class="col-md-12" for="example-text">E-mail</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" value="{{$profile->email}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="telp">No Telpon</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="telp" name="telp" class="form-control" placeholder="No Telpon" value="{{$profile->telp}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="alamat">Alamat Perusahaan</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="alamat" name="address" class="form-control" placeholder="Alamat Perusahaan" value="{{$profile->address}}">
                                    </div>
                                </div>
    
                                
                                <div class="form-group">
                                    <label class="col-sm-12">Profile Image</label>
                                    <div class="col-sm-12">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
                                            </div><span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="img"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Deskripsi Perusahaan</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3" name="description">{{$profile->description}}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                
    @endsection
