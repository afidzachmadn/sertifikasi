<!DOCTYPE html>

<html lang="en">

<head>

<!--#######################################################################################################
 * @application		<Sistem_Sertifikasi_Terpadu_BISQA_SYSTEMS>
 * @author         Afidz Achmad Novendi <afidzachmadn@gmail.com>
 * @version         1.0
 * @copyright        Copyright © 2017 Afidz Achmad Novendi <afidzachmadn@gmail.com>
############################################################################################################-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{env('APP_URL')}}/images/bisqa.png">
     <title>Sistem Sertifikasi Terpadu - Kementrian Perindustrian Republik Indonesia</title>
      <!-- Bootstrap Core CSS -->
    <link href="{{env('APP_URL')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Editable CSS -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/plugins/bower_components/jquery-datatables-editable/datatables.css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />


    <!-- animation CSS -->
    <link href="{{env('APP_URL')}}/css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- page CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

    <!--alerts CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!--My admin Custom CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <link href="{{env('APP_URL')}}/css/animate.css" rel="stylesheet">
    <!-- dropify -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/plugins/bower_components/dropify/dist/css/dropify.min.css">
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

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view --><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="/user/dashboard"><b><img src="{{env('APP_URL')}}/plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>BISQA</strong>&nbspsystems</span></a></div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-right hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search" class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
               
                
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{env('APP_URL')}}/storage/img/{{Session::get('img_url')}}" alt="user-img" class="img-circle"> <span class="hide-menu">{{Session::get('name')}}</span>
                        </a>
                         <ul class="nav nav-second-level">
                            <li><a href="{{env('APP_URL')}}/logout-admin"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- yield sidebar -->
                    @yield('sidebar-dashboard-admin')
                    @yield('sidebar-iso-admin')
                    @yield('sidebar-sni-admin')
                  
                </ul>
            </div>
        </div>
        <!-- yield untuk breadcrumb -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- letakan yield -->
                
                @yield('breadcrumb-dashboard-admin')
                @yield('breadcrumb-iso-admin')
                @yield('breadcrumb-sni-admin')
                @yield('breadcrumb-belum-terverifikasi-iso-admin')
                @yield('breadcrumb-terverifikasi-iso-admin')
                @yield('breadcrumb-belum-terverifikasi-pembayaran-iso-admin')
                @yield('breadcrumb-terverifikasi-pembayaran-iso-admin')
                @yield('breadcrumb-upload-hasil-sertifikasi-iso-admin')
                @yield('breadcrumb-pilih-pegawai-inspeksi-iso-admin')
                @yield('breadcrumb-riwayat-pegawai-inspeksi-iso-admin')
                
                @yield('breadcrumb-belum-terverifikasi-sni-admin')
                @yield('breadcrumb-belum-terverifikasi-pembayaran-sni-admin')
                @yield('breadcrumb-terverifikasi-pembayaran-sni-admin')
                @yield('breadcrumb-upload-hasil-sertifikasi-sni-admin')
                @yield('breadcrumb-terverifikasi-sni-admin')
                  

                <!-- contents start here -->
                @yield('header-dashboard-admin')
                    <!-- FOR THIS SECTION IS ONLY FOR DASHBOARD! -->
                


                <!-- .row -->
                <div class="row">
                    
                     @yield('isi-dashboard-admin')
                     @yield('isi-iso-admin')
                     @yield('isi-sni-admin')

                     @yield('isi-belum-terverifikasi-iso-admin')
                     @yield('isi-terverifikasi-iso-admin')
                     @yield('isi-belum-terverifikasi-pembayaran-iso-admin')
                     @yield('isi-terverifikasi-pembayaran-iso-admin')
                     @yield("isi-upload-hasil-sertifikasi-iso-admin")
                     @yield("isi-pilih-pegawai-inspeksi-iso-admin")
                     @yield("isi-riwayat-pegawai-inspeksi-iso-admin")

                     @yield('isi-belum-terverifikasi-sni-admin')
                     @yield('isi-belum-terverifikasi-pembayaran-sni-admin')
                     @yield('isi-terverifikasi-pembayaran-sni-admin')
                     @yield("isi-upload-hasil-sertifikasi-sni-admin")
                     @yield('isi-terverifikasi-sni-admin')

                     
                    



                </div>
                <!-- .row -->
                
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; KEMENTERIAN PERINDUSTRIAN REPUBLIK INDONESIA </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
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
    <!-- Sweet-Alert  -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

    <!--Morris JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- jQuery for carousel -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.custom.js"></script>

    <!-- Sparkline chart JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- jQuery peity -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{env('APP_URL')}}/js/custom.min.js"></script>
    <script src="{{env('APP_URL')}}/js/dashboard1.js"></script>
    <!--Style Switcher -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
     <!-- Custom Theme JavaScript -->
    <script src="{{env('APP_URL')}}/js/custom.min.js"></script>
    <script src="{{env('APP_URL')}}/js/jasny-bootstrap.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{env('APP_URL')}}/plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
    



    <!-- jQuery file upload -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();
            // Translated
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                }
                else {
                    drDestroy.init();
                }
            })
        });
    </script>
     <script src="{{env('APP_URL')}}/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    </script>


    <!--Style Switcher -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js">
    </script>
</body>

</html>