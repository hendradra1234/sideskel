@extends('template')
@section('main-dashboard')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">


        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <!-- <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <h4 class="alert-heading">SIDESKEL</h4>
                          <p class="text-dark">1 Batas Berhasil ditambahkan</p>
                        </div>
                    </div> -->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">BATAS WILAYAH</strong>
                                <a href="" class="btn btn-primary btn-sm float-right"> TAMBAH </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped">
                                    <tr>
                                        <th>NO</th>
                                        <th>MATA ANGIN</th>
                                        <th>URAIAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Timur</td>
                                        <td>Desa ABC</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">EDIT</a>
                                            <form action="#" class="d-inline">
                                                <input type="hidden">
                                                <input type="submit" class="btn btn-danger btn-sm" value="HAPUS">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Barat</td>
                                        <td>Desa DEF</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">EDIT</a>
                                            <form action="#" class="d-inline">
                                                <input type="hidden">
                                                <input type="submit" class="btn btn-danger btn-sm" value="HAPUS">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Utara</td>
                                        <td>Desa GHI</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">EDIT</a>
                                            <form action="#" class="d-inline">
                                                <input type="hidden">
                                                <input type="submit" class="btn btn-danger btn-sm" value="HAPUS">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Selatan</td>
                                        <td>Desa JKL</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">EDIT</a>
                                            <form action="#" class="d-inline">
                                                <input type="hidden">
                                                <input type="submit" class="btn btn-danger btn-sm" value="HAPUS">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Tenggara</td>
                                        <td>Desa MNO</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">EDIT</a>
                                            <form action="#" class="d-inline">
                                                <input type="hidden">
                                                <input type="submit" class="btn btn-danger btn-sm" value="HAPUS">
                                            </form>
                                        </td>
                                    </tr>
                                    
                                </table>
                                
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-4">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Desa Kayu Bulan, Gorontalo
                    </div>
                    <div class="col-sm-4 text-center">
                        SIDESKEL Development by. <strong> <a href="#">Adnan Kasim</a></strong>
                    </div>
                    <div class="col-sm-4 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
@stop