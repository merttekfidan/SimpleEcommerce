@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')

  <h1>Cart Index</h1>
  <hr/>
  @include('layouts._message')
@empty($cartItems->first())
  <h1>  No product </h1>
@else
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cartItems as $cartItem)
      <tr>
        <th scope="row">{{$cartItem->id}}</th>
        <td>{{$cartItem->title}}</td>
        <td>{{$cartItem->price}} USD</td>
        <td>
          <form style="display:inline;" action="{{route('cart.destroy',$cartItem->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Remove</button>
          </form>
        </td>
      </tr>
    @endforeach


  </tbody>
  <tfoot>
    <tr>
      <td></td>
      <td></td>
      <td>Total {{$cartItems->sum('price')}} USD</td>
      <td></td>
    </tr>
  </tfoot>
</table>
@endempty
@endsection
