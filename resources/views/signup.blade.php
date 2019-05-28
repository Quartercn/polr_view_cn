@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/signup.css' />
@endsection

@section('content')
<div class='col-md-6'>
    <h2 class='title'>Register</h2>

    <form action='/signup' method='POST'>
        用户名: <input type='text' name='username' class='form-control form-field' placeholder='用户名' />
        密码: <input type='password' name='password' class='form-control form-field' placeholder='密码' />
        电子邮箱: <input type='email' name='email' class='form-control form-field' placeholder='电子邮箱' />

        @if (env('POLR_ACCT_CREATION_RECAPTCHA'))
        <div class="g-recaptcha" data-sitekey="{{env('POLR_RECAPTCHA_SITE_KEY')}}"></div>
        @endif

        <input type="hidden" name='_token' value='{{csrf_token()}}' />
        <input type="submit" class="btn btn-default btn-success" value="注册"/>
        <p class='login-prompt'>
            <small>已经注册？ <a href='{{route('login')}}'>登录</a></small>
        </p>
    </form>
</div>
<div class='col-md-6 hidden-xs hidden-sm'>
    <div class='right-col-one'>
        <h4>用户名</h4>
        <p>登录 {{env('APP_NAME')}} 所需要的用户名。</p>
    </p>
    <div class='right-col-next'>
        <div class='right-col'>
            <h4>密码</h4>
            <p>登录 {{env('APP_NAME')}} 时使用的密码。</p>
        </p>
    </div>
    <div class='right-col-next'>
        <h4>电子邮箱</h4>
        <p>验证账户或找回密码时所需要的电子邮箱。</p>
    </p>
</div>
@endsection

@section('js')
    @if (env('POLR_ACCT_CREATION_RECAPTCHA'))
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
@endsection
