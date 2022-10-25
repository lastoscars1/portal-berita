
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
                        <div class="card-hearder">

                                <h3>Print Data Pegawai</h3>

                        </div>
                        <div class="card-body">
                        <div class="input-group mb-3">
                            <label for="label">Tanggal Awal</label>
                            <input type="date" name="tglawal" id="tglawal" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <label for="label">Tanggal Akhir</label>
                            <input type="date" name="tglakhir" id="tglakhir" class="form-control">
                        </div>

                        <div class="input-group mb-3 btn btn-peimary">
                            <a href="" onclick="this.href='/cetak-data-pertanggal/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="blank" class="btn btn-primary col-md-12"> Cetak Laporan Pertanggal<i class="fas fa-print"></i></a>
                        </div>
                            
                        </div>
                       
                    </div>
                    
                </div>
                <!-- /.content -->
            </div>
            
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
          
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">@include('Template.footer')</footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        @include('Template.script')

        @include('sweetalert::alert')
    </body>

