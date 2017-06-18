@extends('layout.master')

@section ('sidebar-sni-user')
<li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="/user/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="/user/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="/user/sni" class="waves-effect active"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="one-stop-service.html" class="waves-effect"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection

@section ('breadcrumb-sni-user')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Sertifikasi Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li><a href="/user/dashboard">Dashboard</a></li>
                            <li class="active">SNI</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section('isi-sni-user')
<div class="row">
                    
                    <div class="col-sm-6 ol-md-6 col-xs-12">
                        <form action="">
                        <div class="white-box">
                            <h3 class="box-title">File Upload 1</h3>
                            <label for="input-file-max-fs">Silahkan upload file Struktur Organisasi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" /> </div>
                    </div>
                    <div class="col-sm-6 ol-md-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">File Upload 2</h3>
                            <label for="input-file-max-fs">Silahkan upload file Diagram alir proses produksi/penyedia jasa termasuk jumlah line proses produksi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf"/> </div>
                    </div>
                    <div class="col-sm-6 ol-md-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">File Upload 3</h3>
                            <label for="input-file-disable-remove">Silahkan upload dokumen Sistem Manajemen Mutu (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf" /> </div>
                    </div>
                    <div class="col-sm-6 ol-md-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">File Upload 4</h3>
                            <label for="input-file-disable-remove">Silahkan upload Daftar Induk Dokumen / Daftar Informasi terdokumentasi (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf"/> </div>
                    </div>
                    <div class="col-sm-6 ol-md-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">File Upload 5</h3>
                            <label for="input-file-disable-remove">Silahkan upload Diagram alir proses Sistem Manajemen Mutu (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="pdf"/> </div>
                    </div>
                    <div class="col-sm-6 ol-md-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">File Upload 6</h3>
                            <label for="input-file-disable-remove">Silahkan upload Rekaman Audit Internal dan Tinjauan Manajemen (*PDF) (*Max 2MB)</label>
                            <input type="file" id="input-file-disable-remove" class="dropify"  data-max-file-size="2M" data-allowed-file-extensions="pdf"/>
                             </div>
                    </div>
                    <div class="col-lg-12">
                        <input class="btn btn-success" type="submit" value="Kirim"/>
                        <div  class="btn btn-danger" > Semua file sukses dikirim
                        </div>
                    </div>
                    </form>
                </div>




                </div>
                <!-- .row -->
               
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; KEMENTERIAN PERINDUSTRIAN REPUBLIK INDONESIA </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    @endsection
