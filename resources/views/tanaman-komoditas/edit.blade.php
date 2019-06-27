@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    @include('errors.form_error')

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-leaf"></i>&nbsp; EDIT TANAMAN KOMODITAS</strong>
                                <a href="{{ url('tanaman-komoditas') }}" class="btn btn-info btn-sm float-right"> <i class="fa fa-arrow-left fa-lg"></i> </a>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <!-- <div id="pay-invoice"> -->
                                <div class="card-body" style="padding-top: 0">
                                    {!! Form::model($tanamanKomodita, ['method' => 'patch', 'action' =>   ['TanamanKomoditasController@update', $tanamanKomodita->id]]) !!}
                                        @include('tanaman-komoditas.form')
                                    {!! Form::close() !!}
                                </div>
                                <!-- </div> -->

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        
        @include('footer')
        
    </div>
    <!-- /#right-panel -->
@stop