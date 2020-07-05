<head>
    <link rel="stylesheet" href="{{url('css/header.css')}}"/>
</head>

<body>
    <div class="header">
        <div class="ct-narbar-01">
            <a class="navbar-brand " href="{{ url('/') }}" style="color:black;font-size: 25px; font-weight: 700;">
                {{ config('app.name', 'Laravelxx') }}
            </a>
        
            <div class="ct-container-menu-01">
                <div class="ct-menu-left-01">
                    <ul class="ct-nav-01">
                        <li >
                        <a  href="#">Men</a>
                        </li>
                        <li  >
                        <a  href="#">Women</a>
                        </li>
                    </ul>
                </div>
    
                <div class="ct-menu-right-01">
                    <ul class="ct-nav-01">
                        <li>
                            <a style="margin-top: 5px" href="#">Blog</a>
                        </li>
                        <li >
                            <a style="margin-top: 5px" href="#">Stores</a>
                        </li>
    
                        <li>
                            <a href="{{ route('login') }}"><span class="icon"><i class="far fa-user"></i></span></a>
                        </li>
                        <li >
                            <a href="{{ route('login') }}"><span class="icon"><i class="material-icons-outlined" style="font-size: 33px">help_outline</i></span></a>
                        </li>

                        <li>
                            <a style="font-size: 33px; " href="{{ route('register') }}">
                                <i class="material-icons-outlined" style="font-size: 33px; ">shopping_cart</i>
                                <span class='badge' id='lblCartCount'> 5 </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="ct-container-mobile-nemu-01">
                <div class="ct-menu-left-01">
                    <button class="navbar-toggler" onclick="is_show_menu_mobile()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </button>
                </div>

                <div class="ct-menu-right-01">
                    <ul class="ct-nav-01">
                        <li>
                            <a style="font-size: 33px; " href="{{ route('register') }}">
                                <i class="material-icons-outlined" style="font-size: 33px; ">shopping_cart</i>
                                <span class='badge' id='lblCartCount'> 5 </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="ct-slidebar-01">
                   

                    <nav>
                        <ul>
                            <li>
                                <a  href="#" class="men-btn">Men<span class="fas fa-caret-down first"></span> </a>
                                <ul class="men-show">
                                    <li><a href="#">Chide</a></li>   
                                    <li><a href="#">Chide2</a></li>   
                                </ul>
                            </li>
                            
                            <li>
                                <a  href="#" class="women-btn">Women <span class="fas fa-caret-down second"></span> </a>
                                <ul class="women-show">
                                    <li><a href="#">Chide</a></li>   
                                    <li><a href="#">Chide2</a></li>   
                                </ul>
                            </li>

                            <li>
                                <a  href="#">Blog</a>
                            </li>    
                            
                            <li>
                                <a  href="#">Stores</a>
                            </li>    

                            <li>
                                <a  href="#">Account</a>
                            </li>    

                            <li>
                                <a  href="#">Help</a>
                            </li>    
                        </ul>
                    </nav>
                    
                </div>
              
                <div class="ct-mobile-overlay">
                </div>
                <script>
                    $('.men-btn').click(function(){
                        $('nav ul .men-show').toggleClass("show")
                        $('nav ul .first').toggleClass("rotate")
                    })
                    $('.women-btn').click(function(){
                        $('nav ul .women-show').toggleClass("show")
                        $('nav ul .second').toggleClass("rotate")
                    })

                    $('.ct-slidebar-01 nav ul li').click(function(){
                        $(this).addClass("active").siblings().removeClass("active");
                    })
                    $('.ct-mobile-overlay').click(function(){
                        // $('nav ul .women-show').toggleClass("show")
                        is_show_menu_mobile();
                    })
                </script>
            </div>
        </div>
    </div>
</body>
