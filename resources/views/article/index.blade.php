@extends('app')
@section('content')
    <div style="clear: both;overflow: hidden;">
    <div style="float: left;"><h1>文章列表</h1></div>
        <div style="float: right;"><a href="{{url('/article/addshow')}}">添加文章</a></div>
    </div>
<hr/>
        @foreach($article as $v)
            <h2><a href="{{url('/article',$v->id)}}">{{$v->title}}</a></h2>
            <article>
                <div class="body">
                    {{$v->content}}
                </div>
            </article>

        @endforeach
@stop