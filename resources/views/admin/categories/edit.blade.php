@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <h4 class="card-title">Sửa Danh Mục</h4>

        <form method="post" enctype="multipart/form-data" action="{{ route('admin.category.post-edit', $data->id) }}">
            <input type="hidden" name="id" value="{{ $data->id }}" class="d-none">
            <div class="form-group">
                <label for="simpleinput">Tên danh mục</label>
                <input type="text" name="cate_name" id="simpleinput" class="form-control" placeholder="Enter your text"
                    value="{{ $data->cate_name }}">
                @error('cate_name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="example-password">Ảnh danh mục</label> <br>
                <input type="file" class="dropify" data-height="300" name="cate_image" /><br>
                <img src="{{ $data->image }}" alt="" style="width: 150px;height: 150px;">
            </div>
            <div class="button-examples">
                @csrf
                <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Sửa</button>

                <a href="{{ route('admin.category.home') }}"
                    class="btn btn-warning btn-rounded waves-effect waves-light">Quay lại</a>
            </div>
        </form>
    </div>
@endsection
