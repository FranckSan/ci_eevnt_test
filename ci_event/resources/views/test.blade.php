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
{{-- class="bg-white" --}}

{{-- border border-primary"> --}}
<body >

	{{-- ----------------------------------------------------- Nav Bar --------------------------------------------------------- --}}

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" class="d-inline-block align-text-top">
				<img src=" {{asset('assets/images/logo.png')}} " alt="Logo Côte d'Ivoire Evenement" width="200" height="50">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end border border-primary" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href=" {{route('home')}} "><button type="button" class="btn btn-sm border border-white btn-outline-warning">Acceuil</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#QuiSommesNous"><button type="button" class="btn btn-sm border border-white btn-outline-warning">Qui Sommes-Nous</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#NosProduits"><button type="button" class="btn btn-sm border border-warning btn-outline-warning">Nos Produits</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#NousContacter"><button type="button" class="btn btn-sm border border-warning btn-outline-warning">Nous Contacter</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#OuSommeNous"><button type="button" class="btn btn-sm border border-warning btn-outline-warning">Ou Somme Nous</button></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>





	{{-- ----------------------------------------------------- End Nav Bar --------------------------------------------------------- --}}


    {{-- <div class="container-fluid p-0 fixed-top">
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
    </div> --}}

    {{-- carousel --}}

    <div class="container-fluid h-10 p-0 " style="";>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="assets/images/carousel/img_1.jpg" class="d-block  carousel_height" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/carousel/img_2.jpg" class="d-block  carousel_height" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/carousel/img_4.jpg" class="d-block  carousel_height" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/carousel/img_7.jpg" class="d-block  carousel_height" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/carousel/img_8.jpg" class="d-block  carousel_height" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Precédant</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
	
    {{-- end carousel --}}

	{{-- ___________________________________________________________________________________ --}}

	{{-- presentation --}}

    <div class="container-fluid text-center bg-white mt-5 mb-5 pb-5" id="QuiSommesNous">
		<br> <br>
		<h2 class="thin mb-4 ">Qui sommes nous ?</h2>
		<p class="text-muted">
			Côte d’Ivoire Évènement (Ci-Event) est une agence événementielle spécialisée dans la gestion événementielle<br> 
			de bout en bout et la communication
		</p>
	</div>

	{{-- end presentation --}}

	{{-- ___________________________________________________________________________________ --}}


	{{-- Nos Produits --}}

    <div class="jumbotron top-space text-white" id="NosProduits">
		<div class="container">
			
			<h2 class="text-center thin mb-4">Nos Produids</h2>
			
			<div class="row d-flex justify-content-evenly">
				<div class="col-md-3 col-sm-6">
					<div class="h-caption">
						<img src=" {{asset('assets/images/succes.png')}} " class="img-fluid" alt="Conférence Succes de Cote d'Ivoire Evenement">
						<h3 class="text-white mt-"> Conférences SUCCÈS</h3>
					</div>
					<div class="h-body text-center">
						<p>une tribune qui a pour objectif de mettre en avant les talents et les réussites locaux ivoiriens et africains</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="h-caption">
						<img src=" {{asset('assets/images/bet.png')}} " class="img-fluid" alt=" l'evenement Between Us de Côte d'Ivoire Evenement">
						<h3 class="text-white"> Conférences SUCCÈS</h3>
					</div>
					<div class="h-body text-center">
						<p>l’Afterwork de réseautage professionnel</p>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="h-caption">
						<h4 class="text-white">Creative Commons</h4>
					</div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
			</div>
		
		</div>
	</div>

	{{-- end nos services --}}

	{{-- ___________________________________________________________________________________ --}}

	<div class="container-fluid my-5" id="#NousContacter">

		<h2 class="text-center thin mt-6">Nous contacter</h2>
		<br>

		{{-- <div class="row d-flex flex-column align-items-center border border-primary">
			<h4 class="text-center border border-primary">Pour prendre rendez-vous, avoir plus d'innformation ou nous contacter </h4>
     		<a class="btn btn-outline-warning" href="#">Contacter</a>
  		</div> --}}
		<div class="container-fluid d-flex flex-column align-items-center">
			<h5 class="mb-4">Pour prendre rendez-vous, avoir plus d'innformation ou nous contacter.</h5>
     		<p class=""><a href=" {{route('contact')}} " class="btn btn-outline-warning">Contacter »</a></p>
  		</div>

	</div>

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
</html>