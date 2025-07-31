@extends('admin.partial.layout')


@section('content')
	<div class="app-title">
	  <div>
	    <h1><i class="fa fa-dashboard"></i> Actualité</h1>
	    <p>Publié de nouvelles actualitées</p>
	  </div>
	  <ul class="app-breadcrumb breadcrumb">
	    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	    <li class="breadcrumb-item"><a href="#">Actualité</a></li>
	  </ul>
	</div>
	@include('admin.message.notification')
	<!-- Actualite -->
	<div class="tile mb-4" id="app">
		@include('admin.message.success')
		<div class="page-header">
			<div class="tile-title-w-btn">
        <h2 class="title">Actualité</h2>
        <p>
				<a class="btn btn-primary" href="{{route('article.create')}}"><i class="fa fa-fw fa-lg fa-plus"></i>Nouveau</a></p>
      </div>	
			<h3 class="tile-title">Toutes les articles</h3>
		<article-list ></article-list>
		</div>
	</div>


	<!-- Modal, enregistrement d'un service -->
    <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="ajouterServiceTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">  Modifier le slide</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                  <form action="" class="update-form" enctype="multipart/form-data" action="" method="POST">
                  	@csrf
                  	@method('PUT')
                  	<div class="form-group">
                  	  <label class="control-label">Titre</label>
                  	  <input class="form-control" type="text" name="title" id="title" placeholder="Entrez le titre">
                  	</div>
                  	<div class="form-group">
                  	  <label class="control-label">Sous titre</label>
                  	  <input class="form-control" type="text" name="sub_title" id="sub_title" placeholder="Entrez le sous titre">
                  	</div>
                  	<div class="form-group">
                  		<div class="row">
                  			<div class="col-lg-3">
                  				<img src="" alt="" class="img-70 mr-3 img-thumbnail" id="showImage">
                  			</div>
                  			<div class="col-lg-9">
													<label class="control-label">Changer l'image du slide</label>
													<input class="form-control" type="file" name="image" id="image" >
                  			</div>
                  		</div>
                  	</div>
										<div class="tile-footer">
										  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>&nbsp;&nbsp;&nbsp;
										  <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</button>
										</div>
                  </form>
                </div>

                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div> --}}

            </div>
        </div>
    </div>
@stop

@push('js')
	<script src="{{asset('js/app.js')}}"></script>
@endpush