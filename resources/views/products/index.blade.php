@extends('layout')

@section('content')
<style>
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
  .uper {
    margin-top: 40px;
  }
</style>
<a href="products/create" class="btn btn-primary">Add New Product</a>
<a href="/" class="top-right links" > Home</a>

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
        
          <td>ID</td>
          <td>Item Name</td>
          <td>Item Price</td>
          <td>Item Condition(1-10)</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_qty}}</td>
            <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection