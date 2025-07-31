@extends('admin.partial.layout')


@section('content')
	<div class="app-title">
	  <div>
	    <h1><i class="fa fa-dashboard"></i> Slider</h1>
	    <p>A free and open source Bootstrap 4 admin template</p>
	  </div>
	  <ul class="app-breadcrumb breadcrumb">
	    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	    <li class="breadcrumb-item"><a href="#">Slide</a></li>
	  </ul>
	</div>
	<!-- Slide-->
	<div class="tile mb-4">
		@include('admin.message.success')
		<div class="page-header">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="mb-3 line-head" id="buttons">Slide</h2>
				</div>
			</div>	
			<div class="row">
				<div class="col-lg-12">
					@foreach($slides as $slide)
						<div class="media my-3">
							<img src="{{ asset(optional($slide->image)->path) }}" class="mr-3 img-thumbnail img-120" alt="...">
								<div class="media-body">
									<div class="description">
										<h4 class="">{{$slide->title}}</h4>
										<p>{{$slide->sub_title}}</p>
									</div>
									<div class="btn-group">
										<a class="btn btn-primary" href="#"><i class="fa fa-lg fa-eye"></i></a>
										<a class="btn btn-primary edit-btn" data-route="{{ route('slide.show',$slide) }}" href="#"><i class="fa fa-lg fa-edit"></i></a>
										<a class="btn btn-primary" href="#"><i class="fa fa-lg fa-trash"></i></a>
									</div>
								</div>
						</div>
					@endforeach
				</div>
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


@push('js')
<script>

	Laravel.prototype.showEditModal = function(data){
		var img= window.location.origin+'/'+data.image.path;
		$('#title').val(data.title);
		$('#sub_title').val(data.sub_title);
		$('#showImage').attr('src', img);
		$('#modifier').modal('show');

		console.log('data',data);
	};

	/*Laravel.prototype.updateMethod = function(e){
		e.preventDefault();
		
		var data=new FormData(this);
		files=$('#modifier form input:file');
		if (files.length > 0) {
			files.each(function(index, el) {
				
				data.append($(this)[0].name, $(this)[0].files[0]);
			});
		}
		
		$.ajax({
			url: $(this).attr('action'),
			type: 'POST',
			processData: false,
			contentType: false,
			data: data,
			beforeSend:function(){
				alert('Can send ?')
			},
			success:function(data){
				console.log("success",data);
			},
			error:function(dara){
				console.log('error',data);
			}
		});
	};*/

	$(document).ready(function() {
		laravel=new Laravel;
		
		laravel.init();
		
		$('#image').change(function(event) {

			console.log('image',$(this))
		});
	});

</script>

@endpush