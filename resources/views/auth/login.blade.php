<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{env('APP_URL')}}/plugins/images/bbtppi2.png">
    <title>Sistem Informasi Sertifikasi - Balai Besar Teknologi Pencegahan Pencemaran Industri Semarang  -  Kementrian Perindustrian Republik Indonesia</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{env('APP_URL')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{env('APP_URL')}}/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{env('APP_URL')}}/css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="{{env('APP_URL')}}/css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar" style="opacity:0.9">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" action="{{url('login-proses')}}" method="post">
                {{ csrf_field() }}
                    <a href="javascript:void(0)" class="text-center db"><img src="{{env('APP_URL')}}/images/bbtppi.png" alt="Home" />
                        </a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email"  placeholder="Email" required=""> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" type="password"  placeholder="Password" required=""> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Ingatkan Saya </label>
                            </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Lupa Kata Sandi ?</a> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <img class="img-responsive" src="{{captcha_src()}}"/>
                            <input class="form-control" type="text" name="captcha"  placeholder="masukan kode diatas" required="">
                            <p style="color:red"><b>{{Session::get('message')}}</b></p>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Masuk</button>
                        </div>
                    </div>
                    
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Tidak Punya Akun ? <a href="/register" class="text-primary m-l-5"><b>Daftar Disini</b></a></p>
                        </div>
                    </div>
		    
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Pulihkan Kata Sandi Anda</h3>
                            <p class="text-muted">Masukan Email Anda dan Tunggu Instruksi Dari Kami</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
                <div class="col-xs-12">
                            <a href="{{env('APP_URL')}}/login-admin">
                            <div class="btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login Khusus Pegawai</div>
                            </a>
                </div>
                </br>

                <div class="col-xs-12">
                            <a href="{{env('APP_URL')}}/login-pegawai-lapangan">
                            <div class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login Khusus Pegawai Lap</div>
                            </a>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- jQuery -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{env('APP_URL')}}/bootstrap/dist/js/tether.min.js"></script>
    <script src="{{env('APP_URL')}}/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="{{env('APP_URL')}}/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{env('APP_URL')}}/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{env('APP_URL')}}/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="{{env('APP_URL')}}/js/toastr.js"></script>
    <script type="text/javascript">
        //Alerts
        $(".myadmin-alert .closed").click(function (event) {
            $(this).parents(".myadmin-alert").fadeToggle(350);
            return false;
        });
        /* Click to close */
        $(".myadmin-alert-click").click(function (event) {
            $(this).fadeToggle(350);
            return false;
        });
        $(".showtop").click(function () {
            $(".alerttop").fadeToggle(350);
        });
        $(".showtop2").click(function () {
            $(".alerttop2").fadeToggle(350);
        });
        /** Alert Position Bottom  **/
        $(".showbottom").click(function () {
            $(".alertbottom").fadeToggle(350);
        });
        $(".showbottom2").click(function () {
            $(".alertbottom2").fadeToggle(350);
        });
        /** Alert Position Top Left  **/
        $("#showtopleft").click(function () {
            $("#alerttopleft").fadeToggle(350);
        });
        /** Alert Position Top Right  **/
        $("#showtopright").click(function () {
            $("#alerttopright").fadeToggle(350);
        });
        /** Alert Position Bottom Left  **/
        $("#showbottomleft").click(function () {
            $("#alertbottomleft").fadeToggle(350);
        });
        /** Alert Position Bottom Right  **/
        $("#showbottomright").click(function () {
            $("#alertbottomright").fadeToggle(350);
        });
    </script>
</body>

</html>
