<h3>您好， {{$username}}！</h3>

<p>感谢您注册 {{env('APP_NAME')}}。如果需要使用这个账户，您需要点击下方的链接来激活您的账户。</p>

<br />

<a href='{{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}/activate/{{$username}}/{{$recovery_key}}'>
    {{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}/activate/{{$username}}/{{$recovery_key}}
</a>

<br />

<p>祝您生活愉快！</p>
<p>{{env('APP_NAME')}} 团队。</p>

--
<br />
您收到这封邮件是因为有人（{{$ip}}）在我们的站点（{{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}）注册了一个新账号。
如果这不是您本人的操作，您可以忽略本邮件。