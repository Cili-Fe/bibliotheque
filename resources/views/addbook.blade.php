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

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
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