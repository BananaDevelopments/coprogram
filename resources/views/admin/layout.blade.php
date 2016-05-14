<html>
    <head>
        <title></title>

        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Syncopate" />

        <style>
            body {
                /*font-family: Syncopate;*/
            }

            /* Index starts*/
            .search-inner {
                width: 300px;
            }

            .search-button-fix {
                height: 34px;
            }

            .container-main {
                width: 1000px;
                margin: auto;
            }

            #header-section {
                margin-bottom: 50px;
            }
            /* Index ends */
        </style>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        @yield('head-extra')
    </head>

    <body>
        <section id="header-section">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <div>
                                    <form action="" class="navbar-form" role="search">
                                        <div class="input-group search-inner">
                                            <input class="form-control" type="text" name="search_term" placeholder="Search"/>

                                            <div class="input-group-btn">
                                                <button class="btn btn-default search-button-fix" type="submit">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                           @if(!Auth::check())
                            <li>
                                <a href="{{ action('UsersController@create') }}">Registration</a>
                            </li>
                            @endif

                            <li class="dropdown">
                                <a class="dropdown-toggle" area-expanded="false" area-haspopup="true" role="button" data-toggle="dropdown" href="#">
                                    Account

                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    @if(!Auth::check())
                                    <li>
                                        <a href="#">Login</a>
                                    </li>                                 
                                    @else
                                    <li>
                                        <a href="{{ action('AuthController@logout') }}">Logout</a>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('header-section')
        </section>

        <section id="content-section">
            <div class="container-main">
                <h4>ADMIN pannel</h4>
                @yield('content')
            </div>
        </section>

        <section id="footer-section">
            @yield('footer-section')
        </section>
    </body>

    @yield('footer-extra')
</html>