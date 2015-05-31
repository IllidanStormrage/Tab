@extends('_layouts.default')
@section('content')

    <button type="submit" class="btn btn-default">搜索</button>
<a href="{{ URL('admin/pages/create') }}" class="btn btn-lg btn-primary">新增</a>
@foreach ($pages as $page)
    <div class="page-header">
        <h2><a href="{{ URL('pages/'.$page->id) }}">{{ $page->title }}</a></h2>
    </div>
    <div class="panel">
        <div class="panel-body"><pre>{{ $page->body }}</pre></div>
        <div class="panel-footer">

            <span>这里还没有足迹</span>
            创建于：{{ $page->created_at }}		By {{ $page->slug }}
            <a href="{{ URL('admin/pages/'.$page->id.'/edit') }}" class="btn btn-success">编辑</a>

            <form action="{{ URL('admin/pages/'.$page->id) }}" method="POST" style="display: inline;">
                <input name="_method" type="hidden" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger">删除</button>
            </form>
        </div>
    </div>

@endforeach
<ul id="yw1" class="pagination"><li class=" "><a href="http://blog.toruneko.net/index">&lt;&lt;</a></li>
    <li class=" "><a href="http://blog.toruneko.net/index">&lt;</a></li>
    <li class=" active"><a href="http://blog.toruneko.net/index">1</a></li>
    <li class=""><a href="http://blog.toruneko.net/index?page=2">2</a></li>
    <li class=""><a href="http://blog.toruneko.net/index?page=3">3</a></li>
    <li class=""><a href="http://blog.toruneko.net/index?page=4">4</a></li>
    <li class=""><a href="http://blog.toruneko.net/index?page=2">&gt;</a></li>
    <li class=""><a href="http://blog.toruneko.net/index?page=4">&gt;&gt;</a></li></ul>
</div>
<div class="col-md-3 blog-container-sidebar ssawrl" id="sidebar" style="z-index: 9999">
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#archive"></span>
        <h6>日期归档</h6>
    </div>
    <div class="list-group" id="archive">
        <a href="http://blog.toruneko.net/date/201504" class="list-group-item">
            <span class="badge">2</span>
            2015年4月</a><a href="http://blog.toruneko.net/date/201502" class="list-group-item">
            <span class="badge">1</span>
            2015年2月</a><a href="http://blog.toruneko.net/date/201501" class="list-group-item">
            <span class="badge">3</span>
            2015年1月</a><a href="http://blog.toruneko.net/date/201412" class="list-group-item">
            <span class="badge">2</span>
            2014年12月</a><a href="http://blog.toruneko.net/date/201411" class="list-group-item">
            <span class="badge">7</span>
            2014年11月</a><a href="http://blog.toruneko.net/date/201410" class="list-group-item">
            <span class="badge">9</span>
            2014年10月</a><a href="http://blog.toruneko.net/date/201409" class="list-group-item">
            <span class="badge">3</span>
            2014年9月</a>    </div>
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#category"></span>
        <h6>分类标签</h6>
    </div>
    <div class="list-group" id="category">
        <a href="http://blog.toruneko.net/tag/php" class="list-group-item">
            <span class="badge">6</span>
            PHP</a><a href="http://blog.toruneko.net/tag/nginx" class="list-group-item">
            <span class="badge">1</span>
            Nginx</a><a href="http://blog.toruneko.net/tag/public" class="list-group-item">
            <span class="badge">4</span>
            公共</a><a href="http://blog.toruneko.net/tag/search" class="list-group-item">
            <span class="badge">4</span>
            搜索</a><a href="http://blog.toruneko.net/tag/java" class="list-group-item">
            <span class="badge">8</span>
            Java</a><a href="http://blog.toruneko.net/tag/arithmetic" class="list-group-item">
            <span class="badge">2</span>
            算法</a><a href="http://blog.toruneko.net/tag/csharp" class="list-group-item">
            <span class="badge">2</span>
            C#</a>    </div>
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#neighbor"></span>
        <h6>隔壁小屋</h6>
    </div>
    <div class="list-group" id="neighbor">
        <a href="http://www.cnblogs.com/kross/" target="_blank" class="list-group-item">
            Kross</a><a href="http://www.boolean93.com" target="_blank" class="list-group-item">
            Boolean93</a><a href="http://hongyan.cqupt.edu.cn/webdev/" target="_blank" class="list-group-item">
            红岩网校WEB研发部</a><a href="http://hongyan.cqupt.edu.cn/appdev/" target="_blank" class="list-group-item">
            红岩网校移动开发部</a><a href="http://www.king-liu.net/" target="_blank" class="list-group-item">
            king-liu</a><a href="http://www.zeroling.com/" target="_blank" class="list-group-item">
            ZeroLing</a><a href="http://blog.yliec.com/" target="_blank" class="list-group-item">
            yliec</a>    </div>
</div></div></div>
<div class="container-fluid text-center">
    &copy; 2014 - 2015		Toruneko. All rights reserved.
    Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>.        <a href="http://sae.sina.com.cn/">
        <img title="Sae App Engine" alt="Sae App Engine" width="117" height="12" src="http://sae.sina.com.cn/doc/_images/poweredby-117x12px.gif"/>
    </a>
</div>
@endsection


