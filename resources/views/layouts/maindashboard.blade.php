<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Goonj</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  {{-- <link href="maindashboard.css" rel="stylesheet"> --}}
  <link href="{{ asset('css/maindashboard.css') }}" rel="stylesheet">
  <script src="{{ asset('js/maindashboard.js') }}" defer></script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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
                        <a class="navbar-brand" href="#">
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
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats" style="color:#fff"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="mainpage.html"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div >
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="/home" style="color:#fff"><i class="fa fa-fw fa-search"></i>Home</i></a>
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
                    <a href="/admin/storagecentre" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i> Storage Centre Details</a>
                </li>
                <li>
                    <a href="/displayStorage" style="color:#fff"><i class="fa fa-fw fa-user-plus"></i> View Storage </a>
                </li>
                <li>
                    <a href="#" style="color:#fff"><i class="fa fa-fw fa-envelope"></i> Onsite team chat</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content" style="background-color:#ffffff">
                    <h1>Welcome Admin!</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<div class="bgimg" >
        <img src="{{asset('img/goonj_bg.jpg')}}" style="max-width:100%; max-height: 200%;object-fit: cover">
    </div>
<script src="admin.js"></script>
<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>



    <main class="py-4">
            @yield('dashboardcontent')
        </main>


</body>
</html>