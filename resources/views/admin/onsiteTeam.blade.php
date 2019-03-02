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
      <li><a href="/admin/onsiteTeam">Create Onsite Team</a></li>
      <li><a href="/admin/onsite">View Onsite Orders</a></li>
      <li><a href="/admin/storagecentre">Storage Centres</a></li>
    </ul>
  </div>
</nav>
  

<body>
  <div class="well well-lg">
      <h1 style= "color: SteelBlue"><u>Onsite Teams</u></h1>
     <label for="usr" style= "color: SteelBlue" input align="right">Onsite Teams Count:</label>
  <input type="text" class="" id="usr" input align="right" value="{{count($onsite_team)}}" readonly>

  <table class="table table-striped table-bordered table-hover table-condensed">
      <thead style= "color: SteelBlue">
          <tr style="color: blue-grey lighten-4">
             <th>Team ID</th>
             <th>Disaster ID</th>
             <th>Team Size</th>
             <th>Team Members</th>
             <th>Team Establishment Date</th>
             <th>Start Date</th>
             <th>End Date</th>
         </tr>
         
     </thead>
     @if(count($onsite_team)>0)
     @foreach($onsite_team as $team) 
          <tbody>
          <!--<table class="table table-striped table-bordered table-hover table-condensed">-->
          {{-- @if($stud->timeOut==null) --}}
              <tr>    
              {{-- <!--<th scope="row">{{$awaited_user->waiting_list_no}}</th>--> --}}
              <td><h6>{{$team->team_id}}</h6></td>
              <td><h6>{{$team->disaster_id}}</h6></td>
              <td><h6>{{$team->team_size}}</h6></td>
              <td><h6>{{$team->team_members}}</h6></td>
              <td><h6>{{$team->team_establishment_date}}</h6></td>
              <td><h6>{{$team->start_date}}</h6></td>
              <td><h6>{{$team->end_date}}</h6></td>
              </tr>
          </tbody>
  @endforeach
  </table>
  {{$onsite_team->links()}}
  @else
  <p>No Onsite Teams</p>
  @endif
  <h4><a href="/admin/onsiteTeam/add"><button type="button">Create New Onsite Team</a></h4>
      
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
    