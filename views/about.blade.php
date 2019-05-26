@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
<link rel='stylesheet' href='/css/effects.css' />
@endsection

@section('content')
<div class='well logo-well'>
    <img class='logo-img' src='/img/logo.png' />
</div>

<div class='about-contents'>
    @if ($role == "admin")
    <dl>
        <p>构建信息</p>
        <dt>当前版本: {{env('POLR_VERSION')}}</dt>
        <dt>发布日期: {{env('POLR_RELDATE')}}</dt>
        <dt>应用安装: {{env('APP_NAME')}} 在 {{env('APP_ADDRESS')}} 于 {{env('POLR_GENERATED_AT')}}<dt>
    </dl>
    <p>由于您当前正以管理员身份登录，您可以查看到以上信息。</p>
    @endif

    <p>{{env('APP_NAME')}} 由 Polr 2 强力驱动，一个开源的、简约的短链接平台。
        查看 <a href='https://github.com/Cydrobolt/polr'>Github 页面</a> 或者 <a href="//project.polr.me">项目网站</a> 来获取更多详情。
        <br />Polr 基于 GNU GPL License 开源。
    </p>
</div>
<a href='#' class='btn btn-success license-btn'>更多信息</a>
<pre class="license" id="gpl-license">
Copyright (C) 2013-2017 Chaoyi Zha

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
</pre>

@endsection

@section('js')
<script src='/js/about.js'></script>
@endsection
