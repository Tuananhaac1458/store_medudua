<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('home.head',['title' => 'Đăng nhập'])
    <link rel="stylesheet" href="{{url('css/slide.css')}}"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Heroron</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                widows: 100%;
                margin: 0;
            }

            .full-height {
                height: 100vh;
                widows: 100%;

            }

            .flex-center {
                align-items: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                background-color: :red;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .conten-slide{
                width: 100%;
                margin-top: 55px;
            }

            .asd{
                background-image: url("https://br-art.vn/wp-content/uploads/2017/06/sexy-girl-johnie-ngo-8.jpg");
                /* Full height */
                width: 100%;

                height: calc(100% - 70px); 
                opacity: 0.8;
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('layouts.navbar02')
            <div><p style="line-height: 15px;">a</p></div>
            <div class="conten-slide">
                @include('slides.silde_full_page_image')
                
            </div>
            <div class="content container">
            </div>
            
        </div>
    </body>
</html>
