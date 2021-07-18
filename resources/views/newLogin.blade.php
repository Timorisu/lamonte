<html>
<head>
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
	<title>login</title>
</head>
<body class="align">

  <div class="grid">

    <form action="{{route('login')}}" method="post" class="form login">
    @csrf

      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="text" placeholder="Username" name="username" required>
        </div>

        <div class="form__field">
          <input type="password" placeholder="Password" name="password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Login">
      </footer>

    </form>

  </div>

</body>
</html>