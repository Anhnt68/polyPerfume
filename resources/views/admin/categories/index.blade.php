@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic Data Table</h4>
                    <p class="card-subtitle mb-4">
                        DataTables has most features enabled by default, so all you need to do to use it with your own
                        tables is to call the construction
                        function:
                    </p>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                      

                
                        <thead>
                            <tr>
                                <th style="width:5%">STT</th>
                                <th>Tên danh mục</th>
                                <th>Ảnh danh mục</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>  <button type="submit" class="btn btn-primary waves-effect waves-light"><a
                                    href="{{ route('admin.category.add') }}" class="text-white">Thêm mới</a></button></th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->cate_name }}</td>
                                    <td><img src="{{ $value->image }}" alt="" style="width:200px "; height="150px">
                                    </td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td class="d-flex space-around">
                                        <div class="">
                                            <form action="{{ route('admin.category.edit', ['id' => $value->id]) }}"
                                                id="item-{{ $value->id }}" method="get">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-primary"><i
                                                        class="bi bi-pencil-square fs-6 text-white mx-2"></i></button>
                                            </form>
                                        </div>
                                        <div class="">
                                            <form action="{{ route('admin.category.delete', ['id' => $value->id]) }}"
                                                id="item-{{ $value->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"> <i
                                                        class="bi bi-trash-fill fs-6 text-white mx-2"></i></button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
