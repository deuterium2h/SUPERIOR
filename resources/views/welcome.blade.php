<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SUPERIOR</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="icon" href="/logoSmall.png" type="image/x-icon">
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .title {
                font-size: 55px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                </div>
            @endif
            <div class="content">
                <img src="logoLarge.png" alt="Superior Logo" style="max-width: 49%;">
                <div class="title m-b-md">
                    SUPERIOR TOURIST TRANSPORT<br>COOPERATIVE MANAGEMENT SYSTEM
                </div>
            </div>
        </div>
    </body>
</html>