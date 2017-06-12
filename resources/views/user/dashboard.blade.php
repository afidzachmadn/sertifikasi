@extends('layout.master')

@section("isi-dashboard-user")
 <!-- .row -->
                <div class="row">
                    
                     <div class="col-lg-6 col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Status ISO
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="text-center">
                                <div class="btn btn-danger">Belum Terverifikasi
                                    </div>
                                    <span><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </button>
                                </span>
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"> Status SNI
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="text-center">
                                <div class="btn btn-success">Terverifikasi
                                    </div>
                                    <span><button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i> </button>
                                </span>
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>

@endsection