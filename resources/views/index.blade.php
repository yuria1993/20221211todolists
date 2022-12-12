<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo list</title>
</head>

<body>
@extends('layouts.default')
<style>
  th{
    background-color: #1760a0;
    color: white;
    padding: 5px 40px;
  }

  tr:nth-child(odd)td{
    background-color: #FFFFFF;
  }

  td{
    padding:25px 40px;
    background-color: #EEEEEE;
    text-align:center;
  }
</style>

@section('title','Todo list')

@section('content')
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
 </tr>

 @foreach($contents as $content)

<tr>
  <td>{{$item->id}}</td>
  <td>{{$item->timestamp}}</td>
  <td>{{$item->timestamp}}</td>
  <td>{{$item->content}}</td>
</tr>

@endforeach
</table>
@endsection





</body>

</html>