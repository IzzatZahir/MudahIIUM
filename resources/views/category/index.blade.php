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
        
          <!-- <td>ID</td> -->
          <td>Item Name</td>
          <td>Description</td>
          <td>Price</td>
        
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <!-- <td>{{$product->id}}</td> -->
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection