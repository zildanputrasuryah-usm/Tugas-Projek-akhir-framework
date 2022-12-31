
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Dosen</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/css/bootsrap.css')}}">
    <link rel="stylesheet" href="{{ asset('style/css/bootsrap.main.css')}}">
    <link rel="stylesheet" href="{{ asset('style/css/simple-sidebar.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <b>Data Kampus</b>
                    </a>
                </li>
                <li>
                    <a href="{{ url('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('dosen') }}">Dosen</a>
                </li>
                <li>
                    <a href="{{ url('mahasiswa') }}">Mahasiswa</a>
                </li>
                <li>
                    <a href="{{ url('makul') }}">Mata Kuliah</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Tabel Data Dosen</h1>

                        <button type="button" id="menu-toggle" class="btn btn-outline-dark">Hide Sidebar</button>
                        <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                       <br>
                       <br>
                       <div class="card">
                            <div class="card-header">
                                <div class="pull-left">
                                    <strong>Data Dosen</strong>
                                </div>
                                <div class="pull-right" >
                                    <a href="{{ url('dosen/add') }}" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus"></i> Tambah
                                    </a>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIDN</th>
                                        <th>Nama</th>
                                        <th>Pendidikan</th>
                                        <th>Makul</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <tbody>
                                        @foreach ($dosen as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->NIDN }}</td>
                                                <td>{{ $item->Nama }}</td>
                                                <td>{{ $item->Pendidikan }}</td>
                                                <td>{{ $item->Makul }}</td>
                                                <td>{{ $item->Status }}</td>
                                                <td class="text-center">
                                                    <a href="{{ url('dosen/edit/') }}" class="btn btn-outline-primary">Edit</a>
        
                                                    <form action="{{ url('dosen/') }}" method="post" class='d-inline' onsubmit="return confirm('Yakin hapus data?')">
                                                        @method('delete')
                                                        @csrf
                                                    <button class="btn btn-outline-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </thead>
                        </table>
                            </div>
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('style/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('style/js/bootstrap.min.js')}}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>
