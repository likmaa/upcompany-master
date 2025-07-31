@extends('admin.partial.layout')

@section('css')
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet"> --}}
	<link rel="stylesheet" href="{{ asset('summernote/dist/summernote-lite.css') }}">

@stop

@section('content')
	<div class="app-title">
	  <div>
	    <h1><i class="fa fa-dashboard"></i> {!!$service->title!!}</h1>
	    <p>A free and open source Bootstrap 4 admin template</p>
	  </div>
	  <ul class="app-breadcrumb breadcrumb">
	    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	    <li class="breadcrumb-item"><a href="#">{!!$service->title!!}</a></li>
	  </ul>
	</div>
	
	<!-- Navs-->
  <div class="tile mb-4">
  	@include('admin.message.success')
  	<form action="{{ route('service.update', $service) }}" enctype="multipart/form-data" method="POST">
  		@csrf
  		@method('PUT')
	    <div class="row">
	      <div class="col-lg-12">
	        <div class="page-header">
	          <div class="tile-title-w-btn">
	            <h3 class="title">Service : {{$service->title}} </h3>
	            <p><button class="btn btn-primary mr-3" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
					  <button class="btn btn-secondary" type="button"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</button></p>
	        	</div>
	        </div>
	      </div>
	    </div>
	    <div class="row" style="margin-bottom: 2rem;">
				<div class="col-lg-12">
					<div class="form-group">
			          <label class="col-form-label col-form-label-lg" for="title">Titre</label>
			          <input class="form-control form-control-lg" id="title" name="title" type="text" value="{!!$service->title!!}">
			      </div>
					<div class="bs-component">
					  <ul class="nav nav-tabs">
					    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Contenu Texte</a></li>
					    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Images</a></li>
					    <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
					  </ul>
					  <div class="tab-content" id="myTabContent">
					    <div class="tab-pane fade active show" id="home">
					    	<div class="p-x-5 pt-5">
						      
						      <div class="mb-5">
							      <div class="form-group">
							        <label for="short_description">Courte description</label>
							        <textarea name="short_description" class="form-control" id="short_description" rows="2" >{!!$service->short_description!!}</textarea>
							      </div>
						      </div>
						      <div class="form-group">
						      	<input type="hidden" name="type" value="{{$service->type}}">
						      </div>
						      <div class="mb-5">
							      <div class="form-group">
							        <label for="description">Description</label>
							        <textarea class="form-control" value='{!!$service->description!!}' name="description" id="description" rows="3"></textarea>
							      </div>
						      </div>
					    	</div>
					    </div>
					    <div class="tab-pane fade" id="profile">
					    	<div class="p-x-5 pt-5" id="app">
				      		
				      		@foreach($service->images as $image)
					      		<div class="form-group row mb-4" >

					      			<div class="col-md-2">
					      				<img src="{{ asset($image->path) }}" alt="" class="img-70 mr-3 img-thumbnail img-show">
					      			</div>
					      		  <div class="col-md-4">
					      		  	<label class="control-label">Changez l'image</label>
					      		    <input class="form-control" name="images[]" type="file">
					      		  </div>
					      		  <div class="col-md-6">
					      		  	<label class="control-label">Ajouter une description</label>
					      		    <input class="form-control" name="img-title[]" type="text">
					      		  </div>
					      		  {{-- <div class="col-md-12">
					      		  	<div class="text-right">
						      		  	<div class="btn-group">
							      		  		<a class="btn btn-primary edit-btn" data-route="{{ route('service.show',$service) }}" href="#"><i class="fa fa-lg fa-clone"></i></a>
							      		  		<a class="btn btn-primary" href="{{ route('service.show',$service) }}"><i class="fa fa-lg fa-eye"></i></a>
							      		  		<a class="btn btn-primary" href="{{ route('service.show',$service) }}"><i class="fa fa-lg fa-trash"></i></a>
						      		  	</div>
					      		  	</div>
					      		  </div> --}}
					      		</div>
				      		@endforeach
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
	    </div>
	    <div class="row">
	      <div class="col-lg-12">
        	<p class="text-right">
        		<button class="btn btn-primary mr-3" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
					  <button class="btn btn-secondary" type="button"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</button>
					</p>
	      </div>
	    </div>
    </form>
  </div>
@stop

@push('js')

  <script src="{{ asset('summernote/dist/summernote-lite.js') }}"></script>
  <script>

  	$(document).ready(function() {
  		
  		$('#description').summernote({
        // placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 200,
        lang: 'fr-FR',
      });

      $('#description').summernote('code',`{!!$service->description!!}`);

  	});
  </script>
@endpush