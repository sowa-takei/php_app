<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインフォーム</title>
  <!-- scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>
<body>
<form class="form-signin" method="POST" action="{{ route('Login') }}">@csrf
  <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $errors)
            <li>{{ $errors}}</li>
        @endforeach

        @if (session('login_error'))
         <div class="alert alert-danger">
             {{ session('login_error') }}
         </div>
      @endif
      </ul>
    </div>
  @endif
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password"class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
</form>
</body>
</html>