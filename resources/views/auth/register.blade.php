<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" type="image/png" sizes="16x16" href="{{env('APP_URL')}}/plugins/images/bisqa.jpg">
    <title>Sistem Sertifikasi Terpadu - Kementrian Perindustrian Republik Indonesia</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{env('APP_URL')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{env('APP_URL')}}/css/animate.css" rel="stylesheet">
    <!-- Wizard CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/register-steps/steps.css" rel="stylesheet">
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

<body style="background-color:rgba(3, 169, 243, 0.36)">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    
    <section  id="wrapper" class="step-register" style="background-color:rgba(3, 169, 243, 0.36)">
         <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="/login"  class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline waves-effect waves-light">Kembali ke halaman login</a>
                   
                     </div>
        <div class="register-box">
            <div class="">
                <a href="javascript:void(0)" class="text-center db m-b-40"><img src="../plugins/images/bisqa.jpg" alt="Home" />
                    </a>
                <!-- multistep form -->
                <form id="msform" action="/register-proses" method="post">
                {{ csrf_field() }}
                    <!-- progressbar -->
                    <ul id="eliteregister">
                        <li class="active">USER NAME</li>
                        <li>PASSWORD</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Form Registrasi</h2>
                        <h3 class="fs-subtitle">Silahkan masukan username yang ingin anda gunakan</h3>
                        <input type="text" name="username" placeholder="User Name" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
    
                    <fieldset>
                        <h2 class="fs-title">Form Registrasi</h2>
                        <h3 class="fs-subtitle">Silahkan masukan Password yang ingin anda gunakan</h3>
                        <input type="password" name="password" placeholder="Password" />
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="submit" class="action-button" value="Submit" />
                    </fieldset>
                </form>

                <div class="clear"></div>
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
    <script src="{{env('APP_URL')}}/plugins/bower_components/register-steps/jquery.easing.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/register-steps/register-init.js"></script>
    <!--slimscroll JavaScript -->
    <script src="{{env('APP_URL')}}/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{env('APP_URL')}}/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{env('APP_URL')}}/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>