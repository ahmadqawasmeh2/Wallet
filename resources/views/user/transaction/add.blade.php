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
                    <div class="">
                        <div class="main-card mb-4 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Categroy</h5>
                                <form class="needs-validation"  action="{{route('transaction.addtransaction')}}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Admin Categroy</label>
                                            <select class="form-control-sm form-control">
                                                <option name="admin_cate">Small Select</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">User Categroy</label>
                                            <select class="form-control-sm form-control">
                                                <option name="user_cate">Small Select</option>
                                            </select>

                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Wallet Balance</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Wallet Balance"  name="balance">
                                            </div>

                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Total Income</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Total Income" name="total_income">
                                            </div>

                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Total Expenses</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="expenses" name="total_expenses">
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Note</label>
                                            <div class="input-group">

                                                <input type="text" class="form-control" placeholder="Note" name="note">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Add Categroy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection