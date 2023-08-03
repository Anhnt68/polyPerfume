@extends('layouts.admin')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Sản phẩm</h3>
    </div>

    <hr>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="5%">STT</th>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Dung tích</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($bill as $key => $value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td><img src="{{ $value->product->image }}" alt="" style="width: 100px; height: 100px;">
                </td>
                <td>{{ $value->product->name }}</td>
                <td>{{ $value->stock->price }}</td>
                <td>{{ $value->stock->capacity->capacity_name }}ml</td>
                <td>{{ $value->sum_quantity }}</td>
                <td>{{ $value->sum_price }}</td>
{{--                <td>{{ $value->quantity * $value->product->product_price }}</td>--}}
            </tr>
        @endforeach
{{--        <tr>--}}
{{--            <a class="btn btn-primary" href="{{ route('admin.bill.bill') }}">--}}
{{--                <i class="bi bi-arrow-return-left text-white fs-5"></i></a>--}}
{{--        </tr>--}}
        </tbody>

    </table>
@endsection
