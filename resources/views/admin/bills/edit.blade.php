@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <h4 class="card-title">Sửa Trạng thái</h4>

        <form method="post" enctype="multipart/form-data" action="{{ route('admin.bill.update', $data->id) }}">
            <select name="order_status">
                <option value="0" {{old('order_status')==0|| $data->order_status == 0?'selected':'none'}} >Đơn hàng đang tiếp nhận</option>
                <option value="1" {{old('order_status')==1|| $data->order_status == 1?'selected':'none'}}>Đóng gói</option>
                <option value="2" {{old('order_status')==2|| $data->order_status == 2?'selected':'none'}}>Đơn hàng đang trên đường đến vận
                    chuyển
                </option>
                <option value="3" {{old('order_status')==3|| $data->order_status == 3?'selected':'none'}}>Giao hàng thành công</option>
            </select>

            <div class="button-examples">
                @csrf
                <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Sửa</button>

            </div>
        </form>
    </div>
@endsection
