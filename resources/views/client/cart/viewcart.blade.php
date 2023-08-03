@extends('layouts.client')


@section('content')
{{--    {{dd($data)}}--}}

    <table class="table">
        <tr>
            <th>STT</th>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Dung tích</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao Tác</th>
        </tr>
    @foreach($data as $key=>$value)
        <tr>
            <td>{{$key+1}}</td>
            <td><img src="{{$value->Product->image}}" alt="" width="50px" height="50px"></td>
            <td>{{$value->Product->name}}</td>
            <td>{{$value->Stock->Capacity->capacity_name}}ml</td>
            <td>{{number_format($value->Stock->price, 0, '', ',')}}</td>
            <td>{{$value->quantity}}</td>
            <td>{{number_format($value->quantity * $value->Stock->price, 0, ',', ',')}}</td>
{{--            <td>{{$value->User->name}}</td>--}}
            <td>
                <form action="{{route('del-cart',$value->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Xóa</button>
                </form></td>
        </tr>
    @endforeach
    </table>
<a href="{{route('checkout.checkoutget', Auth::user()->id)}}">Đặt hàng</a>
@endsection
