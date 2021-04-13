<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="../vendore/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-white">

              <!-- Page Wrapper -->
    <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{asset('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="../img" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">LE SAVAN <sup>1</sup></div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active my-4">
        <a class="nav-link" href="{{asset('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active my-4">
        <a class="nav-link" href="{{asset('livre')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ajouter un livre</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item active my-4">
        <a class="nav-link" href="{{asset('biblio')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Bibliothéque</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Stock</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{asset('auteur')}}">Auteur</a>
                <a class="collapse-item" href="{{asset('type')}}">Types</a>
                <a class="collapse-item" href="{{asset('pays')}}">Pays</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

         <!-- Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-white my-4">
                <span>Copyright &copy; Savan 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - Messages -->
              
                
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="img/admin.png">
                        <span class="mr-2 d-none d-lg-inline text-gray-100 small">{{Auth::user()->name}}</span>
                    </a>
                </li>
            </ul>
            <div class="topbar-divider d-none d-sm-block"></div>
            <button type="reset" class="btn "> 
                            <a class="dropdown-item text-white" href="{{ url('log') }}"
                            >
                                {{ __('Deconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
            </button>

        </nav>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            @if(session("reponse"))
                       <h1 class="alert text-center">{{session("reponse")}}</h1>
                     @endif
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                    <div class="col-lg-5">
                   
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajouter un livre !</h1>
                            </div>
                            <form class="user" method="post" action="{{route('addbook')}}">
                            @csrf
                                <div class="form-group row">
                                    <div class="col-sm mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user @error('titre') is-invalid @enderror" id="exampleFirstName" placeholder="Titre" name="titre"  required autocomplete="titre" autofocus>
                                    </div>
                                    
                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('auteur') is-invalid @enderror" id="exampleInputEmail" 
                                        placeholder="Auteur" name="auteur"  required autocomplete="auteur" autofocus>
                                </div>
                                @error('auteur')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('pays') is-invalid @enderror" id="exampleInputEmail"
                                        placeholder="Pays" name="pays" required autocomplete="pays" autofocus>
                                </div>
                                @error('pays')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('type') is-invalid @enderror" id="exampleInputEmail"
                                        placeholder="Types" name="type"  required autocomplete="type" autofocus>
                                </div>
                                @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user @error('parution') is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Année de parution" name="parution"  required autocomplete="parution" autofocus>
                                    </div>
                                </div>
                                @error('parution')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror

                                <hr>
                                <a href="" class="btn btn-prima btn-user btn-block">
                                    <button class="btn btn-info mb-4">Enregistrer</button>
                                </a>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendore/jquery/jquery.min.js"></script>
    <script src="../vendore/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>-->

    <!-- Custom scripts for all pages
    <script src="../js/sb-admin-2.min.js"></script>-->

</body>

</html>