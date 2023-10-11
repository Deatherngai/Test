<?php
session_start();
include('includes/header.php')
?>
<link href="static/css/sigin.css" rel="stylesheet">
<link href="static/css/bootstrap.min.css" rel="stylesheet">
<main class="form-signin w-100 m-auto">
  <form action="login_action.php" method="POST">
    <img class="mb-4" src="statice/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="account" name="account">
      <label for="floatingInput">Account ID</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>