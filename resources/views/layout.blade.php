<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BudgeIt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
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
                    @else
                        <li><a class="register" href="/auth/register">Register</a></li>
                        <li><a class="log-in" href="/auth/login">Log In</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

</body>
</html>
