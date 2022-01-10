<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	{{-- <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
</head>

<body>
    <div class="container-fluid p-0 m-0">
        <div class="container-fluid p-0">
            <nav class="d-flex justify-content-between navbar navbar-dark bg-dark ">
                <div class="col-3 p-0 m-0">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.png" alt="" width="200" height="50">
                    </a>
                </div>
                <div class="col-8 ps-5 d-flex justify-content-center">
                    <!-- Links -->
                    <ul class="col-10 navbar-nav d-flex flex-row justify-content-around ">
                        <li class="nav-item nav-fill">
                            <a class="nav-link" href="#"><button type="button" class="btn border border-dark btn-outline-warning">Acceuil</button></a>
                        </li>
                        <li class="nav-item nav-fill">
                            <a class="nav-link" href="#qui_sommes_nous"><button type="button" class="btn border border-dark btn-outline-warning">Qui Sommes-Nous</button></a>
                        </li>
                        <li class="nav-item nav-fill">
                            <a class="nav-link" href="#sec_1"><button type="button" class="btn border border-dark btn-outline-warning">Nos Produits</button></a>
                        </li>
                        <li class="nav-item nav-fill">
                            <a class="nav-link" href=""><button type="button" class="btn border border-dark btn-outline-warning">Nous Contacter</button></a>
                        </li>
                        <li class="nav-item nav-fill">
                            <a class="nav-link" href="#"><button type="button" class="btn border border-dark btn-outline-warning">Ou Somme Nous</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- -------------------------------------------------------------------------------->
        
        <div class="container-fluid">

            <div class="row ps-5">
                
                <!-- Article main content -->
                <article class="col-sm-9 maincontent">
                    <header class="page-header">
                        <h1 class="mt-5 fw-lighter">Repondre à <span class="fs-2">{{$datas->name}}</span></h1>
                    </header>
                    
                    {{-- <p>
                        We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
                    </p> --}}
                    <br>
                    {{-- class="border border-primary" --}}
                    <form method="POST" action="{{route('answer.message')}}">
                        @csrf
                        <div class="row">
                            {{-- <div class="col-sm-4">
                                <input name="name" class="form-control bg-transparent" type="text" placeholder="Nom et Prenoms" required>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div> --}}
                            <div class="col-sm-4">
                                <input name="email" class="form-control bg-transparent media" type="text" placeholder="Email du destinataire" value="{{$datas->email}}" required>
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="col-sm-4">
                                <input name="name" class="form-control bg-transparent" type="text" placeholder="Nom du destinataire" value="{{$datas->name}}" required>
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <textarea name="message" placeholder="Tapez votre message ici..." class="form-control bg-transparent" rows="9" required></textarea>
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            </div>
                        </div>
                        <br>
                        <div class="container-fluid d-flex justify-content-end p-0">
                            <div class=" m-0 me-4 d-flex justify-content-end">
                                <a class="btn btn-outline-danger" href="{{route('dashboard')}}">Annuler</a>
                            </div>
                            <div class="m-0 d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-warning">Envoyer</button>
                            </div>
                        </div>
                        <br>
                    </form>

                </article>

            </div>
	    </div>	<!-- /container -->


    </div>
</body>

</html>