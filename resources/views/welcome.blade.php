<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>USA Visa page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("image/usa.jpg"); 
                background-size: cover;
                background-attachment: fixed;
                background-repeat: none;

                color: #dcdfe5;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
        </style>
    </head>
    <body >
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a style="color: #dcdfe5" href="{{ url('/home') }}">Profile</a>
                    @else
                        <a style="color: #dcdfe5" href="{{ url('/login') }}">Login</a>
                        <a style="color: #dcdfe5" href="{{ url('/register') }}">Apply</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <main>
                  <section class="main">
                    <div class="content">
                      <div class="container">
                        <div class="content2">
                          <h1 style="font-size: 70px">USA</h1>
                        </div>
                        <div class="counter" id="countdown">
                          
                          <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                              <p style="font-size: 30px">Visa registration online</p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </section>
                </main>

                <!-- <div class="links"> -->
                    <!-- <a href="https://laravel.com/docs">Documentation</a> -->
                    <!-- <a href="https://laracasts.com">Laracasts</a> -->
                    <!-- <a href="https://laravel-news.com">News</a> -->
                    <!-- <a href="https://forge.laravel.com">Forge</a> -->
                    <!-- <a href="https://github.com/laravel/laravel">GitHub</a> -->
                <!-- </div> -->
                
            </div>
        </div>
        
    </body>
</html>
