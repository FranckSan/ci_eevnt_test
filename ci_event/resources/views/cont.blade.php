<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	{{-- <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body >
{{-- fixed-top --}}
    <div class="container-fluid p-0 ">
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

    <div class="container">

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="mt-5 fw-light">Contactez Nous</h1>
				</header>
				
				{{-- <p>
					We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
				</p> --}}
				<br>
                {{-- class="border border-primary" --}}
                <form method="POST" action='{{route('store.message')}}'>
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <input name="name" class="form-control bg-transparent" type="text" placeholder="Nom et Prenoms" required>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="col-sm-4">
                            <input name="email" class="form-control bg-transparent media" type="text" placeholder="Email" required>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="col-sm-4">
                            <input name="phone" class="form-control bg-transparent" type="text" placeholder="Numero" required>
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
                    <div class="container-fluid d-flex justify-content-end P-0">
                        <div class="col-sm-6 m-0 d-flex justify-content-end">
						<button type="submit" class="btn btn-outline-warning">Envoyer</button>
                            {{-- <a href="{{route('send.mail')}}"></a> --}}
                        </div>
                    </div>
                    <br>
                </form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			{{-- <aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Address</h4>
					<address>
						2002 Holcombe Boulevard, Houston, TX 77030, USA
					</address>
					<h4>Phone:</h4>
					<address>
						(713) 791-1414
					</address>
				</div>

			</aside> --}}
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->




    <footer id="footer" class="mt-6 py-3 text-warning bg-dark">

		<div class="footer1 ">
			<div class="container mt-2">
				<div class="row d-flex justify-content-between">
					<div class="col-md-4 d-flex flex-column align-items-center">
						<h3 class="widget-title">Contact</h3>
						<div class="mt-1">
							<p class="">
								<i class="fa fa-phone fs-5 pe-2 text-warning"></i>+225 2722497873<br>
								<a  class="text-decoration-none link-warning" href="mailto:#">
									<i class="fa fa-envelope fs-5 pe-2 text-warning"></i>infos@cievent.ci
									</a>
								<br>
								<a href="" class="text-decoration-none link-warning"><i class="fa fa-map fs-5 pe-2 text-warning"></i>Angre Abidjan, Côte d'Ivoire</a>
							</p>	
						</div>
					</div>

					<div class="col-md-4 d-flex flex-column align-items-center">
						<h3 class="widget-title">Suivez nous</h3>
						<div class="fa-3x">
							{{-- <p class="follow-me-icons"> --}}
								<a href="#"><i class="fa fa-twitter fs-1 text-warning"></i></a>
								<a href="#"><i class="fa fa-instagram fs-1 text-warning" ></i></a>
								<a href="#"><i class="fa fa-youtube fs-1 text-warning"></i></a>
								<a href="#"><i class="fa fa-facebook fs-1 text-warning"></i></a>
							{{-- </p>	 --}}
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer2">
			<div class="container-fluid">
				<div class="row d-flex justify-content-center">
					
					{{-- <div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div> --}}

					<div class="col-md-6 p-0">
						<p class="text-center">
							Copyright &copy; 2022, Côte d'Ivoire Evènement
						</p>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>

    <script src="{{asset('js/app.js')}}"></script>
</body>