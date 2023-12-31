@extends('layouts.admin')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Đơn hàng</h3>
        </div>
        <!-- form start -->

        <div class="row">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10%">Mã đơn hàng</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Phương thức thanh toán</th>
                            <th>Tình trạng đơn hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($bill))
                            @foreach ($bill as $key => $value)
                                <tr>
                                    <td>MĐH-{{ $value->order_id }}</td>
                                    <td>{{ $value->order->order_name }}</td>
                                    <td>{{ $value->order->order_email }}</td>
                                    <td>{{ $value->order->order_address }}</td>
                                    <td>{{ $value->order->order_phone }}</td>
                                    <td>{{ get_ttttt($value->order->order_PTTT) }}</td>
                                    <td>{{ get_status($value->order->order_status) }}</td>

                                    <td width="3%"><a
                                            href="{{ route('admin.bill.bill-product', ['id' => $value->order_id]) }}">X</a>

                                        <a href="{{ route('admin.bill.edit', $value->order_id) }}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Không có đơn hàng</td>
                            </tr>
                        @endif
                    </tbody>
                </table>



            </div>
        </div>

    </div>
@endsection
