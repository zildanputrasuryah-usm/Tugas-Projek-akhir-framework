
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Edit Data Makul</title>

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
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Dosen</a>
                </li>
                <li>
                    <a href="#">Mahasiswa</a>
                </li>
                <li>
                    <a href="#">Mata Kuliah</a>
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
                        <h1>Tabel Edit Data Mata Kuliah</h1>

                        <button type="button" id="menu-toggle" class="btn btn-outline-dark">Hide Sidebar</button>
                        <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                       <br>
                       <br>
                       <div class="card">
                            <div class="card-header">
                                <div class="pull-left">
                                    <strong>Edit Data Makul</strong>
                                </div>
                                <div class="pull-right" >
                                    <a href="{{ url('makul') }}" class="btn btn-secondary">
                                        <i class="fa fa-plus"></i> Kembali
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                
                                    <form action="{{ url('makul') }}" method="post">
                                        @method('patch')
                                        @csrf
                                        <div class="form-group">
                                            <label>Makul</label>
                                            <input type="text" name="Nmakul" class="form-control" value="{{ $makul->Makul }}" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Dosen</label>
                                            <input type='text' name="Ndosen" class="form-control" value="{{ $makul->Dosen }}" autofocus required></input>
                                        </div>
                                        <div class="form-group">
                                            <label>SKS</label>
                                            <input type='text' name="Nsks" class="form-control" value="{{ $makul->SKS }}" autofocus required></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Hari</label>
                                            <input type='text' name="Nhari" class="form-control" value="{{ $makul->Hari }}" autofocus required></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Ruang</label>
                                            <input type='text' name="Nruang" class="form-control" value="{{ $makul->Ruang }}" autofocus required></input>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </form>
                                
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
