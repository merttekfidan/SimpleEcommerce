@include('layouts.header')
@include('layouts.navbar')
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      @yield('content')
    </div>
  </div>
</div>
@include('layouts.footer')
