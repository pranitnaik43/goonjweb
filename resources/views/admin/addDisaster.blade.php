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
  
<div class="container">
        <h4><a href="/admin/disaster"><button type="button">Go Back</a></h4>

    <?php echo Form::open(['action'=> 'AdminOfficeController@storeDisaster', 'method'=>'POST']); ?>

    <h1>Add Disaster</h1>
    <br>
    {{-- <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Disaster ID:</label><span style="color: red">*</span>                 
                {{Form::text('disaster_id','', ['class' => 'form-control', 'placeholder' => 'Disaster ID', ($errors->has('disaster_id')) ? 'autofocus' : ''])}}     
                @if ($errors->has('disaster_id'))                        
                            <span class="help-block" style="color:red">
                                {{ $errors->first('disaster_id') }}*
                            </span>
                        @endif
            </div>             
        </div>
    </div>
    <hr> --}}

    <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Disaster Type:</label><span style="color: red">*</span>
                    {{Form::text('disaster_type','', ['class' => 'form-control', 'placeholder' => 'Disaster Type', ($errors->has('disaster_type')) ? 'autofocus' : ''])}}
                    @if ($errors->has('disaster_type'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('disaster_type') }}*
                            </span>
                        @endif
                </div>             
            </div>

            <div class="col-sm-3">
                    <div class="form-group">
                        <label>City:</label>
                        {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City', ($errors->has('city')) ? 'autofocus' : ''])}}
                        @if ($errors->has('city'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('city') }}*
                            </span>
                        @endif
                    </div>             
            </div>

            <div class="col-sm-3">
                    <div class="form-group">
                        <label>State:</label><span style="color: red">*</span>
                        {{Form::text('state', '', ['class' => 'form-control', 'placeholder' => 'State', ($errors->has('state')) ? 'autofocus' : ''])}}
                        @if ($errors->has('state'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('state') }}*
                            </span>
                        @endif
                    </div>             
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Country:</label><span style="color: red">*</span>
                    {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Country', ($errors->has('country')) ? 'autofocus' : ''])}}
                    @if ($errors->has('country'))
                        <span class="help-block" style="color:red">
                            {{ $errors->first('country') }}*
                        </span>
                    @endif
                </div>             
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Disaster description:</label>
                {{Form::textarea('description', '', ['size'=>'70x2', 'class' => 'form-control', 'placeholder' => 'Description', ($errors->has('description')) ? 'autofocus' : ''])}}
                @if ($errors->has('description'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('description') }}*
                            </span>
                        @endif
            </div>             
        </div>
    </div>
        {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
        {!! Form::close() !!} 
</div>

</body>
</html>


<script>
        $(".nav li").on("click", function() {
          $(".nav li").removeClass("active");
          $(this).addClass("active");
        });
    
    </script>
    