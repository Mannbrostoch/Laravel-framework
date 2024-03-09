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

        <div class="wapper-container">
            <div class="box">
                <div class="title">
                    <h1>Welcome to Laravel</h1>
                    <span>Frist Laravel Project</span>
                </div>
            </div>
        </div>
</html>
