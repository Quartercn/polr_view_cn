@extends('layouts.minimal')

@section('title')
Setup Completed
@endsection

@section('css')
<link rel='stylesheet' href='/css/default-bootstrap.min.css'>
<link rel='stylesheet' href='/css/setup.css'>
@endsection

@section('content')
<div class="navbar navbar-default navbar-fixed-top">
    <a class="navbar-brand" href="/">Polr</a>
</div>

<div class='row'>
    <div class='col-md-3'></div>

    <div class='col-md-6 setup-body well'>
        <div class='setup-center'>
            <img class='setup-logo' src='/img/logo.png'>
        </div>
        <h2>安装完成</h2>
        <p>你的 Polr 安装已经完成。如果要继续，你可以 <a href='{{route('login')}}'>登录</a> 或者访问你的 <a href='{{route('index')}}'>主页面</a>.
        </p>
        <p>如果需要帮助可以查看 <a href='http://docs.polr.me/'>文档</a> 或者 <a href='//github.com/cydrobolt/polr'>README</a>来获取帮助。
        </p>
        <p>你可以在 IRC 上加入我们并在 <a href='//webchat.freenode.net/?channels=#polr'><code>#polr</code></a> 上提出问题或者寻求帮助。</p>

        <p>感谢使用 Polr！</p>
    </div>

    <div class='col-md-3'></div>
</div>


@endsection
