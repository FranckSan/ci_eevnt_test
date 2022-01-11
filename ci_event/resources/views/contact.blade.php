<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Event | Contact</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="{{asset('assets/images/icon.png')}}">

</head>

<body>
	@if(Session::has('success'))
		{{-- <div class="alert alert-success">
			{{Session::get('success')}}
		</div> --}}
		<div id="msg" class="container-fluid alert alert-success d-flex align-items-center" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
			<div class="wm">
				<p class="text-center">Votre message a bien été envoyé, Merci.</p>
			</div>
		</div>
	@endif
	
	{{-- ----------------------------------------------------- Nav Bar --------------------------------------------------------- --}}

	<nav class="navbar sticky-top navbar-expand-lg navbar-white bg-white headroom border-bottom border-warning">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" class="d-inline-block align-text-top">
				<img src=" {{asset('assets/images/logo.png')}} " alt="Logo Côte d'Ivoire Evenement" width="200" height="50">
			</a>
			<button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href=" {{route('home')}} "><button type="button" class="btn border border-white btn-outline-warning">Acceuil</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('home')}}#QuiSommesNous"><button type="button" class="btn border border-white btn-outline-warning">Qui Sommes-Nous</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('home')}}#NosProduits"><button type="button" class="btn border border-white btn-outline-warning">Nos Produits</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('home')}}#NousContacter"><button type="button" class="btn border border-white btn-outline-warning">Nous Contacter</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('home')}}#OuSommeNous"><button type="button" class="btn border border-white btn-outline-warning">Ou Somme Nous</button></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	{{-- ----------------------------------------------------- End Nav Bar --------------------------------------------------------- --}}


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
                            <input name="name" class="form-control bg-transparent" type="text" placeholder="Nom et Prenoms" required autofocus>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="col-sm-4">
                            <input name="email" class="form-control bg-transparent media" type="text" placeholder="Email" maxlength="40" required>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="col-sm-4">
                            <input name="phone" class="form-control bg-transparent" type="tel" placeholder="Numero" maxlength="10" pattern="[0-9]{10}" required>
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
							<a class="btn btn-outline-danger" href="{{route('home')}}">Annuler</a>
						</div>
						<div class="m-0 d-flex justify-content-end">
							{{-- <button type="submit" class="btn btn-outline-warning">Envoyer</button> --}}
							<button type="submit" class="btn btn-outline-warning">Envoyer</button>
						</div>
                    </div>
                    <br>
                </form>

					{{-- <div id="liveAlertPlaceholder"></div>
					<button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
				<button type="button" class="btn btn-sm btn-outline-primary mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Lire</button>
                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="text-center">Votre message a bien été envoyé<br>Merci.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- End Modal --> --}}


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