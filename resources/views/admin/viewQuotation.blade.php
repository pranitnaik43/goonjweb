@extends('layouts.app')

@section('content')
    <H3>Team ID:<small>{{$quotation['team_id']}}</small></H3>
    <div class="d-flex justify-content-center" style="border:black">            {{-- Container --}}
    <table class="table table-striped table-hover" style="width:60%">
    
        <thead>
        <tr>
            <th>Material</th>
            <th>Quantity</th>
            <th>Measure</th>
        </tr>
        </thead>
        <tbody id="myTable">
        @foreach($data as $mat) 
        <tr>
            <td>{{$mat['name']}}</td>
            <td>{{$mat['quantity']}}</td>
            <td>{{$mat['measure']}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="d-flex justify-content-center">
        <a href="/editQuotation" class="btn btn-primary">Add/Edit Material</a>
    </div>
    
@endsection