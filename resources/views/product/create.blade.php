@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')
  <div class="card-body">
    <form action="{{route('product.store')}}" method="post">
      @include('product._form',['buttonText'=>"Add a new product"])
    </form>
  </div>
@endsection
