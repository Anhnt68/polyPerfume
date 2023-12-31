@extends('layouts.client')

@push('style')
    <style>
        .capacity-ml.active {
            background: #32d0c6;
            color: white;
        }

        .sp {
            padding-left: 50px
        }

        #capacity {
            margin-bottom: 20px;
        }

        .promo {
            position: relative;
        }

        .promo-box {
            background: #ffffff none repeat scroll 0 0;

            padding: 10px 0px;
            position: relative;
            width: 100%;

        }

        .promo-box .promo-item {
            text-align: center;
            border-right: 1px solid #eee;
        }

        .promo-box .promo-item:last-child,
        .promo-box .promo-item:nth-child(3) {
            border-right: 0px none;
        }

        .promo-box .icon {
            display: inline-table;
            vertical-align: middle;
        }

        .promo-box .icon i {
            font-size: 34px;
        }

        .promo-box .info {
            padding-left: 15px;
            text-align: left;
            display: inline-table;
            vertical-align: middle;
        }

        .promo-box h6 {
            margin: 0 0 2px 0;
            padding: 0;
            text-transform: uppercase;
        }

        .promo-box p {
            font-weight: 400;
            margin-bottom: 0px;
            margin-top: 0;
        }

        .mtb-sm-30 {
            margin-top: 30px;
            margin-bottom: 30px;
        }
    </style>
@endpush

@section('content')
    @foreach ($product as $key => $value)
        <div class="row" style="margin: 50px">
            <input type="hidden" id="product_id" value="{{ $value->id }}">
            <input type="hidden" id="stock_id" value="">

            <div class="col-6">
                <img src="{{ $value->image }}" width="500px" height="500px">
            </div>
            <div class="col-6 sp">
                <div>
                    <h1 id="name" style="text-transform: none"> {{ $value->name }}</h1>
                    <p>{!! $value->desc !!}</p>
                    <h2 id="productPrice" style="color: red">{{ number_format($value->stocks[0]->price, 0, '', ',') }}₫</h2>
                    <h3>Dung tích</h3><br>
                    @foreach ($value->stocks as $capa)
                        <span data-id="{{ $capa->id }}" id="capacity" class="p-3 border capacity-ml">
                            {{ $capa->Capacity->capacity_name }} ml</span>
                    @endforeach
                </div>
                <br>
                <form action="">
                    <h3>Số lượng</h3>
                    <div class="mb-3 d-flex justify-content-between" style="width: 100px; ">
                        <button class="input-group-text decrement-btn" style="width: 40px; height: 40px">-</button>
                        <input type="text" name="quantity" id="" class="form-control text-center qty-input"
                            value="1">
                        <button class="input-group-text increment-btn" style="width: 40px; height: 40px">+</button>
                    </div>
                </form>
                @if (Auth::user())
                    <div id="addtocart" class="btn">Add to cart</div>
                @else
                    <div><a class="btn" href="{{ route('loginUser') }}">Add to cart</a></div>
                @endif
            </div>

        </div>
        </div>
        {{--
        em muon khi them 1 san pham vao gio hang thi phai load lai trang detail
        :v load gio hang - cart a?
        khoong l
        --}}
    @endforeach
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.increment-btn').click(function(e) {
                e.preventDefault();

                var inc_val = $('.qty-input').val();
                var value = parseInt(inc_val, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    $('.qty-input').val(value);
                }
            })
            $('.decrement-btn').click(function(e) {
                e.preventDefault();

                var inc_val = $('.qty-input').val();
                var value = parseInt(inc_val, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    $('.qty-input').val(value);
                }
            })
        })
        $(function() {
            $(document).on('click', '#capacity', function() {
                $('.capacity-ml').removeClass('active')

                $(this).addClass('active')
                const id = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: "/test",
                    data: {
                        id
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.code === 200) {
                            $('#productPrice').text(response.data.price)
                            $('#stock_id').val(id)
                        }
                    }
                });
            });
            $(document).on('click', '#addtocart', function() {
                const stock_id = $('#stock_id').val();
                if (!stock_id) {
                    alert('Vui lòng chọn ml.')
                    return false;
                }
                $.ajax({
                    type: 'GET',
                    url: "{{ route('add-to-cart') }}",
                    data: {
                        product_id: $('#product_id').val(),
                        stock_id: stock_id,
                        quantity: $('.qty-input').val()
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response)
                        location.reload();

                    }
                });
            });
        })
    </script>
@endsection
