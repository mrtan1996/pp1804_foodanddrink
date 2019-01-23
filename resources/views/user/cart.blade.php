@extends('user.master')
@section('content')
<div class="col-md-12-center">
    <div class="box-don-hang">
        <div class="row">
            <div class="col-md-6 ttsp">{{ trans('messages.detail') }}</div>
            <div class="col-md-2 dg">{{ trans('messages.price') }}</div>
            <div class="col-md-2 sl">{{ trans('messages.quantity') }}</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row content">
            <div class="container-fluid" id="update_cart">
                <div class="row item" id="cart_combo_80_1">
                    @foreach($cartCollection as $key => $cartItem)
                        <div class="col-md-6 col-sm-6 ttsp">
                            <div class="row">
                                <div class="col-xs-12 nuthieuchinh">
                                    <form method="POST" action = "{{ route('removeItem' , ['id' => $cartItem->id]) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a class="btn button-close removebtn">
                                            <button onclick="return confirm_delete()" type="submit" class="fa fa-trash"></button>
                                        </a>
                                        
                                    </form>
                                    <span class="pname">{{ $cartItem->name }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <img src="{{ $cartItem->image }}" class="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-md-2 giatien">
                                <div class="price ml-3" id="after_price_combo_80_1">{{ $cartItem->price }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 offset-md-2">
                                <div class="quantitycart offset-md-2">{{ $cartItem->quantity }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container-fluid">    
                <div class="col-md-12-push-2 totalamount">
                    <div class="clearfix b-mobile b-left">
                        <label class="nhan">{{ trans('messages.totalprice') }}</label>
                    </div>
                    <div class="price b-mobile b-right clearfix">
                        <div class="totalprice"> 67.<small>000</small> <small>VNĐ</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function confirm_delete() {
        return confirm('{{ trans('messages.confirm') }}');
    }
</script>
<div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        </div>
                                    <div class="col-md-6 col-md-push-2 col-sm-6 col-sm-push-0 text-right">
                                        <div class="clearfix b-mobile b-left n-mobile">
                                            <div class="ordernew clearfix">
                                                <div id="data_fee">
                                                    <div class="row">
                                                        <div class="col-xs-6 left">GIÁ TRỊ ĐƠN HÀNG:</div>
                                                        <div class="col-xs-6 right">
                                                            <div class="price" id="cart_total">
                                                                68.<small>000</small> <small>VNĐ</small>               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix b-mobile b-left n-mobile">
                                            <div class="ordernew clearfix">
                                                <div id="data_fee">
                                                    <div class="row">
                                                        <div class="col-xs-6 left">PHÍ GIAO HÀNG:</div>
                                                        <div class="col-xs-6 right">
                                                            <div class="price">
                                                                10.<small>000</small> <small>VNĐ</small>                                                                                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                <div class="row">
                                            <div class="col-xs-6 left"><label class="nhan text-uppercase">TỔNG THANH TOÁN</label>:</div>
                                            <div class="col-xs-6 right">
                                                <input type="hidden" name="shipping_fee" id="shipping_fee" value="10000">
                                                    <div class="price price_total" id="cart_total_price">78.<small>000</small> <small>VNĐ</small></div>
                                                        </div>
                                        </div>
                                        <!--div class="clearfix b-mobile b-left">
                                          <label class="nhan text-uppercase">TỔNG THANH TOÁN</label>
                                        </div>
                                        <div class="price b-mobile b-right clearfix">
                                            <div id="cart_total_price"> 68.<small>000</small> <small>VNĐ</small></div>
                                        </div-->
                                        <div class="clearfix b-btn-mobile">
                                            <a href="javascript:void(0);" onclick="product.place_order();" class="btn btn-danger btn-lg btn-dk">đặt hàng</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
@stop

