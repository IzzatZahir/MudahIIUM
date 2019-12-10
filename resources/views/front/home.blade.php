@extends('layout.main')

@section('content')
<style>
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

</style>
<section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                <font color="white">Welcome to IIUM largest Marketplace</font>
                </strong>
            </h2>
            <br>
            <a href="/"><button class="button large">BUY NOW</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Deals For You
        </h2>
        </div>

        
       
        <div class="row">
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Books
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Kickin with Kraken Tee
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Kickin with Kraken Tee
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Kickin with Kraken Tee
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="subheader text-center">
             <h2>
            Browse by Category
        </h2>
        </div>

        <div class="links">      
                    <a href="{{route('category.show', 1)}}">Books</a>
                    <a href="{{route('category.show', 2)}}">Men's Clothing</a>
                    <a href="{{route('category.show', 3)}}">Women's Clothing</a>
                    <a href="{{route('category.show', 4)}}">Mobile Phones & Gadgets</a>
                    <a href="{{route('category.show', 5)}}">Computer & Accesories</a>
                    <a href="{{route('category.show', 6)}}">Jobs & Services</a>
                    <a href="{{route('category.show', 7)}}">Others</a>
                    
                </div>
        <!-- Footer -->
        <br>

@endsection
