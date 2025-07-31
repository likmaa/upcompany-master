@extends('admin.partial.layout')


@section('content')
	<div class="app-title">
	  <div>
	    <h1><i class="fa fa-dashboard"></i> Informations Générale</h1>
	    <p>A free and open source Bootstrap 4 admin template</p>
	  </div>
	  <ul class="app-breadcrumb breadcrumb">
	    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	    <li class="breadcrumb-item"><a href="#">Information</a></li>
	  </ul>
	</div>
	
	<div class="tile mb-4">
		@include('admin.message.success')
		<div class="row">
			<div class="col-md-12">
	      <div class="page-header">
	        <div class="tile-title-w-btn">
	          <h3 class="title">Information Générale</h3>
	      	</div>
	      </div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
				  <div class="card-header text-center">
				  	Formulaire
				  </div>
				  <div class="card-body">
				    <h5 class="card-title text-center">Information générale du site</h5>
				    <p class="card-text text-center">Remplissez les champs ci-dessous puis appuyer sur enregistrer pour mettre à jour.</p>
				    <form action="{{ route('info.update',$info) }}" method="POST">
				    	@csrf
				    	@method('PUT')
					    <div class="form-group">
					        <label for="recipient-name" class="col-form-label"><i class="fa fa-home mr-2"></i>Adresse</label>
					        <textarea type="text" name="adresse"  class="form-control" required> {!!$info->adresse!!} </textarea>
					    </div>
					    <div class="form-group">
					        <label for="recipient-name" class="col-form-label"><i class="fa fa-phone mr-2"></i>Téléphone</label>
					        <input type="text" name="telephone" value="{{$info->telephone}}" class="form-control" required >
					    </div>
					    <div class="form-group">
					        <label for="recipient-name" class="col-form-label"><i class="fa fa-envelope mr-2"></i> Email</label>
					        <input type="email" name="email" value="{{$info->email}}" required class="form-control">
					    </div>
							<div class="form-group">
					        <label for="recipient-name" class="col-form-label"><i class="fa fa-info-circle mr-2"></i>A propos de nos conseils</label>
					        <textarea type="text" name="description"  class="form-control" rows="5" required> {{$info->description}} </textarea>
					    </div>				    
					    <p>
					    	<button class="btn btn-primary mr-3" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
	  			  		<button class="btn btn-secondary" type="button"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</button>
	  			  		</p>
  			  		</form>
				  </div>
				</div>
			</div>
		</div>
		<form action="" method="POST">
			
		</form>
	</div>
@stop