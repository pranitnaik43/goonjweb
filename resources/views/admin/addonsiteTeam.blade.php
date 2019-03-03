<!DOCTYPE html>
<html lang="en">
<head>
  <title>Goonj</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href = "{{ asset('css/table.css') }}" rel="stylesheet">
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
        <h4><a href="/admin/onsiteTeam"><button type="button">Go Back</a></h4>

    <?php echo Form::open(['action'=> 'AdminOfficeController@storeonsiteTeam', 'method'=>'POST']); ?>

    <h1>Create Onsite Team</h1>
    <br>

    <div class="row">
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

            <div class="col-sm-3">
                    <div class="form-group">
                        <label>Team Size:</label>
                        {{Form::text('team_size', '', ['class' => 'form-control', 'placeholder' => 'Team Size', ($errors->has('team_size')) ? 'autofocus' : ''])}}
                        @if ($errors->has('team_size'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('team_size') }}*
                            </span>
                        @endif
                    </div>             
            </div>

            <div class="col-sm-3">
                    <div class="form-group">
                        <label>Team Members:</label><span style="color: red">*</span>
                        {{Form::text('team_members', '', ['class' => 'form-control', 'placeholder' => 'Team Members', ($errors->has('team_members')) ? 'autofocus' : ''])}}
                        @if ($errors->has('team_members'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('team_members') }}*
                            </span>
                        @endif
                    </div>             
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Team Establishment Date:</label><span style="color: red">*</span>
                    {{Form::date('team_establishment_date', '', ['class' => 'form-control', ($errors->has('team_establishment_date')) ? 'autofocus' : ''])}}
                    @if ($errors->has('team_establishment_date'))
                        <span class="help-block" style="color:red">
                            {{ $errors->first('team_establishment_date') }}*
                        </span>
                    @endif
                </div>             
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Start Date:</label>
                {{Form::date('start_date', '', ['class' => 'form-control', ($errors->has('start_date')) ? 'autofocus' : ''])}}
                @if ($errors->has('start_date'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('start_date') }}*
                            </span>
                        @endif
            </div>             
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>End Date:</label>
                {{Form::date('end_date', '', ['class' => 'form-control', ($errors->has('address_line_2')) ? 'autofocus' : ''])}}
                @if ($errors->has('end_date'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('end_date') }}*
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
    