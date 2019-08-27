@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')

  <h1>Product Page</h1>
  <hr/>
  @include('layouts._message')
@empty($products->first())
  <h1>  No product </h1>
  <a href="{{route('product.create')}}" class="btn btn-primary" >Add a new product</a>
@else
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->title}}</td>
        <td>{{$product->price}} USD</td>
        <td>
            <form style="display:inline;" action="{{route('cart.store',$product->id)}}" method="get">
              @csrf
              <button  type="submit" class="btn btn-sm btn-outline-success">Add to cart</button>
            </form>
            <a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-outline-primary" >Edit</a>
            <form style="display:inline;" action="{{route('product.destroy',$product->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-outline-danger">Remove</button>
            </form>
        </td>
      </tr>
    @endforeach


  </tbody>
</table>
@endempty
@endsection
