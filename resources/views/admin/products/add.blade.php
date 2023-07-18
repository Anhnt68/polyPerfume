@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Thêm sản phẩm</h4>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" data-toggle="input-mask"
                                        data-mask-format="00/00/0000" name="name">
                                    <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Desc</label>
                                    <textarea name="desc" class="form-control" cols="80" rows="10" style="width: 100%;border-radius: 5px;"></textarea>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="cate_id" id="" class="form-control">
                                        <option value="#">Chọn danh mục</option>
                                        @if (!empty($allCate))
                                            {
                                            @foreach ($allCate as $item)
                                                <option value="{{ $item->id }}" {{ old('cate_id') == $item->id ? 'selected' : false }}>
                                                    {{ $item->cate_name }}</option>
                                            @endforeach
                                        @endif
                                        }
                                    </select>
                                    <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
                                </div>
                                <div class="form-group">
                                    <label>Image</label><br>
                                    <input type="file" class="dropify" name="product_image" /><br>
                                    <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>

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

@section('js')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        CKEDITOR.replace('desc');
    </script>
@endsection
