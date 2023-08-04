@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <h4 class="card-title">Sửa Dung Tích</h4>
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.capacity.post-edit', $data->id) }}">
            <input type="hidden" name="id" value="{{ $data->id }}" class="d-none">
            <div class="form-group">
                <label for="simpleinput">Dung tích</label>
                <input type="text" name="capacity_name" id="simpleinput" class="form-control"
                    placeholder="Enter your text" value="{{ $data->capacity_name }}">
                @error('capacity_name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="button-examples">
                @csrf
                <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Sửa</button>

                <a href="{{ route('admin.capacity.home') }}"
                    class="btn btn-warning btn-rounded waves-effect waves-light">Quay lại</a>
            </div>
        </form>
    </div>
@endsection
