<html>
    <head>
        @include('home.head',['title' => 'Đăng nhập'])

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> --}}
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <style>
            html, body {
                background-color: #fff;
                /* floralwhite */
                color:#382628;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                border: 0;
                padding-top: 0px;
                position: initial !important;
            }
            #app{
                /* width: 100%; */
            }
         
        </style>
    </head>
    <body>
        <div id="app">
            @include('layouts.navbar02')
                
            <div class="slide">
                @include('slides.silde_full_page_image')
            </div>
            @include('controller.webcomeshopall')
            @include('layouts.bricktext',["value" => "MEET THIS WEEK'S BEST SELLERS."])
                {{-- @include('controller.bestsell') --}}
            
            <div class="container ct-mr-bottom-4 ct-mr-bottom-2">
                
                <div class="row"> 
                    @foreach ($collection as $item)
                        <div class="col-md-3 col-sm-6 col-12 pro-image" style="display: flex; align-items: center;justify-content: center;">
                            @include('CardProduct.CardChangceImage', $item)
                        </div>          
                    @endforeach
                </div>
            </div>

            <div style="background-color: #fff5f3" class="ct-mr-bottom-4 ct-mr-bottom-2">
                @include('layouts.bricktext',["value" => "sexual health"])
                @include('controller.girdsexualhealth')
            </div>

            <div class="container_slide ct-mr-4 ct-mr-2">
                @include('controller.slideDefault',["value" => "sexual health"])
            </div>

            <div>
                @include('layouts.bricktext',["value" => "sexual health"])

                @include('layouts.bricktext',["value" => "sexual health"])
            </div>

        
        </div>
        @include('home.footer')
    </body>
</html>
