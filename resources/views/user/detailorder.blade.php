@extends('user.master')
@section('content')
@if (!Auth::user())
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
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="cartOrder">
                                            <button type="submit" class="btn btn-danger btn-block btn-giao-hang">{{ trans('messages.order') }}</button>
                                        </a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>
@else
    <div class="row content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <form action="{{route('createOrder')}}" method="POST" accept-charset="utf-8" id="member-form">
                        {{csrf_field()}}
                        {{ method_field('POST') }}
                        <div class="login-no-acc wap-dktv">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control focus empty" name="member_name" value="">
                                        <label class="floating-label">{{ trans('messages.name') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control focus empty" name="member_address" value="">
                                        <label class="floating-label">{{ trans('messages.address') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group clearfix">
                                        <div class="btn-group bootstrap-select clearfix open dropup"><button type="button" class="dropdown-toggle btn btn-findkfc" data-toggle="dropdown" data-id="member_city" title="City" aria-expanded="true"><span class="filter-option pull-left">{{ trans('messages.city') }}</span>&nbsp;</button><select class="selectpicker clearfix" data-container="body" id="member_city" name="member_city" onchange="load_district_checkout(this.value,0);product.check_address(true, 'member_city');" tabindex="-98">
                                            <option value="1">Hồ Chí Minh</option><option value="2">Hà Nội</option><option value="55">Hải Dương</option><option value="3">Hải Phòng</option><option value="66">Quảng Ninh</option><option value="28">Nghệ An</option><option value="5">Huế</option><option value="4" selected="selected">Đà Nẵng</option><option value="52">Bình Định</option><option value="50">Khánh Hòa</option><option value="53">Bình Thuận</option><option value="6">Đắk Lắk</option><option value="7">Bình Dương</option><option value="8">Đồng Nai</option><option value="9">Vũng Tàu</option><option value="51">An Giang</option><option value="11">Cần Thơ</option><option value="54">Kiên Giang</option><option value="954">Thanh Hóa</option><option value="1069">Bến Tre</option><option value="1072">Nam Định</option><option value="1076">Gia Lai</option><option value="1078">Phú Thọ</option><option value="1080">Lâm Đồng</option></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group clearfix">
                                        <select id="ck_district_id" class="form-control selectpicker clearfix" data-style="btn btn-findkfc" name="district" onchange="load_ward_checkout(this.value);" tabindex="-98">
                                            <option value="">{{ trans('messages.district') }}</option>
                                            <option value="1029">Ngũ Hành Sơn</option><option value="1034">Sơn Trà</option><option value="1016">Cẩm Lệ</option><option value="1023">Liên Chiểu</option><option value="42">Thanh Khê</option><option value="56">Hải Châu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control focus empty" name="member_tel" value="">
                                        <label class="floating-label">{{ trans('messages.tel') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control focus empty" name="member_email" value="">
                                        <label class="floating-label">{{ trans('messages.email') }}</label>
=======
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
>>>>>>> 8bf43f59d7342e5279472cfafaa785d45fbcaa91
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
@endif    
@stop