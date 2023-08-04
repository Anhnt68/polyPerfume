<?php

function get_ttttt($x)
{
    switch ($x) {
        case '0':
            $status = "Thanh toán khi nhận hàng";
            break;
        case '1':
            $status = "Chuyển khoản";
            break;
        case '2':
            $status = "Thanh toán qua momo";
            break;
        default:
            $status = "Thanh toán khi nhận hàng";
            break;
    }
    return $status;
}

function get_status($x)
{
    switch ($x) {
        case '0':
            $status = "Đơn hàng đang được tiếp nhận";
            break;
        case '1':
            $status = "Đóng gói";
            break;
        case '2':
            $status = "Đơn hàng đang trên đường đến vận chuyển";
            break;
        case '3':
            $status = "Giao hàng thành công";
            break;
        default:
            $status = "Giao hàng thất bại";
            break;
    }
    return $status;
}