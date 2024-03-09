<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Frist Laravel Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            .header{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 20px;
                background: #fff;
            }
            .logo-page{
                display: flex;
                align-items: center;
            }
            .logo-page img{
                width: 100px;
                height: 100px;
            }
            .top-left {
                display: flex;
                align-items: center;
            }
            .top-left a {
                padding: 0 10px;
                text-decoration: none;
                color: #333;
            }
            .top-left a:hover {
                color: #000;
            }
            .top-left a.active {
                color: #000;
            }


            .wapper-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .box {
                background: #f5f5f5;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .title {
                text-align: center;
            }

            .title h1 {
                font-size: 50px;
                margin: 0;
            }

            .title span {
                font-size: 20px;
                color: #666;
            }
        </style>

            <div class="header">
                <div class="logo-page">
                    <img src="https://laravel.com/img/logomark.min.svg" alt="">
                    <h1>Laravel</h1>      
                </div>
                <div class="top-left links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/') }}">About</a>
                    <a href="{{ url('/') }}">Contact</a>
                    <a href="{{ url('/') }}">Login</a>
                    <a href="{{ url('/') }}">Register</a>
                    <a href="{{ url('/') }}">Profile</a>
                </div>
            </div>

        <div class="wapper-container">
            <div class="box">
                <div class="title">
                    <h1>Welcome to Laravel</h1>
                    <span>Frist Laravel Project</span>
                </div>
            </div>
        </div>
</html>
