@extends('user.master')
@section('content')

<h1 class="block-title mb-4 text-center">{{ trans('messages.history') }}</h1>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <div class="input-group">
                <div class="input-group-btn search-panel">
                    <div class="dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">{{ trans('messages.filterby') }}</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#order">{{ trans('messages.order') }}</a></li>
                            <li><a href="#employee">{{ trans('messages.employee') }}</a></li>
                            <li><a href="#status">{{ trans('messages.status') }}</a></li>
                            <li class="divider"></li>
                            <li><a href="#all">{{ trans('messages.anythingelse') }}</a></li>
                        </ul>
                    </div>    
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="col-xs-12 col-xs-offset-2">
        <div class="history-table">
            <div class="history-table-row history-table-heading">
                <div class="history-table-cell stt">{{ trans('messages.stt') }}</div>
                <div class="history-table-cell time">{{ trans('messages.time') }}</div>
                <div class="history-table-cell employee">{{ trans('messages.employee') }}</div>
                <div class="history-table-cell totals">{{ trans('messages.totals') }}</div>
                <div class="history-table-cell status">{{ trans('messages.status') }}</div>
                <div class="history-table-cell detail">{{ trans('messages.detail') }}</div>
            </div>
        </div>
</div>
@stop
