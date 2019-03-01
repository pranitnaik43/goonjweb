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
      <li><a href="/admin/ReliefCentre">Set Up Relief Centre</a></li>
      <li><a href="/admin/onsite">View Onsite Orders</a></li>
      <li><a href="/admin/storagecentre">Storage Centres</a></li>
    </ul>
  </div>
</nav>
  

<body>
  <div class="well well-lg">
      <h1 style= "color: SteelBlue"><u>Disasters</u></h1>
     <label for="usr" style= "color: SteelBlue" input align="right">Disasters Count:</label>
  <input type="text" class="" id="usr" input align="right" value="{{count($disaster)}}" readonly>

  <table class="table table-striped table-bordered table-hover table-condensed">
      <thead style= "color: SteelBlue">
          <tr style="color: blue-grey lighten-4">
             <th>Disaster Id</th>
             <th>Disaster Type</th>
             <th>City</th>
             <th>State</th>
             <th>Country</th>
             <th>Description</th>
           </tr>
         
     </thead>
     @if(count($disaster)>0)
     @foreach($disaster as $dis) 
          <tbody>
          <!--<table class="table table-striped table-bordered table-hover table-condensed">-->
          {{-- @if($stud->timeOut==null) --}}
              <tr>    
              {{-- <!--<th scope="row">{{$awaited_user->waiting_list_no}}</th>--> --}}
              <td><h6>{{$dis->disaster_id}}</h6></td>
              <td><h6>{{$dis->disaster_type}}</h6></td>
              <td><h6>{{$dis->city}}</h6></td>
              <td><h6>{{$dis->state}}</h6></td>
              <td><h6>{{$dis->country}}</h6></td>
              <td><h6>{{$dis->description}}</h6></td>
              </tr>
          </tbody>
  @endforeach
  </table>
  {{$disaster->links()}}
  @else
  <p>No Disasters</p>
  @endif
  <h4><a href="/admin/disaster/add"><button type="button">Add a new Disaster</a></h4>

      </div>
  </body>

</body>
</html>


<script>
        $(".nav li").on("click", function() {
          $(".nav li").removeClass("active");
          $(this).addClass("active");
        });
    
    </script>
    