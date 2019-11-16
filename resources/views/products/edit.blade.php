@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Item
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.update', $product->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Item Name:</label>
          <input type="text" class="form-control" name="product_name" value={{ $product->product_name }} />
        </div>
        <div class="form-group">
          <label for="price">Item Price :</label>
          <input type="text" class="form-control" name="product_price" value={{ $product->product_price }} />
        </div>
        <div class="form-group">
          <label for="quantity">Item Quality(1-10):</label>
          <input type="text" class="form-control" name="product_qty" value={{ $product->product_qty }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection