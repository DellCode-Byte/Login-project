<!DOCTYPE html>
<html>

<head>
  <title>Form Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>


<body class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <h4 class="mb-3">Form Validation in PHP
      </h4>
      <form id="form" method="post" action="toAdd.php">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="text" class="form-control" name="contact" id="contact">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="contact">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
        </div>
        <div class ="g-recaptcha" data-sitekey ="6LegtY4bAAAAAIf6mPEvl27OWqluRvn049M3okf-"></div>
        <input name = "submit" type="submit" class="btn btn-primary" value="Submit" />
        <h4 style="margin: 10px auto; text-align:center; font-size: 20px; margin-bottom:10px;">Already have an Account?<a href = "login.php"> Login </a></h4>
        
      </form>
    </div>
  </div>
</body>
<style>
  .error {
    color: red;
  }
</style>
<script src="jquery.js"></script>

</html>