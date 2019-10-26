<!doctype html>
<html lang="en">
  <head>
    

    <title>Signin for the faculty</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="stex.php">
      <img class="mb-4" src="download.png" alt="" width="80" height="80">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary" type="submit" style="width:140px"><a href="stex.php" style="color:white;">Sign in</a></button>
      
        <button class="btn btn-lg btn-primary" type="submit" style="width:140px"><a href="facultyregistration.php" style="color:white;">Sign up</a></button>
      <p class="mt-5 mb-3 text-muted"></p>
    </form>
  </body>
</html>
