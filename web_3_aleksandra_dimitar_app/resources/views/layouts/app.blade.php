
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}" >
        <script src="{{ asset('js/components/toolbar.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="{{ asset('js/components/app.js')}}"></script>
    </head>
    <body>
        <div class="toolbar_picture_wrapper">
            @section('app-layout')
       
            <div class="toolbar" id="toolbar" >
                <div class="link_wrapper">
                    <a href="{{ url('/') }}"> Home </a>
                    <a href="{{ url('/recipes') }}"> Recipes </a>
                    <a href="{{ url('/shop') }}"> Shop </a>

                    <div class="button_toolbar_wrapper">
                        <a class="button_toolbar">LOGIN</a>
                    </div>
                </div>       
              </div>
        @show
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
   
      
          <div class="footer">
            
            <div id="button"></div>
          <div id="container">
         
          <div id="cont">
              
          <div class="footer_center">
                 <h3><a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </h3>         
          </div>
          </div>
          </div>
          </div>
   
</html>