<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login to job</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/login.css">
</head>
<body>
	<div class="container">
		<div id="login">
  <div class="login-card">

    <div class="card-title">
      <h1>Please Sign In</h1>
    </div>
            @if(count($errors) > 0)
        <div class="column">
          <div class="column-is-12">
            <div class="alert alert-danger" role="alert">
              <strong>Errors:</strong>
              <ul style="padding-left: 16px;">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        @endif
    <div class="content">
      <form method="POST" action="{{route('login.post')}}">
      	@csrf
        <input id="email" type="email" name="email" title="email" placeholder="Email" required autofocus>
        <input id="password" type="password" name="password" title="password" placeholder="Password" required>
        <div class="level options">
          <div class="checkbox level-left">
            <input type="checkbox" id="checkbox" class="regular-checkbox">
            <label for="checkbox"></label>
            <span>Remember me</span>
          </div>
          <a class="btn btn-link level-right" href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</div>
	</div>
</body>
</html>