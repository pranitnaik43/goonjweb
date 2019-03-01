@extends('layouts.storageLayout')

@section('content')
    
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
    

    {{-- <div id="try-it"></div>
    <button onclick="perform()">Click me</button> --}}

    {{-- <div id="root"></div> --}}
    {{-- <script type='text/javascript' src="{{ asset('js/try.js') }}"></script> --}}

@endsection