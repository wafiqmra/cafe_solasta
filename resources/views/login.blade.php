<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <!-- Image -->
                <img src="images/white.png" alt="">
                <div class="text">
                    <p>Join the community of developers <i>- ludiflex</i></p>
                </div>
            </div>

            <div class="col-md-6 right">
                <div class="input-box">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <header>Login</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" name="email" required="" autocomplete="off">
                            <label for="email">Email</label> 
                        </div> 
                        <div class="input-field">
                            <input type="password" class="input" id="pass" name="password" required="">
                            <label for="pass">Password</label>
                        </div> 
                        <div class="input-field">
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </div> 
                    </form>
                    <div class="signin">
                    <span>Don't have an account? <a href="{{ route('register') }}">Register here</a></span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
  </div>
</body>
</html>
