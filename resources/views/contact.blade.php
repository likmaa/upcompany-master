@extends('charles')

@section('css')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@stop
@section('content')
	@include('header')

	<!-- 
	=============================================
		Theme Inner Banner
	============================================== 
	-->
	<div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Contact</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<!-- 
	=============================================
		Conatct us Section
	============================================== 
	-->
	<div class="contact-us-section section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>ÉCRIVEZ NOUS</h2>
				{{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> --}}
			</div> <!-- /.theme-title-one -->
			<div class="clearfix main-content no-gutters row">
				<div class="col-lg-5 col-12"><div class="img-box"></div></div>
				<div class="col-lg-7 col-12">
					<div class="form-wrapper">
						<div class="invalid-feedback">
							Tous les champs précédés de * sont obligatoire
						</div>
						<form  id="form-contact" class="theme-form-one form-validation">
							<div class="row">
								<div class="col-sm-6 col-12">
									<input type="text" class="input" placeholder="Nom *" name="name" required>
									{{-- <div class="invalid-feedback">
										Please choose a username.
									</div> --}}
								</div>
								<div class="col-sm-6 col-12">
									<input type="email" class="input is-invalid" placeholder="Email *" name="email" required>
									{{-- <div class="invalid-feedback">
										Please choose a email.
									</div>
									<div class="invalid-feedback">
										Please choose a valid email.
									</div> --}}
								</div>
								<div class="col-sm-6 col-12">
									<input type="text" class="input" placeholder="Téléphone *" name="phone" required>
								</div>
								<div class="col-sm-6 col-12">
									<input type="text" class="input" placeholder="Subject *" name="subject" required>
								</div>
								<div class="col-12"><textarea placeholder="Message *" class="input" name="message" required></textarea></div>
								<div class="col-12 mb-1">
									<div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
								</div>
							</div> <!-- /.row -->
							<button class="theme-button-one" type="submit">ENVOYER</button>
						</form>
					</div> <!-- /.form-wrapper -->
				</div> <!-- /.col- -->
			</div> <!-- /.main-content -->
		</div> <!-- /.container -->

		<!--Contact Form Validation Markup -->
		<!-- Contact alert -->
		<div class="alert-wrapper" id="alert-success">
			<div id="success">
				<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
				<div class="wrapper">
	               	<p>Votre message a bien été envoyé.</p>
	             </div>
	        </div>
	    </div> <!-- End of .alert_wrapper -->
	    <div class="alert-wrapper" id="alert-error">
	        <div id="error">
	           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
	           	<div class="wrapper">
	               	<p>Sorry!Something Went Wrong.</p>
	            </div>
	        </div>
	    </div> <!-- End of .alert_wrapper -->
	</div> <!-- /.contact-us-section -->


	@include('footer')

@stop

@push('js')
<script>

	

	$.ajaxSetup({
		'processData':false,
		contentType: false,
		headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
	});
	var $form=$('#form-contact'),$formButton=$('#form-contact button');
	$input=$('#form-contact input');

	let handleFocus= function handleFocus(event){
		if ($(this).parent().has('.invalid-feedback')) {
				let feedbacks= $(this).parent().find('.invalid-feedback');

				console.log('feedback',feedbacks);
			}
	}

	// $('.input').on('focus', handleFocus)

	$form.submit(function(e) {
		e.preventDefault();

		$formButton.prop("disabled",true);

		var data= new FormData(this);
		// data.append('Some text')

		$.post('/contact', data)
		.done(function(data, textStatus, xhr) {
			
			$formButton.prop("disabled",false);
			$formButton.removeProp("disabled");
			
			if (data.status) {
				$('#alert-success').fadeIn(2000, function() {
					$('#alert-success').delay(4000).fadeOut('2000');

					$('#form-contact input').each(function( index) {
						$(this).val('');
					});

					$('#form-contact textarea').val('');
				});
			}
		})
		.fail(error => {
			$formButton.prop("disabled",false);
			$formButton.removeProp("disabled");
			// console.log('error',error);
		})
	});
</script>

@endpush