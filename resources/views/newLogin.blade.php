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
          <input type="text" placeholder="Username" name="name" required>
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
  <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))
            alert('{{ session('error') }}')
            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>