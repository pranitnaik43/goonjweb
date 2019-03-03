@extends('layouts.app')

@section('content')  
  

<body>
  <div class="well well-lg">
      <h1 style= "color: SteelGrey"><u>Onsite Teams</u></h1>
  </div>
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
  <h4><a href="/admin/onsiteTeam/add" class="button" role="button">Create New Onsite Team</a></h4>
      
  </body>


</body>
</html>


<script>
        $(".nav li").on("click", function() {
          $(".nav li").removeClass("active");
          $(this).addClass("active");
        });
    
    </script>
    
@endsection