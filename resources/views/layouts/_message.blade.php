@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successful! </strong> {{session('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (session('danger'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error! </strong> {{session('danger')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
