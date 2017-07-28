@extends('layout.master')

@section ('sidebar-tips-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/user/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/user/iso" class="waves-effect"><i class="ti-agenda p-r-10"></i> <span class="hide-menu">Sertifikasi ISO</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/sni" class="waves-effect"><i class="ti-world p-r-10"></i> <span class="hide-menu">Sertifikasi SNI</span></a> </li>
                     <li> <a href="#"class="waves-effect" alt="alert" class="img-responsive model_img" id="sa-params"><i class="ti-bolt p-r-10"></i> <span class="hide-menu">One Stop Service</span></a> </li>
                     <li> <a href="{{env('APP_URL')}}/user/tips" class="waves-effect active"><i class="ti-help p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection

@section ('breadcrumb-tips-user')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Sertifikasi Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li><a href="{{env('APP_URL')}}/user/dashboard">Dashboard</a></li>
                            <li class="active">Tips Penggunaan</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section('isi-tips-user')
<div class="col-md-12">
                        <div class="white-box">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success"><i class="ti-gift"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Selamat datang di BISQA Systems!</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><img class="img-responsive" alt="user" src="../plugins/images/users/ritesh.jpg"> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Ritesh Deshmukh</h4> </div>
                                        <div class="timeline-body">
                                            <p><img class="img-responsive" alt="user" src="../plugins/images/big/img1.jpg"></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-bomb"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4> </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4> </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="ti-gift"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4> </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                            <hr>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-gear"></i> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Action</a> </li>
                                                    <li><a href="#">Another action</a> </li>
                                                    <li><a href="#">Something else here</a> </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4> </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


<div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Form Bantuan</h3>
                            <p class="text-muted m-b-30 font-13">Jika anda mengalami kesulitan ataupun masalah di dalam system kami, mohon untuk mengisi bagian keluhan yang terdapat pada form bantuan ini.</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="floating-labels ">
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" required value="{{$tips_p->company_name}}"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">Nama Perusahaan</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" required value="{{$tips_p->address}}"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">Alamat</label>
                                        </div>
                                        
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" required value="{{$tips_p->email}}"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">E-mail</label>
                                        </div>

                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" required value="{{$tips_p->telp}}"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">No Telfon</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" required value="{{$tips_p->status_ISO}}"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">Status ISO</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" required value="{{$tips_p->status_SNI}}"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">Status SNI</label>
                                        </div>
                                        
                                        <div class="form-group m-b-5">
                                            <textarea class="form-control" rows="4" id="input7" required></textarea><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input7">Keluhan</label>
                                        </div>
                                        </br>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



@endsection
