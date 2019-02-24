@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                     {{-- {{Form::open(['action' => 'DashboardController@store', 'method' => 'POST'])}}  --}}
                     {{-- {{Form::open(['action' => "{{ route('register') }}", 'method' => 'POST'])}}  --}}
                    <form method="POST" action="{{ route('register') }}" id="form1">
                        {{-- {{Form::open(['action' => 'RegisterController@create', 'method' => 'POST'])}} --}}
                        @csrf

        <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>First Name:</label><span style="color: red">*</span>
                        {{Form::text('first_name','', ['class' => 'form-control', 'placeholder' => 'First' , ($errors->has('first_name')) ? 'autofocus' : ''])}}
                        @if ($errors->has('first_name'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('first_name') }}*
                                </span>
                            @endif
                    </div>             
                </div>

                <div class="col-sm-3">
                        <div class="form-group">
                            <label>Middle Name:</label>
                            {{Form::text('middle_name', '', ['class' => 'form-control', 'placeholder' => 'Middle Name', ($errors->has('middle_name')) ? 'autofocus' : ''])}}
                            @if ($errors->has('middle_name'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('middle_name') }}*
                                </span>
                            @endif
                        </div>             
                </div>

                <div class="col-sm-3">
                        <div class="form-group">
                            <label>Last Name:</label><span style="color: red">*</span>
                            {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Last Name', ($errors->has('last_name')) ? 'autofocus' : ''])}}
                            @if ($errors->has('last_name'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('last_name') }}*
                                </span>
                            @endif
                        </div>             
                </div>
        </div>

        
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Email ID:</label><span style="color: red">*</span>
                    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email ID', ($errors->has('email')) ? 'autofocus' : ''])}}
                    @if ($errors->has('email'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('email') }}*
                                </span>
                            @endif
                </div>             
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Contact No:</label><span style="color: red">*</span>
                    {{Form::text('contact_no', '', ['class' => 'form-control', 'placeholder' => 'Contact No', ($errors->has('contact_no')) ? 'autofocus' : ''])}}
                    @if ($errors->has('contact_no'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('contact_no') }}*
                                </span>
                            @endif
                </div>             
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Secondary Contact No:</label>
                    {{Form::text('alternative_contact_no', '', ['class' => 'form-control', 'placeholder' => 'Alternative Contact No', ($errors->has('alternative_contact_no')) ? 'autofocus' : ''])}}
                    @if ($errors->has('alternative_contact_no'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('alternative_contact_no') }}*
                                </span>
                            @endif
                </div>             
            </div>

        </div>
            
            

        <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Address Line 1:</label><span style="color: red">*</span>
                        {{Form::textarea('address_line_1', '', ['size' => '70x1', 'class' => 'form-control', 'placeholder' => 'Address Line 1', ($errors->has('address_line_1')) ? 'autofocus' : ''])}}
                        @if ($errors->has('address_line_1'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('address_line_1') }}*
                                </span>
                            @endif
                    </div>             
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Address Line 2:</label><span style="color: red">*</span>
                        {{Form::textarea('address_line_2', '', ['size' => '70x1', 'class' => 'form-control', 'placeholder' => 'Address Line 2', ($errors->has('address_line_2')) ? 'autofocus' : ''])}}
                        @if ($errors->has('address_line_2'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('address_line_2') }}*
                                </span>
                            @endif
                    </div>             
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Address Line 3:</label><span style="color: red">*</span>
                        {{Form::textarea('address_line_3', '', ['size' => '70x1', 'class' => 'form-control', 'placeholder' => 'Address Line 3', ($errors->has('address_line_3')) ? 'autofocus' : ''])}}
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
                            <label>City:</label><span style="color: red">*</span>
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
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Postal Code:</label><span style="color: red">*</span>
                        {{Form::text('postal_code', '', ['class' => 'form-control', 'placeholder' => 'Postal Code', ($errors->has('postal_code')) ? 'autofocus' : ''])}}
                        @if ($errors->has('postal_code'))
                                <span class="help-block" style="color:red">
                                    {{ $errors->first('postal_code') }}*
                                </span>
                            @endif
                    </div>             
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Type Of Role:</label><span style="color: red">*</span>
                        <br>
                        {{Form::select('type_of_role', array('1' => 'Admin Office', '2' => 'Storage Office Head', '3'=>'Onsite Team', '4' => 'Shipper'), '', ['class'=> 'form-control'])}}
                        @if ($errors->has('type_of_role'))
                                    <span class="help-block" style="color:red">
                                        {{ $errors->first('type_of_role') }}*
                                    </span>
                                @endif
                        <br>
                    </div>             
                </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                @if ($errors->has('password-confirm'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password-confirm') }}</strong>
                    </span>
                @endif
            </div>
        </div> 

                
                {{-- {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
                {!! Form::close() !!} --}}
                <button type="submit" class="btn btn-primary">
                Submit
                </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
