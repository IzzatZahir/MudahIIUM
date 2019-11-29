@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Product
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
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Product Name:</label>
              <input type="text" class="form-control" name="product_name"/>
          </div>

          <div class="form-group">
              <label for="price">Product Price :</label>
              <input type="text" class="form-control" name="product_price"/>
          </div>

          <div class="form-group">
              <label for="quantity">Product Quality(rate 1 to 10):</label>
              <input type="text" class="form-control" name="product_qty"/>
          </div>

          <div class="form-group">
              <label for="category">Product Category:</label>
              <select name= "category_id">
              <option value = '1'> Books</option>
              <option value = '2'> Men's Clothing</option>
              <option value = '3'> Women's Clothing</option>
              <option value = '4'> Mobile Phones & Gadgets</option>
              <option value = '5'> Computer & Accesories</option>
              <option value = '6'> Jobs & Services</option>
              <option value = '7'> Others</option>
              <select>

              
          </div>

          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection