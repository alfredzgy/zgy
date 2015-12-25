<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>个人资料</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" type='text/css' media='all'/>
</head>
<body>
<div>
    <center>
        <a href="">首页</a>
        <a href="<?php echo __APP__;?>/index">文章</a>
        <a href="">动漫</a>
        <a href="">科技</a>
        <a href="{{url('/tiyu')}}">体育</a>
        <a href="">社会</a>
        <a href="">娱乐</a>
        <a href="">军事</a>
        <a href="">星座</a>
        <a href="<?php echo __APP__;?>/addArticle">文章添加</a>
    </center>
</div>
<div>
    @yield('content')
</div>

</body>
</html>