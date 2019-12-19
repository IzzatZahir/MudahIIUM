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


<a href="/" class="top-left links" > Home</a>

<a href="/products/show" class="top links" > View All Items</a>

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <div  class="top-right links">
    <label for="category">Show by Category:</label>
    <select type="dropdown-toggle" class="form-control"  onchange="top.location.href = this.options[this.selectedIndex].value">
              <label for="category">Show by Category:</label>
              <option class="category" value ="{{route('category.show', 1)}}"> Books</option>
              <option class="category" value ="{{route('category.show', 2)}}"> Men's Clothing</option>
              <option class="category" value ="{{route('category.show', 3)}}"> Women's Clothing</option>
              <option class="category" value ="{{route('category.show', 4)}}"> Mobile Phones & Gadgets</option>
              <option class="category" value ="{{route('category.show', 5)}}"> Computer & Accesories</option>
              <option class="category" value ="{{route('category.show', 6)}}"> Jobs & Services</option>
              <option class="category" value ="{{route('category.show', 7)}}"> Others</option>
      </div>
</select>

</div>
</div>
<h1> ITEMS LIST</h1>
<div class="row">   
  
    @foreach($products as $product)
    
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="{{ asset('public/images/' . $product->image)}}" width="300px" height="300px" alt="Image">
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                           {{$product->name}}
                        </h3>
                    </a>
                    <h5>
                        {{$product->price}}
                    </h5>
                    <p>
                        {{$product->description}}
                    </p>
                    <p>
                        {{$product->status}}
                    </p>
                </div>
            </div>
            @endforeach

<div>
@endsection