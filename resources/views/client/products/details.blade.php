@extends('layouts.client')
@section('content')
    <div class="row">
        <div class="col-6">
            <img src="{{$data->Product->image}}" width="100%">
        </div>
        <div class="col-6">
            <p>{{$data->price}}</p>
            <p>{{$data->Product->name}}</p>
            <p>{{$data->Capacity->capacity_name}}</p>
        </div>
    </div>
@endsection
