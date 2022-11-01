<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        @include('Template.head')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('Template.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('Template.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Starter Page</h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Data Instansi
                                    </li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3>Create Data Instansi</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('simpan-instansi') }}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Nama Instansi</label>
                                    <input type="text" id="nama_instansi" name="nama_instansi" class="form-control" placeholder="Nama Instansi">
                                   
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea type="text" id="alamat_instansi" name="alamat_instansi" class="form-control" placeholder="Alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" id="telepon_instansi" name="telepon_instansi" class="form-control" placeholder="Telepon"></input>
                                </div>
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" id="email_instansi" name="email_instansi" class="form-control" placeholder="email"></input>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"> Simpan Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">@include('Template.footer')</footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        @include('Template.script')
    </body>
</html>
