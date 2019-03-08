@extends('user.master')
@section('content')
@if (Route::has('login'))
    @auth
    <div class="row content">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <form action="" method="" accept-charset="utf-8" id="member-form">
                            <div class="login-acc wap-dktv">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control focus empty" name="member_address">
                                            <label class="floating-label">{{ trans('messages.address') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group clearfix">
                                            <div class="btn-group bootstrap-select clearfix open dropdown">
                                                <button type="button" class="dropdown-toggle btn" data-toggle="dropdown" data-id="member_city" title="City" aria-expanded="true">
                                                    <span class="filter-option pull-left">{{ trans('messages.city') }}</span>&nbsp;
                                                </button>
                                                <select class="selectpicker clearfix" data-container="body" id="member_city" name="member_city">
                                                    @foreach ($city as $key=>$oneCity)
                                                        <option value="{{ $oneCity->id }}">{{ $oneCity->name }}</option> 
                                                    @endforeach
                                                </select>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group clearfix">
                                            <select id="ck_district_id" class="form-control selectpicker clearfix" data-style="btn btn-findkfc" name="district">
                                                <option value="">{{ trans('messages.district') }}</option>
                                                @foreach ($district as $key=>$oneDistrict)
                                                    <option value="{{ $oneDistrict->id }}">{{ $oneDistrict->name }}</option> 
                                                @endforeach 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control focus empty" name="member_tel">
                                            <label class="floating-label">{{ trans('messages.tel') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a href="cartOrder">
                                                <button onclick="" class="btn btn-danger btn-block btn-giao-hang">{{ trans('messages.order') }}</button>
                                            </a>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row content">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <form action="" method="" accept-charset="utf-8" id="member-form">
                            <div class="login-no-acc wap-dktv">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control focus empty" name="member_name">
                                            <label class="floating-label">{{ trans('messages.name') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control focus empty" name="member_address">
                                            <label class="floating-label">{{ trans('messages.address') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group clearfix">
                                            <div class="btn-group bootstrap-select clearfix open dropup">
                                            <button type="button" class="dropdown-toggle btn btn-findkfc" data-toggle="dropdown" data-id="member_city" title="City" aria-expanded="true">
                                                <span class="filter-option pull-left">{{ trans('messages.city') }}</span>&nbsp;
                                            </button>
                                            <select class="selectpicker clearfix" data-container="body" id="member_city" name="member_city">
                                                @foreach ($city as $key=>$oneCity)
                                                    <option value="{{ $oneCity->id }}">{{ $oneCity->name }}</option> 
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group clearfix">
                                            <select id="ck_district_id" class="form-control selectpicker clearfix" data-style="btn btn-findkfc" name="district">
                                                <option value="">{{ trans('messages.district') }}</option>
                                                @foreach ($district as $key=>$oneDistrict)
                                                    <option value="{{ $oneDistrict->id }}">{{ $oneDistrict->name }}</option> 
                                                @endforeach 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control focus empty" name="member_tel">
                                            <label class="floating-label">{{ trans('messages.tel') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control focus empty" name="member_email">
                                            <label class="floating-label">{{ trans('messages.email') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a href="cartOrder">
                                                <button onclick="" class="btn btn-danger btn-block btn-giao-hang">{{ trans('messages.order') }}</button>
                                            </a>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endif    
@stop