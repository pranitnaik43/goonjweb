@extends('layouts.app')

@section('content')
    {{Form::open(['action' => 'AdminOfficeController@approveQuotation'])}}
    <div class="d-flex justify-content-center" style="border:black">            {{-- Container --}}
    <table class="table table-striped table-hover" style="width:60%">
        <thead>
        <tr>
            <th>Team</th>
            <th>Operation</th>
            <th>Details</th>
        </tr>
        </thead>
        <tbody id="myTable">
        @foreach($quotations as $quotation) 
        <tr>
            <td>{{$quotation['team_id']}}</td>
            <td><a href="/viewQuotation/{{$quotation['quotation_id']}}" class="button">View<a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="d-flex justify-content-center">         
        <button class = 'button'>Submit</button>
    </div>
    {{ Form::close() }}

@endsection