@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <h4 class="card-title">Thêm Tài Khoản</h4>
        <form method="post" enctype="multipart/form-data">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="form-group">
                <label for="simpleinput">Tên</label>
                <input type="text" name="name" id="simpleinput" class="form-control" placeholder="Enter your name">
                @error('name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleinput">Email</label>
                <input type="text" name="email" id="simpleinput" class="form-control" placeholder="Enter your email">
                @error('email')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleinput">Mật khẩu</label>
                <input type="password" name="password" id="simpleinput"  class="form-control" placeholder="Password">
                @error('password')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleinput">Địa chỉ</label>
                <input type="text" name="address" id="simpleinput" class="form-control" placeholder="Enter your text">
                @error('address')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleinput">Số điện thoại</label>
                <input type="text" name="phone" id="simpleinput" class="form-control" placeholder="Enter your phone number">
                @error('phone')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="simpleinput">Vai trò</label>
                <select name="role" id="" class="form-control">
                    <option value="0">Admin</option>
                    <option value="1">Khách hàng</option>
                </select>
                @error('role')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            @csrf
            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Thêm mới</button>

            <a href="{{ route('admin.capacity.home') }}" class="btn btn-warning btn-rounded waves-effect waves-light">Quay
                lại</a>
        </form>
    </div>
@endsection
