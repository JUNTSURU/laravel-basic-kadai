<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devide-width,initial-scale=1.0">
    <title>laravel課題</title>
  </head>
  <body>
    <h1>投稿内容</h1>

    @if($errors->any())
    <div>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form method="post">
      @csrf
      <table>
        <tr>
          <th>タイトル</th>
          <td>
            <input type="text" name="title">
          </td>
        </tr>
        <tr>
          <th>本文</th>
          <td>
            <textarea name="content" cols="30" rows="10"></textarea>
          </td>
        </tr>
      </table>
      <input type="submit" value="送信">
</body>


</html>