@extends('user.layout.register')
@section('content')
<div class="page-wrapper" style=" padding-bottom:40vh;">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo" style="width:31%;margin: auto;">
                        <a href="#">
                            <img src="{{asset('style/images/logo-inverse.png')}}" alt="Wallet">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="/register" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="au-input au-input--full" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <div class="input-group">
                                    <input type="tel" class="form-control" name="phonenumber" id="phone">
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Birthdate</label>
                                <input class="au-input au-input--full" type="date" name="birthdate" placeholder="Birthdate">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="password">
                            </div>
                            <div class="form-group">
                                <label>User Image</label>
                                <input class="au-input au-input--full" type="file" name="image" placeholder="User Image">
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        </form>
                        <div class="register-link">
                            <p>
                                have account?
                                <a href="/">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
