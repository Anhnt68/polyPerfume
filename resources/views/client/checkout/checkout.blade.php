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
                                       value=""></td>
                        </tr>
                        <tr class="form-group">
                            <td>Email</td>
                            <td><input type="email" name="order_email" class="form-control" placeholder="Email..."
                                       value=""></td>
                        </tr>
                        <tr class="form-group">
                            <td>Số điện thoại</td>
                            <td><input type="text" name="order_phone" class="form-control"
                                       placeholder="Số điện thoại ..." value=""></td>
                        </tr>
                        <tr class="form-group">
                            <td>Địa chỉ</td>
                            <td><input type="text" name="order_address" class="form-control" placeholder="Địa chỉ ..."
                                       value=""></td>
                        </tr>


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
                                   name="check" />
                            <label class="form-check-label">
                                Thanh toán khi nhận hàng
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" id="check1" type="radio" value="1" name="check" />
                            <label class="form-check-label">
                                Chuyển Khoản
                            </label>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="py-4">Đơn hàng của bạn</h2>
                    <div class="row border">
                        <div class="col-md-4"><img src="" alt=""
                                                   style="width: 150px;height: 150px;"></div>
                        <div class="col-md-8">

                            <div class="product">
                                <p class="title-product"></p>
                                <p class="product-quantity">Số lượng: </p>
                                <p class="">Giá tiền:
                                    đ</p>
                                <p>Thành
                                    tiền:
                                    đ
                                </p>
                            </div>
                        </div>
                    </div>
                <div class="product-sum fs-5">Tổng tiền: <span
                            class="fs-4 mx-5">đ</span></div>

            </div>
        </div>
    </div>
    @endsection