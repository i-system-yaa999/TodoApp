<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COACHTECH</title>
  <link rel="stylesheet" type="text/css" href="./css/reset.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
  <section class="todo__">
    <h2>Todo List</h2>
    <form action="/todo/create" method="get">
      <div class="addbox">
        <input type="text" name="content">
        <button type="submit" class="add">追加</button>
      </div>
    </form>
    @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      @foreach ($items as $item)
        <tr>
          <form action="" method="post">
          @csrf
            <td>{{$item->updated_at}}</td>
            <td><input type="text" name="content" value="{{$item->content}}"></td>
            <td><button type="submit" class="up" formaction="/todo/update?id={{$item->id}}">更新</button></td>
            <td><button type="submit" class="del" formaction="/todo/delete?id={{$item->id}}">削除</button></td>
          </form>
        </tr>
      @endforeach
    </table>
  </section>
</body>
</html>