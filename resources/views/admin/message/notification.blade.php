@if(session('success'))
  <div class="alert alert-success text-center" role="alert">
    <strong>  {{session('success')}} </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
  @if(session('error'))
    <div class="alert alert-danger text-center" role="alert">
      <strong>  {{session('error')}} </strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif