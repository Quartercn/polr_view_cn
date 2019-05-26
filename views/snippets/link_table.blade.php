<table id="{{$table_id}}" class="table table-hover">
    <thead>
        <tr>
            <th>链接后缀</th>
            <th>长链接</th>
            <th>点击量</th>
            <th>日期</th>
            @if ($table_id == "admin_links_table")
            {{-- 只在管理员下显示的列 --}}
            <th>创建者</th>
            <th>是否禁用</th>
            <th>是否删除</th>
            @endif
        </tr>
    </thead>
</table>
