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
      <li><a href="/admin/onsite">Onsite Orders</a></li>
      <li><a href="/admin/storagecentre">Storage Centres</a></li>
    </ul>
  </div>
</nav>
  
{{-- <div class="container">
  <h3>Our ReliefCentres</h3>
  <p>Admin Office</p>
</div> --}}
<h4><a href="/admin/approve"><button type="button">Go Back</a></h4>

<p>{{$awaited_user->waiting_list_no}}</p>
<p>{{$awaited_user->first_name}}</p>
<p>{{$awaited_user->middle_name}}</p>
<p>{{$awaited_user->last_name}}</p>
<p>{{$awaited_user->contact_no}}</p>
<p>{{$awaited_user->email}}</p>
<p>{{$awaited_user->address_line_1}}</p>
<p>{{$awaited_user->address_line_2}}</p>
<p>{{$awaited_user->address_line_3}}</p>
<p>{{$awaited_user->city}}</p>
<p>{{$awaited_user->state}}</p>
<p>{{$awaited_user->country}}</p>
<p>{{$awaited_user->postal_code}}</p>
<p>{{$awaited_user->type_of_role}}</p>
<p>{{$awaited_user->status}}</p>
{{-- <p>{{$awaited_user->legal_doc}}</p> --}}
<img class="images" id="image" src="{{URL::asset("storage/legal_docs/").'/'.$awaited_user->legal_doc}}" alt="Legal Document Photo" height="200" width="200" />

<br><br>

<?php echo Form::open(['action'=> ['AdminOfficeController@accept', $awaited_user->waiting_list_no] ,'method'=>'POST']); ?>
<label for="example-date-input" class="col-2 col-form-label">Waiting List No:</label>
{{Form::text('waiting_list_no', $awaited_user->waiting_list_no, ['readonly'])}}

{{Form::submit('Approve', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}


        <?php echo Form::open(['action'=> ['AdminOfficeController@reject', $awaited_user->waiting_list_no] ,'method'=>'POST']); ?>
        <label for="example-date-input" class="col-2 col-form-label">Waiting List No:</label>
          {{Form::text('waiting_list_no', $awaited_user->waiting_list_no, ['readonly'])}}
          
        {{Form::submit('Reject', ['class' =>'btn btn-primary'])}}
              {!! Form::close() !!}
          


{{-- <h4><a href="{{action('AdminOfficeController@accept'), $awaited_user->waiting_list_no, method('POST')}}"><button type="button">Approve</a></h4>
    <h4><a href="#"><button type="button">Reject</a></h4> --}}

</body>
</html>
