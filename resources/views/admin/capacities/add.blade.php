@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <h4 class="card-title">Thêm Dung Tích</h4>

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
                <label for="simpleinput">Dung tích</label>
                <input type="text" name="capacity_name" id="simpleinput" class="form-control" placeholder="Enter your text">
                @error('capacity_name')
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
