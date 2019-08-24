@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')

  <h1>Product Page</h1>
@empty($products->first())
  <h1>  No product </h1>
  <a href="{{route('createProduct')}}" class="btn btn-primary" >Add a new product</a>
@else
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->title}}</td>
        <td>{{$product->price}} USD</td>
        <td><button type="button" class="btn btn-link">Add to cart</button></td>
      </tr>
    @endforeach


  </tbody>
</table>
@endempty
@endsection
