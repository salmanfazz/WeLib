<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to WeLib</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/img/lib.jpeg') }}">
        <!-- Styles -->
        <style>
            body {
                /*background-image: url(lib.jpg);*/
                background: url("../img/lib2.jpg") repeat scroll 0 0 transparent;
            }
            .judul{
                font-family: "montserrat",sans-serif;
            }
            .judul h1{
                font-size: 75px;
                text-transform: uppercase;
                font-weight: 900;
                color: #2c3e5035;
            }
            .judul h1:hover{
                background-image: url("../img/galaxy2.jpg");
                -webkit-background-clip:text;
                animation: aer 15s infinite;
            }
            @keyframes aer {
                from{
                    background-position: left 0 top 0;
                }
                to{
                    background-position: left 1000px top 0;
                }      
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <div class="judul">
                    <h1>Welcome to We-Lib</h1>
                </div>
                    </div>
                <div class="links">
                    <a href="{{ url('login') }}">Admin</a>
                    <a href="{{ url('Buku-u') }}">Guest</a>
                </div>
            </div>
        </div>
    </body>
</html>
