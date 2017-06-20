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
                            <form class="form-material form-horizontal" action="/profile-edit-proses" method="post">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Nama Perusahaan</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="example-text" name="nama-perusahaan" class="form-control" placeholder="Nama Perusahaan"> </div>
                                </div>

                               <div class="form-group">
                                    <label class="col-md-12" for="example-text">E-mail</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="email" name="e-mail" class="form-control" placeholder="E-mail"> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="telp">No Telpon</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="telp" name="no-telpon" class="form-control" placeholder="No Telpon"> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="alamat">Alamat Perusahaan</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="alamat" name="alamat-perusahaan" class="form-control" placeholder="Alamat Perusahaan"> </div>
                                </div>
    
                                
                                <div class="form-group">
                                    <label class="col-sm-12">Profile Image</label>
                                    <div class="col-sm-12"> <img class="img-responsive" src="../plugins/images/users/varun.jpg" alt="" style="max-width:120px;"> </div>
                                    <div class="col-sm-12">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Diskripsi Perusahaan</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3" name="diskripsi-perusahaan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                </div>
                <!-- .row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; KEMENTERIAN PERINDUSTRIAN REPUBLIK INDONESIA </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    @endsection
