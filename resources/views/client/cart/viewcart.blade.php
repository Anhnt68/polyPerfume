@extends('layouts.client')


@section('content')\
    <table class="table">
        <tr>
            <th>STT</th>
            <th>Số lượng</th>
            <th>Tên sản phẩm</th>
            <th>Dung tích</th>
            <th>Tên người đặt</th>
        </tr>
    @foreach($data as $key=>$value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->quantity}}</td>
            <td>{{$value->Product->name}}</td>
            <td>{{$value->Stock->Capacity->capacity_name}}ml</td>
            <td>{{$value->User->name}}</td>
        </tr>
    @endforeach
    </table>

@endsection
