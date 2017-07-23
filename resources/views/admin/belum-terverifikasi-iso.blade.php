@extends('layout.master-admin')

@section ('sidebar-iso-admin')
<li class="nav-small-cap m-t-10">--- Menu Utama</li>
                    <li> <a href="/admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="/admin/iso" class="waves-effect active"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="/admin/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="one-stop-service.html" class="waves-effect"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
@endsection


                
@section ('breadcrumb-belum-terverifikasi-iso-admin')
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
                            <li><a href="/admin/iso">ISO</a></li>
                            <li class="active">Belum Terverifikasi ISO</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-belum-terverifikasi-iso-admin")
    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">List pendaftar yang belum diverifikasi pengajuan sertifikasi ISOnya</h3>
                            <p class="text-muted">Untuk memverifikasi, klik tombol<span><img src="/images/belum-terverifikasi.png" class="img-responsive"></img></span>yang ada di kolom <code>Status Sertifikasi ISO</code>. Jika berhasil, maka perusahaan yang anda konfirmasi akan hilang dari tabel ini. Untuk mengeceknya, silahkan ke menu pendaftar yang sudah terverifikasi.
                            </p>
                            <p>
                            <strong>
                            Sebelum melakukan verifikasi:
                            <ol>
                                <li>Pastikan anda sudah mengkonfirmasi status pembayaran.</li>
                                <li>Pastikan anda sudah menge-cek seluruh file persyaratan yang telah di upload oleh pendaftar.</li>
                                <li>Pastikan anda sudah mengupload file pdf hasil terbit sertifikat ISO.</li>
                            </strong> 
                            </p>
                            </br>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Struktur Organisasi</th>
                                            <th>Diagram alir proses produksi/penyedia</th>
                                            <th>Sistem Manajemen Mutu</th>
                                            <th>Daftar Induk Dokumen / Daftar Informasi </th>
                                            <th>Diagram alir proses Sistem Manajemen Mutu</th>
                                            <th>Rekaman Audit Internal dan Tinjauan Manajemen</th>
                                            <th>Status Konfirmasi Pembayaran</th>
                                            <th>Hasil Penerbitan Sertifikasi ISO</th>
                                            <th>Status Sertifikasi ISO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>

                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>

                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>
                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>
                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>
                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>
                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>
                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>
                                        <tr>
                                            <td>Subur Jaya</td>
                                            <td>subur-jaya@local.com</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#">lihat</a></td>
                                            <td>belum-terbayar</td>
                                            <td><a href="#">lihat</a></td>
                                            <td><a href="#"><img src="/images/belum-terverifikasi.png" class=""></img></a></td>
                                        </tr>
                                        
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Nama Perusahan</th>
                                            <th>Email</th>
                                            <th>Struktur Organisasi</th>
                                            <th>Diagram alir proses produksi/penyedia</th>
                                            <th>Sistem Manajemen Mutu</th>
                                            <th>Daftar Induk Dokumen / Daftar Informasi </th>
                                            <th>Diagram alir proses Sistem Manajemen Mutu</th>
                                            <th>Rekaman Audit Internal dan Tinjauan Manajemen</th>
                                            <th>Status Konfirmasi Pembayaran</th>
                                            <th>Hasil Penerbitan Sertifikasi ISO</th>
                                            <th>Status Sertifikasi ISO</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

    
@endsection