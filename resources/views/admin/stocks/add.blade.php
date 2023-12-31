@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Thêm kho hàng</h4>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" class="form-control" data-toggle="input-mask"
                                        data-mask-format="00/00/0000" name="price" value="{{ old('price') }}">
                                    @error('price')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" class="form-control" data-toggle="input-mask"
                                        data-mask-format="00/00/0000" name="quantity"value="{{ old('quantity') }}">
                                    <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
                                    @error('quantity')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Capacity</label>
                                    <select name="capacity_id" id="" class="form-control">
                                        <option value="">Chọn dung tích</option>
                                        @if (!empty($allCapacity))
                                            {
                                            @foreach ($allCapacity as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('capacity_id') == $item->id ? 'selected' : false }}>
                                                    {{ $item->capacity_name }}</option>
                                            @endforeach
                                        @endif
                                        }
                                    </select>
                                    <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
                                    @error('capacity_id')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Product</label>
                                    <select name="product_id" id="" class="form-control">
                                        <option value="">Chọn sản phẩm</option>
                                        @if (!empty($allProduct))
                                            {
                                            @foreach ($allProduct as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('product_id') == $item->id ? 'selected' : false }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                        }
                                    </select>
                                    <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
                                    @error('product_id')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>

                        </div> <!-- end col -->
                        @csrf
                        <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Thêm
                            mới</button>

                        <a href="{{ route('admin.category.home') }}"
                            class="btn btn-warning btn-rounded waves-effect waves-light">Quay
                            lại</a>
                    </form>
                    <!-- end row -->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
