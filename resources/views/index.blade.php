<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo list</title>
</head>

<body>
  <h1>Todo List</h1>

<form action="/create" method="POST">
    @csrf
  <input type="text" name="content">
  <input type="submit" value="追加">
</form>

  <h2>作成日</h2>
<form action="/update" method="POST">
  @csrf
 <input type="date" name="data">




  <h2>タスク名</h2>
  <form action="/" method="GET">
    @csrf
  <input type="text">




  <h2>更新</h2>
  <form action="/update" method="POST">
    @csrf
  <input type="submit" value="更新">

  <h2>削除</h2>
  <form action="/delate" method="POST">
  <input type="submit" value="削除">



</body>

</html>