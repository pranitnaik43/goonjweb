<!DOCTYPE html>
<html lang="en">
<head>
  <title>Goonj</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/dashboard">Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/admin/home">Home</a></li>
      <li><a href="/admin/disaster">Disasters</a></li>
      <li><a href="/admin/approve">Approve Unverified Users</a></li>
      <li><a href="/admin/setUpReliefCentre">Set Up Relief Centre</a></li>
      <li><a href="/admin/onsite">View Onsite Orders</a></li>
      <li><a href="/admin/storagecentre">Storage Centres</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
      {{-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> --}}
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Goonj</h3>
  <p>Admin Office</p>
</div>

</body>
</html>


<script>
        $(".nav li").on("click", function() {
          $(".nav li").removeClass("active");
          $(this).addClass("active");
        });
    
    </script>
    