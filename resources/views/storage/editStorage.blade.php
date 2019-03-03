@extends('layouts.storageLayout')

@section('content')
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    {{Form::open(array('action' => array('StorageController@edit', $id_data['id'])))}}
    @csrf
    <div class="d-flex justify-content-center" style="border:black">
    <table class="table table-striped table-hover" style="width:60%">
        <thead>
        <tr>
            <th>Material</th>
            <th>Quantity</th>
            <th>Measure</th>
            <th>Received Type</th>
        </tr>
        </thead>
        <tbody  id="myTable">

        @foreach(array_reverse($data[0]['material']) as $mat) 
            @if ($mat['id'] == $id_data['id'])
            <tr>
                <td>
                <input type="text" id="name" name="name" value="{{$mat['name']}}"><br>
                @if ($errors->has('name'))
                    <span class="help-block" style="color:red">
                        {{ $errors->first('name') }}*
                    </span>
                @endif
                </td>
                <td>
                <input type="text" id="quantity" name="quantity" value="{{$mat['quantity']}}"  autofocus><br>
                @if ($errors->has('quantity'))
                    <span class="help-block" style="color:red">
                        {{ $errors->first('quantity') }}*
                    </span>
                @endif
                </td>
                <td>
                <input type="text" id="measure" name="measure" value="{{$mat['measure']}}"><br>
                @if ($errors->has('measure'))
                    <span class="help-block" style="color:red">
                        {{ $errors->first('measure') }}*
                    </span>
                @endif
                </td>
                <td>
                    {{Form::select('receivedType', array('0' => 'Donated', '1' => 'Purchased', '2'=>'Received from another Storage centre'), $mat['receivedType'], ['class'=> 'form-control'])}}
                    @if ($errors->has('receivedType'))
                        <span class="help-block" style="color:red">
                            {{ $errors->first('receivedType') }}*
                        </span>
                    @endif
                </td>

                <td><button class = 'btn btn-primary'>Submit</button></td>
            </tr>
            @else
                <tr>
                    <td>{{$mat['name']}}</td>
                    <td>{{$mat['quantity']}}</td>
                    <td>{{$mat['measure']}}</td>
                    <td>{{$mat['receivedType']}}</td>
                    {{-- <td><button id="{{$mat['id']}}" class = 'btn btn-primary' action="edit/{{$mat['id']}}">Edit</button></td> --}}
                </tr>
            @endif
        @endforeach
        
        </tbody>
    </table>
    </div>
    {{ Form::close() }}

{{-- </form> --}}
@endsection