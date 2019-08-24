@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')
  <div class="card-body">
    <form action="{{route('storeProduct')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="product-title">Product title</label>
        <input type="text" name="title" id="product-title" class="form-control">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="product-price">Product price</label>
        <input type="text" name="price" id="product-price" class="form-control">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn btn-info btn-block" type="submit">Add</button>
    </form>
  </div>
@endsection
