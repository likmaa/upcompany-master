
<script src="{{ asset('summernote/dist/summernote-lite.js') }}"></script>
<script type="text/javascript">
  	$(document).ready(function() {

  		sendFile = (file) => {
  			let data = new FormData();
  			data.append('image', file);

  			const ajax=$.ajax({
  				url: '{{ route('upload-file') }}',
			    type: 'POST',
  				cache: false,
			    contentType: false,
			    processData: false,
			    data : data,
			    headers:{
			    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
  			});

  			const promise = new Promise((resolve, reject) => {

  				ajax
  				.done( data => resolve(data) )
  				.fail( error => reject(error))

  			})
  			
  			return promise;
  		}
  		
  		$('#description').summernote({
        // placeholder: 'Hello stand alone ui',
        callbacks : {
        	onImageUpload : function ($file/*,$editor,welEditable*/) {
        		sendFile($file[0])
        		.then(data => {
        			// console.log('data',data);
        			// console.log('this',this);
        			$(this).summernote('insertImage', '/'+data.path);
        		})
        		.catch(error => console.log('error',error));
        	}
        },
        tabsize: 2,
        height: 350,
        lang: 'fr-FR',
      });
  	});
</script>