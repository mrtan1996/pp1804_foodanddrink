@extends('user.master')

@section('content')
<div class="noidung p-4 text-sm-center">
    <div class="container">
        <h5 class="toprate">{{ trans('messages.toprate') }}</h5>
        <div class="row">
            @foreach($listProduct as $product)
            <div class="col-sm-4">
                <div class="card text-white border-light bg-dark mb-3 sanpham">
                    <img class="card-img-top" src="https://timedotcom.files.wordpress.com/2016/05/trump-fail-004.jpg" alt="">
                    <div class="card-block text-sm-center">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary m-3">{{ trans('messages.order') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $listProduct->links() }}
    </div> {{-- end container --}}
</div>    {{-- end foodlist --}}
@stop
