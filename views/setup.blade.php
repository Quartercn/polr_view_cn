@extends('layouts.minimal')

@section('title')
Setup
@endsection

@section('css')
<link rel='stylesheet' href='/css/default-bootstrap.min.css'>
<link rel='stylesheet' href='/css/setup.css'>
@endsection

@section('content')
<div class="navbar navbar-default navbar-fixed-top">
    <a class="navbar-brand" href="/">Polr</a>
</div>

<div class="row" ng-controller="SetupCtrl" class="ng-root">
    <div class='col-md-3'></div>

    <div class='col-md-6 setup-body well'>
        <div class='setup-center'>
            <img class='setup-logo' src='/img/logo.png'>
        </div>

        <form class='setup-form' method='POST' action='/setup'>
            <h4>数据库配置</h4>

            <p>数据库主机地址:</p>
            <input type='text' class='form-control' name='db:host' value='localhost'>

            <p>数据库端口:</p>
            <input type='text' class='form-control' name='db:port' value='3306'>

            <p>数据库用户名:</p>
            <input type='text' class='form-control' name='db:username' value='root'>

            <p>数据库密码:</p>
            <input type='password' class='form-control' name='db:password' value='password'>

            <p>
                数据库名称:
                <setup-tooltip content="Name of existing database. You must create the Polr database manually."></setup-tooltip>
            </p>
            <input type='text' class='form-control' name='db:name' value='polr'>


            <h4>应用配置</h4>

            <p>应用名称:</p>
            <input type='text' class='form-control' name='app:name' value='Polr'>

            <p>访问协议:</p>
            <input type='text' class='form-control' name='app:protocol' value='http://'>

            <p>应用 URL（Polr 的路径; 不包括 http:// 或者最后的斜杠）:</p>
            <input type='text' class='form-control' name='app:external_url' value='yoursite.com'>

            <p>
                高级分析:
                <button data-content="启用高级分析，以便随时间收集引用、地理位置和点击等数据。启用高级分析可降低性能并增加磁盘空间使用量。"
                    type="button" class="btn btn-xs btn-default setup-qmark" data-toggle="popover">?</button>
            </p>
            <select name='setting:adv_analytics' class='form-control'>
                <option value='false' selected='selected'>禁用高级分析</option>
                <option value='true'>启用高级分析</option>
            </select>

            <p>使用许可:</p>
            <select name='setting:shorten_permission' class='form-control'>
                <option value='false' selected='selected'>所有人都可以使用短链接</option>
                <option value='true'>只有登录的人可以使用短链接</option>
            </select>

            <p>公共接口:</p>
            <select name='setting:public_interface' class='form-control'>
                <option value='true' selected='selected'>显示公共接口（默认）</option>
                <option value='false'>重定向到指定地址</option>
            </select>

            <p>404 和禁用服务:</p>
            <select name='setting:redirect_404' class='form-control'>
                <option value='false' selected='selected'>显示一个错误页面（默认）</option>
                <option value='true'>重定向到指定地址</option>
            </select>

            <p>
                重定向地址:
                <setup-tooltip content="如果指定了重定向到自定义页面则必填此项。如果要使用 Polr，则直接前往 yoursite.com/login 登录。"></setup-tooltip>
            </p>
            <input type='text' class='form-control' name='setting:index_redirect' placeholder='http://your-main-site.com'>
            <p class='text-muted'>
                如果启用了重定向，在访问主页面之前你需要预先前往
                http://yoursite.com/login 进行登录。
            </p>

            <p>
                默认的 URL 结尾的形式:
                <setup-tooltip content="如果选择使用伪随机字符串，则无法使用基于计数器的结尾。"></setup-tooltip>
            </p>
            <select name='setting:pseudor_ending' class='form-control'>
                <option value='false' selected='selected'>使用 base62 或 base32 的计数器（更短但是更容易预测，例如 5a)</option>
                <option value='true'>使用伪随机字符串（更长但不容易预测，例如 6LxZ3j）</option>
            </select>

            <p>
                URL 结尾编码:
                <setup-tooltip content="This will have no effect if you choose to use pseudorandom endings."></setup-tooltip>
            </p>
            <select name='setting:base' class='form-control'>
                <option value='32' selected='selected'>base32 -- 小写字母和数字（默认）</option>
                <option value='62'>base62 -- 大小写字母和数字</option>
            </select>

            <h4>
                管理员账户设置
                <setup-tooltip content="These credentials will be used for your admin account in Polr."></setup-tooltip>
            </h4>

            <p>管理员账户:</p>
            <input type='text' class='form-control' name='acct:username' value='polr'>

            <p>管理员电子邮箱:</p>
            <input type='text' class='form-control' name='acct:email' value='polr@admin.tld'>

            <p>管理账户密码:</p>
            <input type='password' class='form-control' name='acct:password' value='polr'>

            <h4>
                邮件服务配置
                <setup-tooltip content="Required only if the email verification or password recovery features are enabled."></setup-tooltip>
            </h4>

            <p>SMTP 服务器:</p>
            <input type='text' class='form-control' name='app:smtp_server' placeholder='smtp.gmail.com'>

            <p>SMTP 端口:</p>
            <input type='text' class='form-control' name='app:smtp_port' placeholder='25'>

            <p>SMTP 用户名:</p>
            <input type='text' class='form-control' name='app:smtp_username' placeholder='example@gmail.com'>

            <p>SMTP 密码:</p>
            <input type='password' class='form-control' name='app:smtp_password' placeholder='password'>

            <p>SMTP 来源:</p>
            <input type='text' class='form-control' name='app:smtp_from' placeholder='example@gmail.com'>
            <p>SMTP 来源名:</p>
            <input type='text' class='form-control' name='app:smtp_from_name' placeholder='noreply'>

            <h4>API 设置</h4>

            <p>匿名 API:</p>
            <select name='setting:anon_api' class='form-control'>
                <option selected value='false'>关闭 -- 只有注册用户才可以使用 API</option>
                <option value='true'>开启 -- 密钥为空的 API 请求也允许</option>
            </select>

            <p>
                匿名 API 配额:
                <setup-tooltip content="未经身份验证的用户单个 IP 每分钟的 API 配额。"></setup-tooltip>
            </p>
            <input type='text' class='form-control' name='setting:anon_api_quota' placeholder='10'>

            <p>API 自动分配:</p>
            <select name='setting:auto_api_key' class='form-control'>
                <option selected value='false'>关闭 -- 管理员必须为每个用户手动启用 API</option>
                <option value='true'>开启 -- 每个用户在注册时都会收到一个 API 密钥</option>
            </select>

            <h4>其它设置</h4>

            <p>
                注册:
                <setup-tooltip content="启用注册允许任何用户创建帐户。"></setup-tooltip>
            </p>
            <select name='setting:registration_permission' class='form-control'>
                <option value='none'>禁用注册</option>
                <option value='email'>启用，需要邮件验证</option>
                <option value='no-verification'>启用，不需要邮件验证</option>
            </select>

            <p>
                限制电子邮件注册的域名:
                <setup-tooltip content="限制电子邮件注册的某些域名。"></setup-tooltip>
            </p>
            <select name='setting:restrict_email_domain' class='form-control'>
                <option value='false'>允许所有域名的电子邮件注册</option>
                <option value='true'>限制允许注册的邮件域名</option>
            </select>

            <p>
                允许的邮件域名:
                <setup-tooltip content="用逗号来分隔允许注册的邮件列表。"></setup-tooltip>
            </p>
            <input type='text' class='form-control' name='setting:allowed_email_domains' placeholder='company.com,company-corp.com'>

            <p>
                密码恢复:
                <setup-tooltip content="允许用户通过邮箱重置账户密码。"></setup-tooltip>
            </p>
            <select name='setting:password_recovery' class='form-control'>
                <option value='false'>禁用</option>
                <option value='true'>启用</option>
            </select>
            <p class='text-muted'>
                在设置允许重置密码之前请先确保邮件服务可用。
            </p>

            <p>
                启用 reCAPTCHA
                <setup-tooltip content="要使用这项你必须要提供 reCAPTCHA 密钥。"></setup-tooltip>
            </p>
            <select name='setting:acct_registration_recaptcha' class='form-control'>
                <option value='false'>注册时不需要 reCAPTCHA</option>
                <option value='true'>注册时需要 reCAPTCHA</option>
            </select>

            <p>
                reCAPTCHA 配置:
                <setup-tooltip content="如果您打算使用任何依赖于 reCAPTCHA 的功能，则必须提供 reCAPTCHA 密钥。"></setup-tooltip>
            </p>

            <p>
                reCAPTCHA Site Key
            </p>
            <input type='text' class='form-control' name='setting:recaptcha_site_key'>

            <p>
                reCAPTCHA Secret Key
            </p>
            <input type='text' class='form-control' name='setting:recaptcha_secret_key'>

            <p class='text-muted'>
                你可以从 <a href="https://www.google.com/recaptcha/admin">Google's reCAPTCHA website</a> 获取 reCAPTCHA 密钥。
            </p>

            <p>主题（<a href='https://github.com/cydrobolt/polr/wiki/Themes-Screenshots'>截图</a>）:</p>
            <select name='app:stylesheet' class='form-control'>
                <option value=''>Modern（默认）</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css'>Midnight Black</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css'>Orange</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css'>Crisp White</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css'>Cloudy Night</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css'>Calm Skies</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css'>Google Material Design</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css'>Blue Metro</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css'>Sandstone</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css'>Newspaper</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/solar/bootstrap.min.css'>Solar</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css'>Cosmo</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css'>Flatly</option>
                <option value='//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css'>Yeti</option>
            </select>

            <div class='setup-form-buttons'>
                <input type='submit' class='btn btn-success' value='安装应用程序'>
                <input type='reset' class='btn btn-warning' value='清除所有字段'>
            </div>
            <input type="hidden" name='_token' value='{{csrf_token()}}' />
        </form>
    </div>

    <div class='col-md-3'></div>
</div>

<div class='setup-footer well'>
    Polr 是基于 <a href='//www.gnu.org/copyleft/gpl.html'>GPLv2+ 开源协议</a> 的 <a href='https://opensource.org/osd' target='_blank'>开源软件</a> .

    <div>
        Polr 版本 {{env('VERSION')}} 发布于 {{env('VERSION_RELMONTH')}} {{env('VERSION_RELDAY')}}，{{env('VERSION_RELYEAR')}} -
        <a href='//github.com/cydrobolt/polr' target='_blank'>Github</a>

        <div class='footer-well'>
            &copy; Copyright {{env('VERSION_RELYEAR')}}
            <a class='footer-link' href='//cydrobolt.com' target='_blank'>Chaoyi Zha</a> &amp;
            <a class='footer-link' href='//github.com/Cydrobolt/polr/graphs/contributors' target='_blank'>其它的 Polr 贡献者</a>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="/js/bootstrap.min.js"></script>
<script src='/js/angular.min.js'></script>
<script src='/js/base.js'></script>
<script src='/js/SetupCtrl.js'></script>
@endsection
