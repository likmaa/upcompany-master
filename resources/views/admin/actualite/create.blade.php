@extends('admin.partial.layout')

@section('css')
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet"> --}}
	<link rel="stylesheet" href="{{ asset('summernote/dist/summernote-lite.css') }}">

@stop

@section('content')
	<div class="app-title">
	  <div>
	    <h1><i class="fa fa-dashboard"></i> Créer un article</h1>
	    <p>A free and open source Bootstrap 4 admin template</p>
	  </div>
	  <ul class="app-breadcrumb breadcrumb">
	    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	    <li class="breadcrumb-item"><a href="#">Créer un article</a></li>
	  </ul>
	</div>

	@include('admin/message/notification')
	
	<!-- Navs-->
  <div class="tile mb-4">
          {{-- @include('admin.message.success') --}}
          <form action="{{ route('article.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="page-header">
                  {{-- <h2 class="mb-3 line-head" id="navs">Navs</h2> --}}
                  <div class="tile-title-w-btn">
                    <h2 class="title">Créer un article</h2>
                    <p><button class="btn btn-primary mr-3" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
                  <a class="btn btn-secondary" href="{{route('article.index')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-bottom: 2rem;">
              <div class="col-lg-12">
                <div class="form-group">
                    <label class="col-form-label col-form-label-lg" for="name">Titre de l'article</label>
                    <input class="form-control form-control-lg" id="name" name="title" type="text">
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
                            <label for="short_description">Description courte</label>
                            <textarea class="form-control" id="short_description" name="short_description" rows="3" ></textarea>
                          </div>
                        </div>
                        <div class="mb-5">
                          <div class="form-group">
                            <label for="description">Contenu de l'article</label>
                            <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                      <div class="p-x-5 pt-5">
                        <div class="form-group row mb-4">
                          <div class="col-md-2">
                            <img src="" alt="" class="img-70 mr-3 img-thumbnail img-show">
                          </div>
                          <div class="col-md-8">
                            <label class="control-label">Image de l'article</label>
                            <input class="form-control" name="image" type="file">
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
                <a class="btn btn-secondary" href="{{route('article.index')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</a>
                </p>
              </div>
            </div>
          </form>
        </div>
@stop

@push('js')
  @include('admin.editor.summernote')

@endpush