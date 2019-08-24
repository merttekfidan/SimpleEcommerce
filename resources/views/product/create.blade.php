@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')
  <div class="card-body">
    <form action="{{route('storeProduct')}}" method="post">
      @include('product._form',['buttonText'=>"Add a new product"])
    </form>
  </div>
@endsection
