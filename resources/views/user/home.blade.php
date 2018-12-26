@extends('user.master')

@section('content')
<div class="noidung p-4 text-sm-center">
    <div class="container">
        <h5 class="toprate">{{ trans('messages.toprate') }}</h5>
        <div class="row">
            @for($i = 0; $i <= 4; $i++)
            <div class="col-sm-4">
                <div class="card text-white border-light bg-dark mb-3">
                    <img class="card-img-top" src="https://timedotcom.files.wordpress.com/2016/05/trump-fail-004.jpg" alt="">
                    <div class="card-block text-sm-center">
                        <h4 class="card-title">Chicken</h4>
                        <p class="card-text">chicken-fried steak and chicken-fried chicken have spread far beyond the boundaries of Texas.</p>
                        <a href="#" class="btn btn-primary m-3">{{ trans('messages.order') }}</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div> {{-- end container --}}
</div>    {{-- end foodlist --}}
@stop
