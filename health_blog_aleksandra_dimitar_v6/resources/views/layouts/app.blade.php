
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
                        <!-- <a class="button_toolbar">Login</a>
                        <a class="dropdown-item button_toolbar" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        security for running in the browser 
                                        @csrf
                                    </form> -->
                                    @guest
                            <li class="nav-item">
                                <a class="button_toolbar" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link button_toolbar" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
 
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item butto_toolbar" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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