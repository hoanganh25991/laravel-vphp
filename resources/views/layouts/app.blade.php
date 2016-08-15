<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    {{-- link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css}}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css}}">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    SSFH
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="#">PD</a></li>
                    <li><a href="#">GD</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Accounts</a></li>
                    <li><a href="#">Transactions</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <section id="dashboard">
        <div class="container">
            <div class="hidden-xs">
                <div class="col-lg-6 col-md-3 col-sm-12 title"><h3>Dashboard</h3></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 wallet">
                    <img src="/images/c-wallet-icon.png" alt="">
                    <div class="pull-right"> 
                        <p class="text-right"><strong>C-Wallet</strong></p>
                        <p class="text-right">3000000 BTC</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 wallet">
                    <img src="/images/r-wallet-icon.png" alt="">
                    <div class="pull-right"> 
                        <p class="text-right"><strong>R-Wallet</strong></p>
                        <p class="text-right">50000000 BTC</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 wallet">
                    <img src="/images/pin-icon.png" alt="">
                    <div class="pull-right">
                        <p class="text-right"><strong>PIN Balance</strong></p>
                        <p class="text-right">3000</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="col-xs-12 hidden-md hidden-lg hidden-sm">
                    <tbody>
                        <!-- <tr>
                            <td colspan="6" class="text-center title"><h4>Dashboard</h4></td>
                        </tr> -->
                        <tr>
                            <td><img src="/images/c-wallet-icon.png" alt="" height="35px"></td>
                            <td class="text-right vertical-bottom" style="border-right:1px solid #e0e2e1;"><strong>C-Wallet</strong></td>
                            <td><img src="/images/r-wallet-icon.png" alt="" height="35px"></td>
                            <td class="text-right vertical-bottom" style="border-right:1px solid #e0e2e1;"><strong>R-Wallet</strong></td>
                            <td><img src="/images/pin-icon.png" alt="" height="35px"></td>
                            <td class="text-right vertical-bottom"><strong>PIN</strong></td>
                        </tr>
                        <tr>
                            <td class="text-right col-xs-4" colspan="2" style="border-right:1px solid #e0e2e1;">50000000 BTC</td>
                            <td class="text-right col-xs-4" colspan="2" style="border-right:1px solid #e0e2e1;">50000000 BTC</td>
                            <td class="text-right col-xs-4" colspan="2">3000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="donation-action">
        <div class="container">
            <div class="row">
                <div class="member-type alert-success col-md-2 col-xs-12">
                    <span class="fa fa-user"></span> Manager: <strong>Member</strong>
                </div>
                <div class="col-md-6 col-xs-12 pull-right server-time">
                    <?php
                        date_default_timezone_set('Asia/Singapore'); // CDT
                        $current_date = date('H:i:s d/m/Y');
                    ?>
                    <div class="col-md-6 col-xs-12">Sever time: {{ $current_date }}</div>
                    <div class="col-md-6 col-xs-12">Local time: {{ 'abc' }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <a class="btn btn-lg btn-success btn-block btn-donation" href="/pd/create"><span class="fa fa-btc"></span> <span>Provide Donation</span></a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a class="btn btn-lg btn-primary btn-block btn-donation" href="/gd/create"><span class="fa fa-download"></span> Get Donation</a>
                </div>
            </div>
        </div>
    </section>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
