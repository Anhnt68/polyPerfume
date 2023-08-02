@extends('layouts.client')


@section('content')\
    <table>
        <tr>
            <th>STT</th>
            <th>quantity</th>
            <th>product_id</th>
            <th>capacity_id</th>
            <th>user_id</th>
        </tr>
    @foreach($data as $key=>$value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->quantity}}</td>
            <td>{{$value->product_id}}</td>
            <td>{{$value->capacity_id}}</td>
            <td>{{$value->user_id}}</td>
        </tr>
    @endforeach
    </table>

@endsection
