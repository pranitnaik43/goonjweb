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
  
{{-- <div class="container"> --}}
  {{-- <p>Admin Office</p> --}}
{{-- </div> --}}
{{-- <h1>Unapproved Users</h1> --}}
{{-- @if(count($awaited_users)>0)
    <ul class="list-group">
        @foreach($awaited_users as $awaited_user)
            <li class="list-group-item">{{$awaited_user->waiting_list_no}}&nbsp;&nbsp;{{$awaited_user->first_name}}&nbsp;{{$awaited_user->last_name}}&nbsp;&nbsp;{{$awaited_user->contact_no}}&nbsp;&nbsp;{{$awaited_user->email}}</li>
        @endforeach
    </ul>
@endif --}}


<body>
  <div class="well well-lg">
      <h1 style= "color: SteelBlue"><u>Unapproved Users</u></h1>
     <label for="usr" style= "color: SteelBlue" input align="right">Unapproved Users Count:</label>
  <input type="text" class="" id="usr" input align="right" value="{{count($awaited_users)}}" readonly>

  <table class="table table-striped table-bordered table-hover table-condensed">
      <thead style= "color: SteelBlue">
          <tr style="color: blue-grey lighten-4">
             <th>Waiting_list_no</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Contact No</th>
             <th>Email</th>
         </tr>
         
     </thead>
     @if(count($awaited_users)>0)
     @foreach($awaited_users as $awaited_user) 
          <tbody>
          <!--<table class="table table-striped table-bordered table-hover table-condensed">-->
          {{-- @if($stud->timeOut==null) --}}
              <tr>    
              {{-- <!--<th scope="row">{{$awaited_user->waiting_list_no}}</th>--> --}}
              <td><h6>{{$awaited_user->waiting_list_no}}</h6></td>
              <td><h6>{{$awaited_user->first_name}}</h6></td>
              <td><h6>{{$awaited_user->last_name}}</h6></td>
              <td><h6>{{$awaited_user->contact_no}}</h6></td>
              <td><h6>{{$awaited_user->email}}</h6></td>
              <td><h6><a href="/admin/approve/{{$awaited_user->waiting_list_no}}"><button type="button">View</a></h6></td>
              {{-- <td><h6>{{$stud->timeOut}}</h6></td> --}}
              {{-- <td><h6>{{$stud->branch}}</h6></td> --}}
              </tr>
          {{-- @else       
              <tr style="color:red">    
              <!--<th scope="row">{{$stud->id}}</th>-->
              <td><h6>{{$stud->uid}}</h6></td>
              <td><h6>{{$stud->full_name}}</h6></td>
              <td><h6>{{$stud->email_id}}</h6></td>
              <td><h6>{{$stud->timeIn}}</h6></td>
              <td><h6>{{$stud->timeOut}}</h6></td>
              <td><h6>{{$stud->branch}}</h6></td>
              </tr>
          @endif --}}
          </tbody>
  @endforeach
  </table>
  {{$awaited_users->links()}}
  @else
  <p>No Unapproved Users</p>
  @endif
      </div>
  </body>


</body>
</html>

{{-- 
<script>
        $(".nav li").on("click", function() {
          $(".nav li").removeClass("active");
          $(this).addClass("active");
        });
    
    </script> --}}
    