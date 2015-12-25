@extends('app')
@section('content')
<form action="{{url('/article/add')}}" method="post" enctype="multipart/form-data">
    <table align="center" cellspacing="0" cellpadding="10" style="background-color: #e4b9c0;width:60%;">
        <tr>
            <td>标题</td>
            <td><input type="text" name="title"/></td>
        </tr>
        <tr>
            <td>内容</td>
            <td><textarea name="content" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>类型</td>
            <td><select name="pid" id="">
                    <option value="0">科技</option>
                    <option value="1">新闻</option>
                    <option value="2">社会</option>
                    <option value="3">娱乐</option>
                </select></td>
        </tr>
        <tr>
            <td>发布时间</td>
            <td><input type="date" name="publish_at" id="" value="{{date('Y-m-d')}}"/></td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <input type="submit" value="添加"/>
                <input type="reset" value="重置"/>
            </td>
        </tr>
    </table>
</form>
@stop