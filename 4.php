hkcms使用手册复制：
{hkcms:get table="hkcms_article" status="99" order="inputtime DESC" page="$page" num="5"}
循环列表，默认返回数据是$data
    <ul>
        {volist name="data" id="vo"}
            <li>标题：{$vo.title}，地址：{$vo.url}</li>
        {/volist}
    </ul>
    分页：{$pages}
{/hkcms:get}

自己看修改，以下为修改后代码：
{hkcms:get table="hkcms_article" status="99" order="inputtime DESC" page="$page" num="10"}
    <ul>
        {volist name="data" id="vo"}
        <a href='{$vo['url']}'>
            <li>标题：{$vo.title}</li>
        </a>
        {/volist}
    </ul>
    分页：{$pages}
{/hkcms:get}
