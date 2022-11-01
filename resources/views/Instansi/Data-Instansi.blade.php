
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
                            <div class="card-tools mt-2 mr-3 text-right">
                                <a href="{{route('create-instansi')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Instansi</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                                @foreach ($dtinstansi as $item)
                                    
                                
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->nama_instansi }}</td>
                                    <td>{{ $item->alamat_instansi }}</td>
                                    <td>{{ $item->telepon_instansi }}</td>
                                    <td>{{ $item->email_instansi }}</td>
                                    <td>
                                        <a href="{{url('edit-pegawai/'.$item->pegawai_id)}}"><i class="far fa-edit"></i></a> | <a href="{{url('delete-pegawai/'.$item->pegawai_id)}}" class="href"><i class="fas fa-trash-alt" style="color: red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            
                        </div>
                       
                                {{-- <div class="card-footer">
                            
                                {{ $dtinstansi->links() }}
                                
                            </div> --}}
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

