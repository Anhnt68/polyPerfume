@extends('layouts.client')
@section('content')
    <style>
        .row {
            padding-left: 50px;
            margin: 50px
        }
    </style>

    <div class="row">
        <h2 style="text-transform: none">Kết quả tìm kiếm của: {{ $searchTerm }}</h2>
        @foreach ($data as $product)
            <div class=" col-3">
                <img src="{{ $product->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title" style="text-transform: none"><a style="color: #000000"
                            href="{{ route('product.detail', $product->id) }}"
                            class="product-item-link">{{ $product->name }}</a></h2>
                    <h3 class="card-text" style="color: red"><span
                            class="price">{{ number_format($product->stocks[0]->price, 0, '', ',') }}đ</span></h3>
                    <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i
                            class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i
                            class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
