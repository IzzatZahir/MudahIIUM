<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title', 'Mudah IIUM')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

    </head>
    <body>

        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="user">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       MY ACCOUNT
                    </a>
                </h4>
            </div>
            
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                    <form>
                <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
                    </li>
                    <!-- <li>
                        <a href="#">
                            CONTACT
                        </a>
                    </li> -->
                    <li>

                        @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">HOME</a>
                    @else
                        <a href="{{ route('login') }}">LOGIN</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif
                    </li>
                    


                </ol>
            </div>
        </div>
@yield('content')
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p>Market IIUM is an online marketplace that is developed to offers a secure and convenient platform for students to sell or buy anything.</p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-book"></i>
      <p>Developed by Izzat Zahir</p>
    </div>
    
    <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">
        <li><a href="#">Facebook</a></li>
      <ul>
    </div>
  </div>
</footer>

    <script src="dist/js/vendor/jquery.js"></script>
    <script src="dist/js/app.js"></script>
    </body>
</html>
