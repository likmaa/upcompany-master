@extends('admin.partial.layout')

@section('css')
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet"> --}}
	<link rel="stylesheet" href="{{ asset('summernote/dist/summernote-lite.css') }}">

@stop

@section('content')
	<div class="app-title">
	  <div>
	    <h1><i class="fa fa-dashboard"></i> A propos</h1>
	    <p>A free and open source Bootstrap 4 admin template</p>
	  </div>
	  <ul class="app-breadcrumb breadcrumb">
	    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	    <li class="breadcrumb-item"><a href="#">A propos</a></li>
	  </ul>
	</div>
	<!-- Navs-->
  <div class="tile mb-4">
  	@include('admin.message.success')
  	<form action="{{ route('update-abouts') }}" enctype="multipart/form-data" method="POST">
  		@csrf
	    <div class="row">
	      <div class="col-lg-12">
	        <div class="page-header">
	          {{-- <h2 class="mb-3 line-head" id="navs">Navs</h2> --}}
	          <div class="tile-title-w-btn">
	            <h2 class="title">A propos</h2>
	            <p><button class="btn btn-primary mr-3" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
					  <button class="btn btn-secondary" type="button"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</button></p>
	        	</div>
	        </div>
	      </div>
	    </div>
	    <div class="row" style="margin-bottom: 2rem;">
				<div class="col-lg-12">
					{{-- <div class="form-group">
              <label class="col-form-label col-form-label-lg" for="title">Titre</label>
              <input class="form-control form-control-lg" id="title" type="text" value="Navs Table">
          </div> --}}
					<div class="bs-component">
					  <ul class="nav nav-tabs">
					    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Contenu Texte</a></li>
					    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Images</a></li>
					    <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
					  </ul>
					  <div class="tab-content" id="myTabContent">
					    <div class="tab-pane fade active show" id="home">
					    	<div class="p-x-5 pt-5">
						      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor,</p>
						      <div class="mb-5">
							      <div class="form-group">
							        <label for="description_1">Contenu texte section 1</label>
							        <textarea class="form-control" id="description_1" name="description_1" rows="3" >{!!$abouts[0]->description!!}</textarea>
							      </div>
						      </div>
						      <div class="mb-5">
							      <div class="form-group">
							        <label for="description_2">Contenu texte section 2</label>
							        <textarea class="form-control" name="description_2" id="description_2" rows="3">{!!$abouts[1]->description!!}</textarea>
							      </div>
						      </div>
					    	</div>
					    </div>
					    <div class="tab-pane fade" id="profile">
					    	<div class="p-x-5 pt-5">
				      		<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. </p>
				      		<div class="form-group row mb-4">
				      			<div class="col-md-2">
				      				<img src="{{ asset($abouts[0]->image->path) }}" alt="" class="img-70 mr-3 img-thumbnail img-show">
				      			</div>
				      		  <div class="col-md-8">
				      		  	<label class="control-label">Image de la section 1</label>
				      		    <input class="form-control" name="image_1" type="file">
				      		  </div>
				      		</div>
				      		<div class="form-group row mb-4">
				      			<div class="col-md-2">
				      				<img src="{{ asset($abouts[1]->image->path) }}" alt="" class="img-70 mr-3 img-thumbnail img-show">
				      			</div>
				      		  <div class="col-md-8">
				      		  	<label class="control-label">Image de la section 2</label>
				      		    <input class="form-control" name="image_2" type="file">
				      		  </div>
				      		</div>
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

	
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script> --}}
  <script src="{{ asset('summernote/dist/summernote-lite.js') }}"></script>
  <script>

  	$(document).ready(function() {
  		
      $('#description_1').summernote({
        // placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 200,
        lang: 'fr-FR',
      });


      $('#description_2').summernote({
        // placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 200,
        lang: 'fr-FR',
      });

  	});
  </script>
@endpush