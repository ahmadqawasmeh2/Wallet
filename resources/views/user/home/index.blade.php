@extends('user.layout.app')
@section('content')

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
@include('user.include.header')

    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            @include('user.include.slider')

            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>

        </div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                        </div>
                        <div class="page-title-actions">

                            <div class="d-inline-block dropdown">
                                <a href="{{route('transaction.transaction')}}" class="btn-shadow btn btn-info">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="metismenu-icon pe-7s-wallet"></i>
                                    </span>
                                    Add Transaction
</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-midnight-bloom">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Wallet Balance</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$transaction}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-arielle-smile">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading"> Total Income</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$transaction}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total Expenses</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$transaction}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-lg-12 col-lg-6">
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header-tab-animation card-header">
                                <div class="card-header-title">
                                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                    Wallet Report
                                </div>
                              
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs-eg-77">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                    <canvas id="canvas"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection