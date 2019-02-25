@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <a href="/displayStorage" class="btn btn-primary" style="margin-left:50px">View Material</a>
        <a href="/addStorage" class="btn btn-primary" style="margin-left:50px">Add/Edit Material</a>
        {{-- <a href="/editStorage" class="btn btn-primary" style="margin-left:50px">Edit Material</a> --}}
    </div>
    <div class="d-flex justify-content-center" style="border:black">
    <table class="table table-striped table-hover" style="width:60%">
        <thead>
        <tr>
            <th>Material</th>
            <th>Quantity</th>
            <th>Measure</th>
        </tr>
        </thead>
        <tbody>
        @foreach(array_reverse($data[0]['material']) as $mat) 
        <tr>
            <td>{{$mat['name']}}</td>
            <td>{{$mat['quantity']}}</td>
            <td>{{$mat['measure']}}</td>
        </tr>
        @endforeach
        
        </tbody>
    </table>
    </div>
    {{-- <div id="test"></div>
    <script src="{{ asset('js/app.js') }}"></script> --}}
@endsection