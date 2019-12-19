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
            <a href="/products/show"><button class="button large">BUY NOW</button></a>
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
                            Buy Item
                        </a>
                        <a href="#">
                            <img src="{{url('/public/images/1576659638.jpg')}}"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                           Engineering Book
                        </h3>
                    </a>
                    <h5>
                        RM 100
                    </h5>
                    <p>
                        Used books
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Buy Item
                        </a>
                        <a href="#">
                            <img src="{{url('/public/images/1576428783.jpg')}}"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                        Transporter services
                        </h3>
                    </a>
                    <h5>
                        RM 80
                    </h5>
                    <p>
                    Contact 0122222222
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Buy Item
                        </a>
                        <a href="#">
                        <img src="{{url('/public/images/1576428567.jpg')}}"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                        iphone 5s
                        </h3>
                    </a>
                    <h5>
                        RM 200
                    </h5>
                    <p>
                        Good
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Buy Item
                        </a>
                        <a href="#">
                        <img src="{{url('/public/images/1576428727.jpg')}}"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                        Lenovo laptop
                        </h3>
                    </a>
                    <h5>
                        RM 500
                    </h5>
                    <p>
                        Good condition
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
