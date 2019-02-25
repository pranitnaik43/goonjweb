@extends('layouts.app')

@section('content')
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="d-flex justify-content-center">
            <a href="/displayStorage" class="btn btn-primary" style="margin-left:50px">View Material</a>
            <a href="/addStorage" class="btn btn-primary" style="margin-left:50px">Add/Edit Material</a>
            {{-- <a href="/editStorage" class="btn btn-primary" style="margin-left:50px">Edit Material</a> --}}
    </div>
    {{-- <form action ="{{ action('StorageController@edit') }}", method = 'POST' style="width:100%"> --}}
    {{-- <form action ="/edit/{{$id_data['id']}}", method = 'POST' style="width:100%"> --}}
    {{Form::open(array('action' => array('StorageController@edit', $id_data['id'])))}}
        
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
            {{-- <tr>
                <form id="add">
                    <td><input type="text" id="inputMaterial"></td>
                    <td><input type="text" id="inputQuantity"></td>
                    <td><input type="text" id="inputMeasure">
                    <td><button onsubmit="" class="btn btn-primary" style="margin-left:50px">Add</button><td>
                    </td>
                </form>
                <div></div>
            </tr> --}}
        @foreach(array_reverse($data[0]['material']) as $mat) 
        @if ($mat['id'] == $id_data['id'])
        <tr>
            <td><input type="text" id="name" name="name" value="{{$mat['name']}}"></td>
            <td><input type="text" id="quantity" name="quantity" value="{{$mat['quantity']}}"></td>
            <td><input type="text" id="measure" name="measure" value="{{$mat['measure']}}"></td>
            <td><button class = 'btn btn-primary'>Submit</button></td>
        </tr>
        @else
            <tr>
                <td>{{$mat['name']}}</td>
                <td>{{$mat['quantity']}}</td>
                <td>{{$mat['measure']}}</td>
                {{-- <td><button id="{{$mat['id']}}" class = 'btn btn-primary' action="edit/{{$mat['id']}}">Edit</button></td> --}}
            </tr>
        @endif
        {{-- <tr>
            <form>
            <td><input type="text" value="{{$mat['name']}}"></td>
            <td><input type="text" value="{{$mat['quantity']}}"></td>
            
            <td><input type="text" value="{{$mat['measure']}}"></td>
            <td><button id={{$mat['id']}} class="btn btn-primary" style="margin-left:50px">Submit</button><td>
            </form>
        </tr> --}}
        @endforeach
        
        </tbody>
    </table>
    </div>
    {{ Form::close() }}

{{-- </form> --}}
@endsection