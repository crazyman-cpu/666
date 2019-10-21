hkcms复制：
{hkcms:content action="category" catid="0"  order="listorder asc"}
    <ul>
        {volist name="data" id="vo"}
            <li>栏目标题：{$vo.catname}，地址：{$vo.url}</li>
        {/volist}
    </ul>
{/hkcms:content}

修改后：
{hkcms:content action="category" catid="0"  order="listorder asc"}
    <ul>
        {volist name="data" id="vo"}
        <a href='{$vo['url']}'>
            <li>栏目标题：{$vo.catname}</li>
            </a>
        {/volist}
    </ul>
{/hkcms:content}
基本参数
参数名称	是否必填	说明
@action	必填	调用方法，方法列表：lists(调用栏目信息列表)，hits(调用点击排行榜)，relation(调用相关文章)，category(栏目列表)
@page	选填	当前分页号，默认$page，当传入该参数表示启用分页，一个页面只允许有一个page，多个标签使用多个page会造成不可预知的问题。
@num	选填	每次返回数据量。
@catid	必填	栏 目id（必填），列表页，内容页可以使用 $catid 获取当前栏目。
