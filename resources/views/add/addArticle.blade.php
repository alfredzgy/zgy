@extends('app')
@section('content')
      {!! Form::open(); !!}
    <table align="center" cellspacing="0" cellpadding="10" style="background-color: #e4b9c0;width:60%;">
        <tr class="form-group">
         <td>  {!! Form::label('标题') !!}</td>
         <td>  {!! Form::text('title',null,['class'=>'form-control']) !!}</td>
        </tr>
        <tr class="form-group">
            <td> {!! Form::label('内容') !!}</td>
            <td>{!! Form::textarea('content',null,['class'=>'form-control']) !!}</td>
        </tr>
        <tr class="form-group">
            <td>{!! Form::label('类型') !!}</td>
            <td>{!! Form::select('pid',[0=>'科技',1=>'新闻',2=>'社会',3=>'娱乐'],['class'=>'form-control']) !!}</td>
<!--            <td><select name="pid" id="">-->
<!--                    <option value="0">科技</option>-->
<!--                    <option value="1">新闻</option>-->
<!--                    <option value="2">社会</option>-->
<!--                    <option value="3">娱乐</option>-->
<!--                </select></td>-->
        </tr>
        <tr class="form-group">
            <td>{!! Form::label('发布时间') !!}</td>
            <td>{!! Form::input('date','publish_at',date('Y-m-d'),['class'=>'form-control']) !!}</td>
        </tr>
        <tr align="center" class="form-group">
            <td colspan="2">
                {!! Form::submit('添加',['class'=>'btn btn-success form-control']) !!}
                {!! Form::reset('重置',['class'=>'btn btn-success form-control']) !!}
            </td>
        </tr>
    </table>
{!! Form::close(); !!}
@stop