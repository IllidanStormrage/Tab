@extends('app')
@section('content')
    <h4>
        <a href="{{ URL('/') }}">⬅️返回首页</a>
    </h4>

<div class="container-fluid blog-container"><div class="row">
        <div class="col-md-12 blog-container-breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="http://blog.toruneko.net/index/index">Home</a></li><li><a href="http://blog.toruneko.net/index">Blog</a></li><li><a href="http://blog.toruneko.net/tag/search">搜索</a></li><li class="active">{{ $page->title }}</li></ol>    </div>
        <div class="col-md-9 blog-container-content">
            <div class="page-header"><span><a href="#comment" class="btn btn-default">留下足迹</a></span><h2>{{ $page->title }}</h2></div>
            <div class="panel">
                <div class="panel-body">
                    <pre>{{ $page->slug }}</pre>
                    <pre>{{ $page->body }}</pre>
                    <p>本文地址：去问神奇海螺</a></p>
                </div>
                <div class="panel-footer">
            <span class="bdsharebuttonbox">
                <a href="#" class="bds_more" data-cmd="more"></a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            </span>
			<span>
				归档日期：
				<a href="http://blog.toruneko.net/date/201504">2015年4月</a>
			</span>
                    创建于：2015-04-19 By Toruneko            </div>
            </div>
            <ul class="pager">
                <li class="previous"><a href="{{ URL('/') }}">&larr; 上一篇</a></li>
                <li class="next"><a href="{{ URL('/') }}">下一篇 &rarr;</a></li>
            </ul>
            <div class="page-header"><h4>留下足迹</h4><a name="comment"></a></div>
            <ul class="list-group commentList" id="commentList">
                <span class="empty"></span>        </ul>
            <form class="form-horizontal" id="commentBox" action="http://blog.toruneko.net/40#comment" method="post">    <div class="form-group" id="commentReply">
                    <label class="col-md-2 control-label">回复</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" disabled="disabled">
                        <input value="0" name="ContactForm[fid]" id="ContactForm_fid" type="hidden" />        </div>
                    <div class="col-md-2">
                        <a class="btn btn-default cancel" href="##">取消</a>        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label required" for="ContactForm_username">昵称 <span class="required">*</span></label>        <div class="col-md-6">
                        <input class="form-control" name="ContactForm[username]" id="ContactForm_username" type="text" />        </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label required" for="ContactForm_email">邮箱 <span class="required">*</span></label>        <div class="col-md-6">
                        <input class="form-control" name="ContactForm[email]" id="ContactForm_email" type="text" />        </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label required" for="ContactForm_content">留言 <span class="required">*</span></label>        <div class="col-md-6">
                        <textarea class="form-control" style="height:150px" name="ContactForm[content]" id="ContactForm_content"></textarea>        </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="ContactForm_verifyCode">验证码</label>            <div class="col-md-2">
                        <img height="34px" width="116px" id="verifyCode" src="http://blog.toruneko.net/captcha?v=556af5c2484e0" alt="" />            </div>
                    <div class="col-md-2">
                        <input class="form-control" name="ContactForm[verifyCode]" id="ContactForm_verifyCode" type="text" />            </div>
                    <div class="col-md-offset-1 col-md-1">
                        <input class="btn btn-default" type="submit" name="yt0" value="提交" />        </div>
                    <div class="col-md-2"></div>
                </div>
            </form>    </div>
        <div class="col-md-3 blog-container-sidebar" id="sidebar">
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

