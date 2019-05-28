<h3>您好， {{$username}}！</h3>

<p>
    您可以使用这封邮件中的链接来重置您在 {{env('APP_NAME')}} 的账户密码。
</p>

<a href='{{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}/reset_password/{{$username}}/{{$recovery_key}}'>
    {{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}}/reset_password/{{$username}}/{{$recovery_key}}
</a>

<br />

<p>祝您生活愉快！</p>
<p>{{env('APP_NAME')}} 团队。</p>

--
<br />
您收到这封邮件是因为有人（{{$ip}}）请求重置您在 {{env('APP_PROTOCOL')}}{{env('APP_ADDRESS')}} 上的账户密码。
如果这不是您本人的操作，您可以忽略此邮件。
