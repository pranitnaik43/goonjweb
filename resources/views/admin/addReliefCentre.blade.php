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
        <h4><a href="/admin/ReliefCentre"><button type="button">Go Back</a></h4>

    <?php echo Form::open(['action'=> 'AdminOfficeController@storeReliefCentre', 'method'=>'POST']); ?>

    <h1>Add Storage Centre</h1>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Relief Centre ID:</label><span style="color: red">*</span> {{--Label and red star --}}
                {{Form::text('relief_centre_id','', ['class' => 'form-control', 'placeholder' => 'Relief Centre ID', ($errors->has('relief_centre_id')) ? 'autofocus' : ''])}}     {{--To redirect to the error field --}}
                @if ($errors->has('relief_centre_id'))                        {{--error validation below the field--}}
                            <span class="help-block" style="color:red">
                                {{ $errors->first('relief_centre_id') }}*
                            </span>
                        @endif
            </div>             
        </div>
    </div>
    <hr>

    <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Point Of Contact:</label><span style="color: red">*</span>
                    {{Form::text('poc','', ['class' => 'form-control', 'placeholder' => 'Point Of Contact', ($errors->has('poc')) ? 'autofocus' : ''])}}
                    @if ($errors->has('poc'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('poc') }}*
                            </span>
                        @endif
                </div>             
            </div>

            <div class="col-sm-3">
                    <div class="form-group">
                        <label>Contact No:</label>
                        {{Form::text('contact_no', '', ['class' => 'form-control', 'placeholder' => 'Contact Number', ($errors->has('contact_no')) ? 'autofocus' : ''])}}
                        @if ($errors->has('contact_no'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('contact_no') }}*
                            </span>
                        @endif
                    </div>             
            </div>

            <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alternative Number:</label><span style="color: red">*</span>
                        {{Form::text('alternative_contact_no', '', ['class' => 'form-control', 'placeholder' => 'Alternative Contact No', ($errors->has('alternative_contact_no')) ? 'autofocus' : ''])}}
                        @if ($errors->has('alternative_contact_no'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('alternative_contact_no') }}*
                            </span>
                        @endif
                    </div>             
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Email ID:</label><span style="color: red">*</span>
                    {{Form::text('email_id', '', ['class' => 'form-control', 'placeholder' => 'Email ID', ($errors->has('email_id')) ? 'autofocus' : ''])}}
                    @if ($errors->has('email_id'))
                        <span class="help-block" style="color:red">
                            {{ $errors->first('email_id') }}*
                        </span>
                    @endif
                </div>             
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Address Line 1:</label>
                {{Form::textarea('address_line_1', '', ['size'=>'70x2', 'class' => 'form-control', 'placeholder' => 'Adddress Line 1', ($errors->has('address_line_1')) ? 'autofocus' : ''])}}
                @if ($errors->has('address_line_1'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('address_line_1') }}*
                            </span>
                        @endif
            </div>             
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Address Line 2:</label>
                {{Form::textarea('address_line_2', '', ['size'=>'70x2', 'class' => 'form-control', 'placeholder' => 'Adddress Line 2', ($errors->has('address_line_2')) ? 'autofocus' : ''])}}
                @if ($errors->has('address_line_2'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('address_line_2') }}*
                            </span>
                        @endif
            </div>             
        </div>


        <div class="col-sm-3">
            <div class="form-group">
                <label>Address Line 3:</label>
                {{Form::textarea('address_line_3', '', ['size'=>'70x2', 'class' => 'form-control', 'placeholder' => 'Adddress Line 3', ($errors->has('address_line_3')) ? 'autofocus' : ''])}}
                @if ($errors->has('address_line_3'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('address_line_3') }}*
                            </span>
                        @endif
            </div>             
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>City:</label>
                {{Form::text('city', '', [ 'class' => 'form-control', 'placeholder' => 'City', ($errors->has('city')) ? 'autofocus' : ''])}}
                @if ($errors->has('city'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('city') }}*
                            </span>
                        @endif
            </div>             
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>State:</label>
                {{Form::text('state', '', [ 'class' => 'form-control', 'placeholder' => 'State', ($errors->has('state')) ? 'autofocus' : ''])}}
                @if ($errors->has('state'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('state') }}*
                            </span>
                        @endif
            </div>             
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Country:</label>
                {{Form::text('country', '', [ 'class' => 'form-control', 'placeholder' => 'Country', ($errors->has('country')) ? 'autofocus' : ''])}}
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
                <label>Postal Code:</label>
                {{Form::text('postal_code', '', [ 'class' => 'form-control', 'placeholder' => 'Postal Code', ($errors->has('postal_code')) ? 'autofocus' : ''])}}
                @if ($errors->has('postal_code'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('postal_code') }}*
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
    