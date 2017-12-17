<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signup Page</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sign.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="index.php">
        <h2 class="form-signin-heading">Account Info</h2>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" required />
		      <input type="text" class="form-control" placeholder="Enter Frist name" name="fname" required />
		      <input type="text" class="form-control" placeholder="Enter last name" name="lname" required />
		      <input type="text" class="form-control" placeholder="Enter Phone number" name="phone" required />
		      <input type="date" class="form-control" placeholder="Enter birthday" name="birthday" required />
		      <select class="form_control"name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
            <option value="other">other</option>
          </select>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" required />
          <input type="hidden" class="form-control" name="action" value="register">
		      <br />
          <button class="btn btn-lg btn-primary btn-block" type="submit" id="submitButton">Sign Up</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>




</form>

</div>

</body>
</html>