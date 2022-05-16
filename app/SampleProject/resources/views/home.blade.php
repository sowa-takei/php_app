<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>ホーム画面</title>
</head>
<body>
  <div class="container">
    <div class="mt-5">
      @if (session('login_success'))
         <div class="alert alert-success">
             {{ session('login_success') }}
         </div>
      @endif
      <h3>プロフィール</h3>
      <ul>
        <li>メールアドレス:{{ Auth::user()->email }}</li>
      </ul>
    </div>
  </div>
</body>
</html>