
// Admin JQuery code 

	$(document).ready(function() {
		console.log('Ready');

		
	});
	
	var Laravel=function(){

		function Laravel () {
			// body... 
			// this._init();
		}

		Laravel.prototype.init = function(){

			this._init();					
		};

		Laravel.prototype._init = function(){
			this.editBtn();
			// this.updateFrom();
		};

		Laravel.prototype.editBtn = function(){
			 $('.edit-btn').on('click' ,this.editMethod);
		};

		Laravel.prototype.editMethod = function(e){
			e.preventDefault();
			var route=$(this).data('route');
			$('#modifier form').attr('action', route);

			$.get(route, function(data) {
				
				Laravel.prototype.showEditModal(data);
			});
		};

		// Laravel.prototype.updateFrom = function(){
			
		// 	$('.update-form').on('submit', this.updateMethod);
		// };

		
		return Laravel;
	}();
