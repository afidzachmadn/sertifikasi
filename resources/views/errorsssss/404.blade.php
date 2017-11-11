
<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upss... Terjadi Kesalahan</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{env('APP_URL')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/vendor.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="{{env('APP_URL')}}/css/main.css">
      <script src="{{env('APP_URL')}}/js/vendor/modernizr.js"></script>
    </head>
    <body>
      <div class="page_overlay">
        <div class="loader-inner ball-pulse">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <div class="five00wrap animated fadeIn">
        <div class="row-flex">
          <div class="messge500">
            <h1><span>Perhatian!</span> <br><br>
            Telah Terjadi Kesalahan</h1>
            <p>Harap Tenang, Ini Bukan Kesalahan Anda. Kami Akan Membawa Anda Pulang...</p>
            <br>
            <a href="{{env('APP_URL')}}/user/dashboard"><button type="button" class="btn btn-warning">Disini</button></a>
          </div>
          <div class="scene-3">
            <img src="{{env('APP_URL')}}/images/scene-500.png" alt="">
            <div class="charecter-4">
              <img src="{{env('APP_URL')}}/images/charecter-4.png" alt="">
              <div class="hand-part1"><img src="{{env('APP_URL')}}/images/charecter-4-hand-part.png" alt=""></div>
              <div class="eye"><img src="{{env('APP_URL')}}/images/charecter-4-eye.gif" alt=""></div>
            </div>
          </div>
        </div>
      </div>
     
      <script src="{{env('APP_URL')}}/js/vendor.js"></script>
      <script src="{{env('APP_URL')}}/js/plugins.js"></script>
      <script src="{{env('APP_URL')}}/js/main.js"></script>
    </body>
  </html>