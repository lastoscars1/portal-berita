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
                                        Data Pegawai
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
                            <h3>Edit Data Pegawai</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{url('update-pegawai/'.$peg->id)}}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pegawai" value="{{ $peg->nama }}">
                                </div>
                                <div class="form-group">
                                    <select name="jabatan_id" id="jabatan_id" class="form-control select2" style="100%">
                                    <option disabled value>Pilih Jabatan</option>
                                    <option value="{{ $peg->jabatan_id }}">{{ $peg->jabatan->jabatan }}</option>
                                    @foreach ($jab as $item)
                                    <option value="{{ $item->id }}">{{$item->jabatan}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">{{ $peg->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ $peg->tanggal_lahir }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Ubah Data</button>
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
