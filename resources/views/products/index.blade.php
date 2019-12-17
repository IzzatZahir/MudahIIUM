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
    <h1> ITEMS LIST</h1>

        <tr>
          <td>Item Name</td>
          <td>Description</td>
          <td>Price</td>
          <td>Image</td>
          <td>Availability</td>
        
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td> <img src="{{ asset('public/images/' . $product->image)}}" width="100px" height="100px" alt="Image"></td>
            <td>{{$product->status}}</td>
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