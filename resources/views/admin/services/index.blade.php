@extends('admin.partial.layout')


@section('content')
	<div class="app-title">
	  <div>
	    <h1><i class="fa fa-dashboard"></i> Tout les services</h1>
	    <p>A free and open source Bootstrap 4 admin template</p>
	  </div>
	  <ul class="app-breadcrumb breadcrumb">
	    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	    <li class="breadcrumb-item"><a href="#">Tout les services</a></li>
	  </ul>
	</div>
	<div class="tile mb-4">
		<h3 class="tile-title">Tout les services</h3>
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
					@foreach($services as $service)
						<tr>
		          <td>{{ $loop->iteration }}</td>
		          <td><h5><a href="{{ route('service.show',$service) }}">{{ $service->title}} </a></h5></td>
		          <td>
		          	<div class="btn-group">
									<a class="btn btn-primary edit-btn" data-route="{{ route('service.show',$service) }}" href="#"><i class="fa fa-lg fa-edit"></i></a>
									<a class="btn btn-primary" href="{{ route('service.show',$service) }}"><i class="fa fa-lg fa-eye"></i></a>
								</div>
							</td>
		        </tr>
	        @endforeach
				</tbody>
			</table>	
		</div>
	</div>
@stop