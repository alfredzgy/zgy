@extends('app')
@section('content')
<table align="center" cellspacing="0" cellpadding="10" style="background-color: #e4b9c0;width: 60%;">
    <tr>
        <td>用户名</td>
        <td><input type="text" name="username" value="<?php if(isset($article)) echo $article->title;?>"/></td>
    </tr>
    <tr>
        <td>密码</td>
        <td><input type="password" name="pwd" id=""/></td>
    </tr>
    <tr>
        <td>爱好</td>
        <td><input type="text" name="hobby" value="<?php if(isset($article)) echo $article->content;?>"/></td>
    </tr>
    <tr>
        <td>学历</td>
        <td>
            <select name="education" id="">
                <option value="0" <?php if(isset($article)){ if($article->pid==0) echo "selected='selected'";} ?>>高中</option>
                <option value="1" <?php if(isset($article)){ if($article->pid==1) echo "selected='selected'";} ?>>本科</option>
                <option value="2" <?php if(isset($article)){ if($article->pid==2) echo "selected='selected'";} ?>>硕士</option>
                <option value="3" <?php if(isset($article)){ if($article->pid==3) echo "selected='selected'";} ?>>博士</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>性别</td>
        <td><input type="radio" name="sex" id=""/>男
            <input type="radio" name="sex" id=""/>女
        </td>
    </tr>
    <tr>
        <td>音乐</td>
        <td>
            <input type="checkbox" name="lightmusic" id=""/>轻音乐
            <input type="checkbox" name="weightmusic" id=""/>重金属音乐
            <input type="checkbox" name="popmusic" id=""/>流行音乐
            <input type="checkbox" name="classicalmusic" id=""/>古典音乐
            <input type="checkbox" name="rockmusic" id=""/>摇滚音乐
        </td>
    </tr>
</table>
@stop;