@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')
  <div class="card-body">
    <form action="{{route('product.update',$products->id)}}" method="post">
      {{ method_field('PUT') }}
      @include('product._form',['buttonText'=>"Edit"])
    </form>
  </div>
@endsection
