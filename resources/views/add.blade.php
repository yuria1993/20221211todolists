@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'Todo list')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form action="/create" method="post">
  <table>
  @csrf
    <tr>
      <th>タスク名</th>
      <td><input type="text" name="追加"></td>
    </tr>
    <tr>
      <th>作成日</th>
      <td><input type="text"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>更新</button></td>
    </tr>
    <tr>
      <th></th>
      <td><button>削除</button></td>
    </tr>
  </table>
</form>
@endsection