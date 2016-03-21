
<!DOCTYPE html>
<html>

<head>
    <title>Jam It</title>
    <link href="{{ url() }}/css/main.css" rel="stylesheet">

    <link href="{{ url() }}/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url() }}/bootstrap-3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="{{ url() }}/distribution/js/jquery-ui.min.js"></script>
    <script src="{{ url() }}/js/jquery-progressTimer.js"></script>
    <link href="{{ url() }}/css/audio.css" rel="stylesheet">
    <link href="{{ url() }}/css/new.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" id="header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">MENU</button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Jam It</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right" role="search">


            </form>
            <ul class="nav navbar-nav navbar-right">

                <form class="navbar-form navbar-left" method="GET" role="search">

                    <div class="form-group">
                        @if (Auth::check())
                            <span style="color: white">Hello {{Auth::user()->name}}</span> | <a class="btn
                            btn-default" data-toggle="modal" href="{{url()}}/auth/logout">Logout</a>
                        @else
                            <a class="btn btn-default" data-toggle="modal" data-target="#Login">Login</a>
                            OR  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#SignUp">Create an account</button>
                        @endif

                    </div>
                    <div class="form-group">
                        <input type="text" id ="search" name="q" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                </form>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>  	<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <div class="absolute-wrapper"> </div>
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{url()}}/"><span class="glyphicon glyphicon-dashboard"></span>Home</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-music"></span> Create a playlist</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-cloud"></span>Donate to Jam It</a>
                            </li>
                            <li>
                                <a href="{{url()}}/site"><span class="glyphicon glyphicon-cloud"></span>Linked Site</a>
                            </li>

                            <!-- Dropdown-->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl1">
                                    <span class="glyphicon glyphicon-user"></span>Manage Music <span
                                            class="caret"></span>
                                </a>

                                <!-- Dropdown level 1 -->
                                <div id="dropdown-lvl1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            @if (Auth::check())
                                                <li><a href="{{url()}}/upload">Upload Music</a></li>
                                            @else
                                                <li><a  data-toggle="modal" data-target="#Login">Upload Music</a></li>
                                            @endif
                                            <li><a href="#">Edit existing Music</a></li>
                                            <li><a href="#">Analysis</a></li>

                                            <!-- Dropdown level 2 -->
                                            <li class="panel panel-default" id="dropdown">
                                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                                    <span class="glyphicon glyphicon-off"></span> Manage Ads <span
                                                            class="caret"></span>
                                                </a>
                                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul class="nav navbar-nav">
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Account Settings</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
    </div>





    @yield('content')
</div>

<footer class="pull-left footer">
    <p class="col-md-12">
    <hr class="divider">
    Copyright &COPY; 2015 <a href="#">dcheruiyot</a>
    </p>
</footer>
</div>

<!-- Modal -->
<div id="Login" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <div>
                    <div>
                        <h3>Login to Jam It</h3>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form role="form" method="POST"
                                  action="{{url()}}/auth/login">
                                <input type="hidden" name="_token" value="{{csrf_token() }}">

                                E-Mail Address: <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                Password: <input type="password" class="form-control" name="password">
                                <input type="checkbox" name="remember"> Remember Me <br>
                                <input id="sign" class="btn btn-block btn-lg btn-success submit" type="submit"
                                       value="Log in"/>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">

                                    </div>
                                </div>
                            </form>
                            <a href="#" class="btn btn-sm btn-primary register">Login with Facebook</a>
                            <a href="#" class="btn btn-sm btn-default forgot">Forgot your password?</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<!-- Modal -->
<div id="SignUp" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sign Up</h4>
            </div>
            <div class="container">
                <div class="login">
                    <div class="login-inner">
                        <legend><a href="#"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>

                        <form method="POST" action="{{url()}}/auth/register"
                              accept-charset="UTF-8"><input name="_token" type="hidden" value="{{csrf_token() }}">
                            <form id="myForm">


                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your name">
                                <input class="form-control" name="email" placeholder="Your Email" type="email" required />
                                <input class="form-control" id="pass1" name="password" placeholder="password" required />
                                <input class="form-control" id="pass2" name="password_confirmation" placeholder="re-enter password" required />
                                <p id="m" style="color: red"></p>
                                <br />
                                <br />
                                <input id="sign" class="btn btn-block btn-lg btn-success submit" type="submit"
                                       value="Sign Up"/>

                            </form>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>


            </div>
        </div>

    </div>
</div>

<script src="{{url()}}/js/custom.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<!-- Bootstrap minified js file with all plugins -->
<script src="{{ url() }}/distribution/js/bootstrap.min.js"></script>

<!-- Paypal Bootstrap Accessibility plugin js -->
<script src="{{ url() }}/distribution/js/bootstrap-accessibility.min.js"></script>

<!-- Custom UMD specific js files --><!-- Custom UMD specific js files -->

</body>
</html>
