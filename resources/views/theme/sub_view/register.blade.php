@extends('layout.mainlayout')

@section('content')
    <div class="container h-100 w-100 mt-5">
        <h1 class="text-center mt-3 h-1">Register</h1>
        <div class="d-flex justify-content-center mb-3">
            <form action="" class="px-lg-5 px-md-3 w-100 login-form">
                <div class="row px-5 my-4">
                    <input class="col-lg-6 col-md-10 col-12 m-auto" type="text" id="first-name" placeholder="First Name">
                </div>
                <div class="row px-5 my-4">
                    <input type="text" id="last-name" class="col-lg-6 col-md-10 col-12 m-auto d-block" placeholder="Last Name">
                </div>
                <div class="row px-5 my-4">
                    <input class="col-lg-6 col-md-10 col-12 m-auto" type="email" id="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="row px-5 my-4">
                    <input type="password" id="password" class="col-lg-6 col-md-10 col-12 m-auto d-block" placeholder="Password">
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" id="btn-login" class="btn">Submit</button>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <a href="{{route('login')}}" id="login" class="text-center">Login?</a>
                </div>
            </form>
        </div>
    </div>
@endsection

<style>
    .h-1{
        font-family: 'Raleway', sans-serif;
        font-size: 36px;
        letter-spacing: 2.5px;
        font-weight: 700;
        color: #3a3a3b;
    }
    .login-form input{
        height: 40px;
        border-radius: 0;
        border-color: #3a3a3b;
        border: 1px solid #3a3a3b;
    }
    .login-form input:focus{
        border: 1px solid #000;
        border-radius: 0;
    }
    .login-form #btn-login{
        background-color: #242434 !important;
        color: #fff;
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        letter-spacing: 2px;
        font-weight: 700;
        padding: 10px 50px;
        border: none;
        border-radius: 0;
        cursor: pointer;
    }
    .login-form #btn-login:hover{
        background-color: #db9457 !important;
    }
    .login-form a{
        font-family: 'Raleway', sans-serif;
        font-size: 13px;
        letter-spacing: 1.4px;
        font-weight: 700;
        color: #3a3a3b;
    }
    .login-form a:hover{
        color: #db9457;
    }
</style>