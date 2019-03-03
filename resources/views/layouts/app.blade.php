<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Goonj') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href = "{{ asset('css/table.css') }}" rel="stylesheet">
    <link href = "{{ asset('css/maindashboard.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/maindashboard.js') }}" defer></script>
      
      
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
    
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="navbar-header d-flex col">
                        <a class="navbar-brand" href="/home">
                                {{-- {{ HTML::image('img/myimage.png', 'a picture') }} --}}
                           <img src="{{asset('img/goonj_logo.png')}}" style="width:65px;position: relative;
                                    left:50px;top:-10px" alt="image not found"></a></div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Top Menu Items -->
        @if(Auth::check())
        <ul class="nav navbar-right top-nav">
        <li><a href="{{route('logout')}}"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>            
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        
        <div >
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="/dashboard" style="color:#fff"><i class="fa fa-fw fa-search"></i>Home</i></a>
                </li>
                <li>
                    <a href="/admin/approve" style="color:#fff"><i class="fa fa-fw fa-search"></i> Verify User</i></a>
                </li>
                <li>
                    <a href="/admin/disaster" style="color:#fff"><i class="fa fa-fw fa-paper-plane-o"></i> Disasters</a>
                </li>
                <li>
                    <a href="/admin/ReliefCentre" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i> Set Up Relief Centre</a>
                </li>
                <li>
                    <a href="/admin/onsiteTeam" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i>Create Onsite Team</a>
                </li>
                <li>
                    <a href="/teamQuotations" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i> View Onsite Orders</a>
                </li>
                <li>
                    <a href="/admin/storagecentre" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i> Storage Centres</a>
                </li>
                <li>
                    <a href="/displayStorage" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i> View Storage </a>
                </li>
                <li>
                    <a href="/storage_center/track_list" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i> Track Orders (Offline) </a>
                </li>
                <li>
                        <a href="/admin/pinlocation" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i> Track Orders (Online) </a>
                </li>
                <li>
                    <a href="#" style="color:#fff"><i class="fa fa-fw fa-envelope"></i> Onsite team chat</a>
                </li>
            </ul>
            @endif
        </div>
        <!-- /.navbar-collapse -->
    </nav>


        <main class="py-4"  style="margin-left: 40px; margin-top:90px; margin-right:50px">
            @include('inc.messages')
            @yield('content')
        </main> 
    </div>
</body>
</html>
