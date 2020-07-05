<html>
    <head>
        @include('home.head',['title' => 'Đăng nhập'])

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> --}}
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                border: 0;
                padding-top: 0px;
                position: initial !important;
            }
            #app{
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div id="app" >
            @include('layouts.navbar02')
                
            <div class="slide">
                @include('slides.silde_full_page_image')
            </div>

            <div class="container" style="margin-top: 20px;">
                
                @include('CardProduct.CardChangceImage')
                <div class="row"> 
                    @foreach ($collection as $item)
                        <div class="col-md-4 col-sm-6 col-12 pro-image" style="display: flex; align-items: center;justify-content: center;">
                            @include('CardProduct.CardDefault', $item)
                        </div>          
                    @endforeach
                </div>
            </div>
        </div>
        @include('home.footer')
    </body>
</html>
