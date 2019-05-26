@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/lost_password.css' />
@endsection

@section('content')
<h1 class='header'>密码遗失</h1>

<div class='col-md-6 col-md-offset-3'>
    <form action='/lost_password' method='POST'>
        <input type='email' name='email' placeholder='电子邮箱' class='form-control email-input-pd'>
        <input type="hidden" name='_token' value='{{csrf_token()}}' />
        <input type='submit' value='发送密码重置邮件' class='form-control'>
    </form>
</div>
@endsection
