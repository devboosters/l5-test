@extends('layouts.master')

@section('title', 'Products')
@section('content')
     
<form action='{{route('products.store')}}' method="POST" id='product-add'>
    {!! csrf_field() !!}
  <div class="form-group">
    <label for="name">{{trans('product.attrs.name')}}</label>
    <input type="text" class="form-control" name="name" placeholder="{{trans('product.attrs.name')}}">
  </div>
  <div class="form-group">
    <label for="name">{{trans('product.attrs.quantity')}}</label>
    <input type="text" class="form-control" name="quantity" placeholder="{{trans('product.attrs.quantity')}}">
  </div>
  <div class="form-group">
    <label for="name">{{trans('product.attrs.price')}}</label>
    <input type="text" class="form-control" name="price" placeholder="{{trans('product.attrs.price')}}">
  </div>
  <button type="submit" class="btn btn-default">{{trans('product.submit_button')}}</button>
</form>
<table class="table"> <caption>Products</caption> 
<thead> 
<tr>   
  <th>{{trans('product.attrs.name')}}</th> 
  <th>{{trans('product.attrs.quantity')}}</th> 
  <th>{{trans('product.attrs.price')}}</th> 
  </tr>
   </thead>
    <tbody> 
    @foreach($products as $product)
      <tr>        
        <td>{{$product['name']}}</td>
        <td>{{$product['quantity']}}</td>
        <td>{{$product['price']}}</td>
      </tr>
      @endforeach
    </tbody> 
    </table>
@endsection
@section('scripts-after')
<javascript type='text/javascript' src="/js/views/product/index.js"></javascript>
@endsection