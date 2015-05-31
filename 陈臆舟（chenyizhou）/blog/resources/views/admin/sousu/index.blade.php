
<?
    $kw = $_POST['kw'] ;
        $res = DB::select('select * from `pages` WHERE title like ?$' ,[$kw]) ;
        @foreach($res as $v)
            <div class="page-header">
                <h2><a href="{{ URL('pages/'.$page->id) }}">{{ $page->title }}</a></h2>
            </div>
            <div class="panel">
                <div class="panel-body"><pre>{{ $page->body }}</pre></div>
                <div class="panel-footer">

                    <span>这里还没有足迹</span>
                    创建于：{{ $page->created_at }}		By {{ $page->slug }}
                </div>
            </div>
          @endforeach
?>