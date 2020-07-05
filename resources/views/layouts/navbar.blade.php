<head>
    <link rel="stylesheet" href="{{url('css/header.css')}}"/>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-sm bg-light navbar-light ">
            <button class="navbar-toggler" onclick="changce_mobile(this)" data-toggle="collapse" data-target="#navbarSupportedContent">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                    <a class="nav-link " href="#">Men</a>
                    </li>
                    <li class="nav-item" >
                    <a class="nav-link " href="#">Women</a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand " href="{{ url('/') }}" style="font-size: 20px; font-weight: 700;">
                {{ config('app.name', 'Laravelxx') }}
            </a>
            {{-- Login and register --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" style="margin-top: 5px" href="#">Blog</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" style="margin-top: 5px" href="#">Stores</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}"><span class="icon"><i class="far fa-user"></i></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}"><span class="icon"><i class="material-icons-outlined" style="font-size: 33px">help_outline</i></span></a>
                    </li>
                
                    
                        {{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li> --}}
                    
                </ul>
            </div>
            <div >
                <li class="nav-item">
                    <a class="nav-link"  style="font-size: 33px; " href="{{ route('register') }}">
                        <i class="material-icons-outlined" style="font-size: 33px; ">shopping_cart</i>
                        <span class='badge' id='lblCartCount'> 5 </span>
                    </a>
                </li>
            </div>
            
            {{-- @include('home.leftmenu') --}}

            
            {{-- <div class="main_container">
                <main>
                    @yield('contenta')
                </main>
            </div> --}}

        </nav>
    </div>
</body>
