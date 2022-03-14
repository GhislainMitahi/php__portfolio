<?php
require_once '../login.php';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.login.css">
    <title>LOGIN</title>
</head>
<body>
<div class="container-fluid main">
    <div class="row h-100 w-100 justify-content-center align-items-center">
        <div class="border form bg-light rounded">
            <div class="col">
                <div class="mb-5">
                    <h3 class=" reboot rounded-pill text-center mt-5"><span class="border rounded-pill p-2">LOGIN</span></h3>
                </div>
                <div class="mt-5 ">
                <form action=" " class="reboot" method= "post">
            <div class="col mb-3 ">
    <label for="inputEmail3" class="col-sm-2 col-form-label">FullName</label>
    <div class="col-sm-10">
      <input type="text" name="fullname" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0" id="inputEmail3">
    </div>
  </div>
  <div class="col mb-4">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control field border border-left-0 border-top-0 border-right-0 border-dark bg-light rounded-0" id="inputPassword3">
    </div>
    <div class="float-right mt-3 "><span>forgot password ?</span></div>
  </div>
  <div class="text-center mt-5"><input class="bg-success text-light w-50 rounded-pill mt-4" type="submit" name="login" value="LOGIN"></div>
  </form>
     </div>
    </div>
   </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>