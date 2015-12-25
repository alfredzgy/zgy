@extends('app')
@section('content')
        <h2>{{$article->title}}</h2>
           <a href="{{url('/article/edit',$article->id)}}">编辑</a>
<hr/>
        <article>
            {{$article->content}}
        </article>
@stop