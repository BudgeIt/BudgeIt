<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - BudgeIt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ elixir('js/all.js') }}"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navigation-links" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">BudgeIt</a>
            </div>
            <div class="collapse navbar-collapse" id="navigation-links">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="log-out" href="/auth/logout">Log Out</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a class="register" href="/auth/register">Register</a></li>
                        <li><a class="log-in" href="/auth/login">Log In</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>
</body>
</html>
