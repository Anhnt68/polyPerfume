@extends('layouts.client')

@section('content')
    <div class="container  py-4">

        <div class="row d-flex justify-content-between">
            <div class="col-md-5">
                <h2 class="py-4">Thông tin khách hàng</h2>
                <form action="{{ route('checkout.checkout') }}" method="post" class="form" role="form">
                    <table class="w-100">
                        <tr class="form-group">
                            <td>Họ tên</td>
                            <td><input type="text" name="order_name" class="form-control" placeholder="Họ tên ..."
                                    value="{{ Auth::user()->name }}"></td>
                        </tr>
                        <tr class="form-group">
                            <td>Email</td>
                            <td><input type="email" name="order_email" class="form-control" placeholder="Email..."
                                    value="{{ Auth::user()->email }}"></td>
                        </tr>
                        <tr class="form-group">
                            <td>Số điện thoại</td>
                            <td><input type="text" name="order_phone" class="form-control"
                                    placeholder="Số điện thoại ..." value="{{ Auth::user()->phone }}"></td>
                        </tr>
                        <tr class="form-group">
                            <td>Địa chỉ</td>
                            <td><input type="text" name="order_address" class="form-control" placeholder="Địa chỉ ..."
                                    value="{{ Auth::user()->address }}"></td>

                        </tr>
                        <input type="text" value="{{ Auth::user()->id }}" name="user_id" hidden>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary">Đặt hàng</button>
                                @csrf
                            </td>

                        </tr>

                    </table>
                    <div class="row flex-column justify-content-between">
                        <h2 class="py-4">Phương thức thanh toán</h2>

                        <div class="form-check mt-3">
                            <input class="form-check-input" id="check1" type="radio" value="0" checked
                                name="order_PTTT" />
                            <label class="form-check-label">
                                Thanh toán khi nhận hàng
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" id="check1" type="radio" value="1"
                                name="order_PTTT" />
                            <label class="form-check-label">
                                Chuyển Khoản
                            </label>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="py-4">Đơn hàng của bạn</h2>
                @php
                    $money = 0;
                @endphp
                @foreach ($data as $item)
                    <div class="row border">
                        <div class="col-md-4"><img src="{{ $item->Product->image }}" alt=""
                                style="width: 150px;height: 150px;"></div>
                        <div class="col-md-8">


                            <div class="product">
                                <h2 style="text-transform: none" class="title-product">{{ $item->Product->name }}</h2>
                                <p>Dung tích: {{ $item->Stock->Capacity->capacity_name }}ml</p>
                                <p class="product-quantity">Số lượng: {{ $item->quantity }}</p>
                                <p class="">Giá tiền: {{ number_format($item->Stock->price, 0, '', ',') }}
                                    đ</p>
                                <p>Thành
                                    tiền: <span
                                        id="thtien">{{ number_format($item->quantity * $item->Stock->price, 0, '', ',') }}</span>đ
                                </p>

                                @php
                                    
                                    $money += $item->quantity * $item->Stock->price;
                                @endphp
                            </div>


                        </div>
                    </div>
                @endforeach
                <div class="product-sum fs-5"><span class="fs-4 mx-5" id="tongtien"
                        style="font-weight: bold; font-size: 30px;">Tổng tiền:
                        {{ number_format($money, 0, '', ',') }}đ</span></div>

            </div>
        </div>
    </div>
    <script></script>
@endsection
