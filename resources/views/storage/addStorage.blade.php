@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
            <a href="/displayStorage" class="btn btn-primary" style="margin-left:50px">View Material</a>
            <a href="/addStorage" class="btn btn-primary" style="margin-left:50px">Add Material</a>
            {{-- <a href="/editStorage" class="btn btn-primary" style="margin-left:50px">Edit Material</a> --}}
    </div>
    <form action ="{{ action('StorageController@add') }}", method = 'POST' style="width:100%">
            @csrf
    {{-- <form action="{{ route('/add') }}", method = 'POST' style="width:100%"> --}}

    <div class="d-flex justify-content-center">
    {{-- {{Form::open(['action' => 'StorageController@add', 'method' => 'POST'])}} --}}
    <table class="table table-striped table-hover" style="width:60%">
        <thead>
        <tr>
            <th>Material</th>
            <th>Quantity</th>
            <th>Measure</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" id="name" name="name"></td>
                <td><input type="text" id="quantity" name="quantity"></td>
                <td><input type="text" id="measure" name="measure"></td>
                <td><button class = 'btn btn-primary'>Add</button></td>
                    {{-- {{Form::submit('Submit', ['class' =>'btn btn-primary'])}} --}}
                {{-- <button class="btn btn-primary" style="margin-left:50px">Add</button> --}}
            </tr>
        
        @foreach(array_reverse($data[0]['material']) as $mat) 
        <tr>
            <td>{{$mat['name']}}</td>
            <td>{{$mat['quantity']}}</td>
            <td>{{$mat['measure']}}</td>
            <td><a href="/editStorage/{{$mat['id']}}" class = 'btn btn-primary'>Edit</a></td>
        </tr>
        @endforeach
        
        </tbody>
    </table>
    {{-- {!! Form::close() !!} --}}
    </div>
    </form>
@endsection