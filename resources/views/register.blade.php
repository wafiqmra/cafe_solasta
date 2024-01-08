<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <!-- Image -->
                <img src="images/white.png" alt="">
                <div class="text">
                    <p>Join  <i>- CAFE</i></p>
                </div>
            </div>

            <div class="col-md-6 right">
                <div class="input-box">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <header>Create account</header>
                        <div class="input-field">
                            <input type="text" class="input" id="name" name="name" required="" autocomplete="off">
                            <label for="name">Name</label> 
                        </div> 
                        <div class="input-field">
                            <input type="email" class="input" id="email" name="email" required="" autocomplete="off">
                            <label for="email">Email</label> 
                        </div> 
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password" required="">
                            <label for="password">Password</label>
                        </div> 
                        <div class="input-field">
                            <input type="submit" class="submit" value="Sign Up">
                        </div> 
                        <div class="signin">
                        <span>Already have an account? <a href="{{ route('login') }}">Log in here</a></span>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
  </div>
</body>
</html>
