@extends('layouts.app')

@section('content')
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
            <tr>
                <form>
                    <td><input type="text" id="inputMaterial"></td>
                    <td><input type="text" id="inputQuantity"></td>
                    <td><input type="text" id="inputMeasure">
                    <button onsubmit="" class="btn btn-primary" style="margin-left:50px">Add</button>
                    </td>
                </form>
                <div></div>
            </tr>
        @foreach($data[0]['material'] as $mat) 
        <tr>
            <td>{{$mat['name']}}</td>
            <td>{{$mat['quantity']}}</td>
            <td>{{$mat['measure']}}</td>
        </tr>
        @endforeach
        {{-- <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr> --}}
        </tbody>
    </table>
    </div>
@endsection