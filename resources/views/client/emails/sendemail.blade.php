<h1>Đặt hàng thành công</h1>

<h2>Cảm ơn {{ $auth->name }} đã tin tưởng đặt hàng của chúng tôi</h2>
<div>
    <h3>Thông tin nhận hàng</h3>
    <p>Họ và tên: {{ $auth->name }}</p>
    <p>Số điện thoại: {{ $auth->phone }}</p>
    <p>Địa chỉ: {{ $auth->address }}</p>
</div>
<div>
    <h3>Thông tin đơn hàng</h3>
    <p>{{ $cart->Product->name }}</p>
    <p>{{ $cart->Stock->Capacity->capacity_name }}ml</p>
    <p>{{ number_format($cart->Stock->price, 0, '', ',') }}</p>
    <p>{{ $cart->quantity }}</td>
    <p>{{ number_format($cart->quantity * $cart->Stock->price, 0, ',', ',') }}</p>
</div>
