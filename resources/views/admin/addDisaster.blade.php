@extends('layouts.app')

@section('content')

<div class="page-container">
        <h4><a href="/admin/disaster" class="btn btn-primary">Go Back</a></h4>

    <?php echo Form::open(['action'=> 'AdminOfficeController@storeDisaster', 'method'=>'POST']); ?>

    <h1>Add Disaster</h1>
    <br>
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
         
@endsection


<script>
        $(".nav li").on("click", function() {
          $(".nav li").removeClass("active");
          $(this).addClass("active");
        });
    
    </script>
    