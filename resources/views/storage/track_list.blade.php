@extends('layouts.app')

@section('content')
    {{-- <H3>Team ID:<small>{{$quotation['team_id']}}</small></H3> --}}
    <div class="d-flex justify-content-center" style="border:black">            {{-- Container --}}
    <table class="table" style="width:60%">
    
        <thead>
        <tr>
            <th>Start Date</th>
            <th>Sub_order</th>
            {{-- <th>Quantity</th>
            <th>Measure</th> --}}
        </tr>
        </thead>
        <tbody id="myTable">
        @foreach($shipment as $ship) 
        <tr>
            <td>{{$ship->start_date}}</td>
            <td>{{$ship->s_order_id}}</td>
            <td><a href="/storage_center/track/{{$ship->s_order_id}}" class="button">View</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
@endsection