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
	<div class="tile mb-4">
		@include('admin.message.success')
		<div class="page-header">
			<div class="tile-title-w-btn">
        <h2 class="title">Actualité</h2>
        <p>
      <a class="btn btn-primary" href="{{route('article.create')}}"><i class="fa fa-fw fa-lg fa-plus"></i>Nouveau</a></p>
      </div>	
			<h3 class="tile-title">Toutes les articles</h3>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Selection</th>
									<th>Titre</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($articles as $article)
									<tr>
					          <td>{{ $loop->iteration }}</td>
					          <td>
					          	<div class="animated-checkbox">
					          	  <label>
					          	    <input name="aid[]" value="{{ $article->id}}" type="checkbox"><span class="label-text"></span>
					          	  </label>
					          	</div>
					          </td>
					          <td><h5><a href="{{ route('article.show',$article) }}">{{ $article->title}} </a></h5>
					          </td>
					          <td>
					          	<div class="hover" >
					          		<div class="btn-group">
					          			<a class="btn btn-primary" href="{{ route('article.show',$article) }}"><i class="fa fa-lg fa-eye"></i></a>
					          			<a class="btn btn-primary" href="{{ route('article.show',$article) }}"><i class="fa fa-lg fa-edit"></i></a>
					          			<a class="btn btn-primary" 
					          			href="#" onclick="event.preventDefault();
					          			if (confirm('Supprimer l\'article ?')) {
					          				document.getElementById('delete-{{$article->id}}').submit();
					          			}
					          			" ><i class="fa fa-lg fa-trash"></i>
														<form id="delete-{{ $article->id}}" action="{{ route('article.destroy',$article) }}" method="POST" style="display: none;">
														@method('DELETE')
														@csrf
														</form>
					          			</a>
					          		</div>
					          	</div>
					          </td>
					        </tr>
				        @endforeach
							</tbody>
						</table>	
					</div>
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
