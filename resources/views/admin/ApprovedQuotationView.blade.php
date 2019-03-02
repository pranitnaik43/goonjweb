@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">            {{-- Container --}}
    <table class="table table-striped table-hover" style="width:60%">
        <thead>
        <tr>
            <th>Material</th>
            <th>Quantity</th>
            <th>Measure</th>
        </tr>
        </thead>
        <tbody id="myTable">
        @foreach($approvedQuotation as $mat) 
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
        <a href="#" class="btn btn-primary">Send to storage centre</a>
    </div>
    
@endsection