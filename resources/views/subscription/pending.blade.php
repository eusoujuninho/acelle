@extends('layouts.core.frontend', [
	'menu' => 'subscription',
    'subscriptionPage' => true,
])

@section('title', trans('messages.subscriptions'))

@section('page_header')

    <div class="page-title">
        <ul class="breadcrumb breadcrumb-caret position-right">
            <li class="breadcrumb-item"><a href="{{ action("HomeController@index") }}">{{ trans('messages.home') }}</a></li>
            <li class="breadcrumb-item active">{{ trans('messages.subscription') }}</li>
        </ul>
    </div>

@endsection

@section('content')
    @include("account._menu", ['menu' => 'subscription'])

    <div class="row">
        <div class="col-md-6">
            <h2>{!! trans('messages.invoice.pending') !!}</h2>  
            <p> {!! trans('messages.invoice.pending.wording') !!}</p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="card shadow-sm rounded-3 px-2 py-2">
                <div class="card-body p-4">
                    @include('invoices.bill', [
                        'bill' => $invoice->getBillingInfo(),
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
