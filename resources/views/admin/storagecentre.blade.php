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
      <h1 style= "color: SteelBlue"><u>Storage Centres</u></h1>
     <label for="usr" style= "color: SteelBlue" input align="right">Storage Centres Count:</label>
  <input type="text" class="" id="usr" input align="right" value="{{count($storage_centre)}}" readonly>

  <table class="table table-striped table-bordered table-hover table-condensed">
      <thead style= "color: SteelBlue">
          <tr style="color: blue-grey lighten-4">
             <th>Storage Centre Id</th>
             <th>Point Of Contact</th>
             <th>Contact No</th>
             <th>Email_id</th>
             <th>Address Line 1</th>
             <th>Address Line 2</th>
             <th>Address Line 3</th>
             <th>City</th>
             <th>State</th>
             <th>Country</th>
             <th>Postal Code</th>
         </tr>
         
     </thead>
     @if(count($storage_centre)>0)
     @foreach($storage_centre as $s_centre) 
          <tbody>
          <!--<table class="table table-striped table-bordered table-hover table-condensed">-->
          {{-- @if($stud->timeOut==null) --}}
              <tr>    
              {{-- <!--<th scope="row">{{$awaited_user->waiting_list_no}}</th>--> --}}
              <td><h6>{{$s_centre->storage_centre_id}}</h6></td>
              <td><h6>{{$s_centre->poc}}</h6></td>
              <td><h6>{{$s_centre->contact_no}}</h6></td>
              <td><h6>{{$s_centre->email_id}}</h6></td>
              <td><h6>{{$s_centre->address_line_1}}</h6></td>
              <td><h6>{{$s_centre->address_line_2}}</h6></td>
              <td><h6>{{$s_centre->address_line_3}}</h6></td>
              <td><h6>{{$s_centre->city}}</h6></td>
              <td><h6>{{$s_centre->state}}</h6></td>
              <td><h6>{{$s_centre->country}}</h6></td>
              <td><h6>{{$s_centre->postal_code}}</h6></td>
              <td><h6><a href="/admin/storagecentre/{{$s_centre->storage_centre_id}}"><button type="button">View</a></h6></td>
              </tr>
          </tbody>
  @endforeach
  </table>
  {{$storage_centre->links()}}
  @else
  <p>No Storage Centres</p>
  @endif
  <h4><a href="/admin/storagecentre/add"><button type="button">Add new Storage Centres</a></h4>
      
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
    