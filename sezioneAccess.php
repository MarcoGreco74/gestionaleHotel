<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
///////////////
//include_once 'connPDO.php';
require('sezioneConnection.php');
require('sezioneLogin.php');
//require('sezioneRegister.php');
?>
<!doctype html>
<html>
<head>
<title>Access</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<link href="../bootstrap/bootstrap-grid.css" rel="stylesheet"></link>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet"></link>
<link href="../bootstrap/bootstrap.css" rel="stylesheet"></link>
<script src="bootstrap.js"></script>
<style>
	.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
</style>
</head>
<body class="text-center">  
<main class="form-signin w-50 m-auto">
  <form method='POST'>
    <img class="mb-4" src="/img/adhHotel2.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name='myUser' placeholder="insert your user">
      <label for="floatingInput">User</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name ='myPassword' placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name ='remember' value="remember-me"> Remember me
      </label>
    </div>
    <input type="submit" class="w-100 btn btn-lg btn-primary" name="login" value="LOGIN" >
	<div class="text-center">
    <p>Not a member? <a href="sezioneRegister.php" name='register' >Register</a></p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>  
  </body>
</html>

