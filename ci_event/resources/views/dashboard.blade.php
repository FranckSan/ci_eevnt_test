<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="icon" href="{{asset('assets/images/icon.png')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>CI Event | Dashboard</title>
</head>
<body >
  <div class="container-fluid p-0 m-0">

	{{-- ----------------------------------------------------- Nav Bar --------------------------------------------------------- --}}

	<nav class="navbar sticky-top navbar-expand-lg navbar-white bg-white headroom border-bottom border-warning mb-5">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" class="d-inline-block align-text-top">
				<img src=" {{asset('assets/images/logo.png')}} " alt="Logo Côte d'Ivoire Evenement" width="200" height="50">
			</a>
			{{-- <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button> --}}
			<div class=" justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href=" {{route('home')}} "><button type="button" class="btn border border-white btn-outline-warning">Acceuil</button></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	{{-- ----------------------------------------------------- End Nav Bar --------------------------------------------------------- --}}


    <!-- ---------------------------- table -------------------------------------->

    <div class="container-fluid my-4 mx-0 px-0 d-flex justify-content-center">
      {{-- border border-warning --}}
      <div class="container-fluid">
        @if ( $datas->count() > 0)
        <table class="table table-light table-striped table-hover table-bordered shadow-sm">
          <thead class="table-warning">
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">Noms Et Prenoms</th>
              <th class="text-center">Email</th>
              <th class="text-center">Numero</th>
              <th class="text-center">Date</th>
              {{-- <th class="text-center">Message</th> --}}
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $list)
              <tr>
                <td class="text-center">
                  {{-- {{++$numb}} --}}
                  {{$list->id}}
                </td>
                <td class="text-center">
                  {{$list->name}}
                </td>
                <td class="text-center">
                  {{$list->email}}
                </td>
                <td class="text-center">
                  {{$list->phone}}
                </td>
                <td class="text-center">
                  {{$list->created_at}}
                </td>
                
                <td class=" text-center p-0">
                  <button type="button" class="btn btn-sm btn-outline-primary mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal{{$list->id}}">Lire</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$list->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Message de {{$list->name}} </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>{{$list->message}}</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal -->
                  {{-- <a href=''><button class="btn btn-sm btn-outline-primary mt-1">Lire</button></i></a> --}}
                  <a href=' {{ route('send.message', $list->id)}} '><button class="btn btn-sm btn-outline-warning mx-1">Repondre</button></i></a>
                  {{-- <a href='{{ route('delete.message', $list->id) }}'><button class="btn btn-sm btn-outline-danger">Supprimer</button></i></a> --}}
                  
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropdelete{{$list->id}}">
                    Supprimer
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdropdelete{{$list->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Merci de confirmer</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Etes-vous certain de vouloir supprimer?
                          <br><br>
                          Message de {{$list->name}}
                          <br>
                          {{$list->message}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-bs-dismiss="modal">Annuler</button>
                          <a href="{{ route('delete.message', $list->id) }}"><button type="button" class="btn btn-danger">Supprimer</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal -->
                  {{-- <a href="" data-confirm="Etes-vous certain de vouloir supprimer?">Suppression</a> --}}

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="containner-fluid d-flex justify-content-evenly">
        {{ $datas->links() }}
        </div>
      @else
        <div class="col-12 card p-4 mt-4 d-flex">
          <div class="body-cart text-center">
            <span class="col-4 text-uppercase h6">Aucune Message recu</span>
          </div>
        </div>
      @endif
      </div>
      <!-- Button trigger modal -->
      

        
  
    </div>

    

  </div>
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>