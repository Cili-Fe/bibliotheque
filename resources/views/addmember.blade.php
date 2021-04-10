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

<body class="bg-gradient-dark">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-5">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Créer un compte!</h1>
                            </div>
                            <form class="user" action="/inscription"  method="post">
                                {{@csrf_field()}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        @if($errors->has('nom'))
                                        <p class="font-weight-bold text-info">{{$errors->first('nom')}} </p> 
                                        @endif

                                        <input type="text" class="form-control form-control-user" id=""  placeholder="Nom" name="nom" require="required">
                                    </div>

                                    <div class="col-sm-6">

                                        @if($errors->has('prenom'))
                                        <p class="font-weight-bold text-info">{{$errors->first('prenom')}} </p> 
                                        @endif

                                        <input type="text" class="form-control form-control-user" id=""
                                            placeholder="Prénom" name="prenom" require="required">
                                    </div>

                                </div>
                                <div class="form-group">

                                    @if($errors->has('email'))
                                        <p class="font-weight-bold text-info">{{$errors->first('email')}} </p> 
                                    @endif
                                    <input type="email" class="form-control form-control-user" id=""
                                        placeholder="Email" name="email" require="required">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    @if($errors->has('password'))
                                        <p class="font-weight-bold text-info">{{$errors->first('password')}} </p> 
                                    @endif
                                        <input type="password" class="form-control form-control-user"
                                            id="" placeholder="Mot de passe" name="password" require="required">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                            <hr>
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