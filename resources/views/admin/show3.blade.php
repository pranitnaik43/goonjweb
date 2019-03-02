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
      <li><a href="/admin/approve">Approve Unverified Users</a></li>
      <li><a href="/admin/disaster">Disasters</a></li>
      <li><a href="/admin/ReliefCentre">Set Up Relief Centre</a></li>
      <li><a href="/admin/onsiteTeam">Create Onsite Team</a></li>
      <li><a href="/admin/onsite">View Onsite Orders</a></li>
      <li><a href="/admin/storagecentre">Storage Centres</a></li>
    </ul>
  </div>
</nav>
  
{{-- <div class="container">
  <h3>Our ReliefCentres</h3>
  <p>Admin Office</p>
</div> --}}
<h4><a href="/admin/ReliefCentre"><button type="button">Go Back</a></h4>

<p>{{$relief_centre->relief_centre_id}}</p>
<p>{{$relief_centre->poc}}</p>
<p>{{$relief_centre->contact_no}}</p>
<p>{{$relief_centre->alternative_contact_no}}</p>
<p>{{$relief_centre->email_id}}</p>
<p>{{$relief_centre->address_line_1}}</p>
<p>{{$relief_centre->address_line_2}}</p>
<p>{{$relief_centre->address_line_3}}</p>
<p>{{$relief_centre->city}}</p>
<p>{{$relief_centre->state}}</p>
<p>{{$relief_centre->country}}</p>
<p>{{$relief_centre->postal_code}}</p>

</body>
</html>
