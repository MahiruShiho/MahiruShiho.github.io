<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include_once 'controllers/c_login.php';

if ($_SESSION['role'] == "admin") {
  header("location:views/pengguna/home.php");
} else if ($_SESSION['role'] == "kasir" ){
  header("location:views/pengguna/home.php");
} else if ($_SESSION['role'] == "owner" ){
header("location:views/pengguna/home.php");
} else {
  echo '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
  margin: 0;
  padding: 0;
  background-size: cover;
  font-family: sans-serif;
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25rem;
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 0.625rem;
}

.box h2 {
  margin: 0 0 1.875rem;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #fff;
  outline: none;
  background: transparent;
}

video{
	position: absolute;
	top:0;
	left:0;
	width: 100%;
	height: 100%;
	overflow: hidden;
	object-fit: cover;
	z-index: -2;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: #03a9f4;
  font-size: 0.75rem;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color: #03a9f4;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
}

.box input[type="submit"]:hover {
  background-color: #1cb1f5;
}

.tol input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color: #03a9f4;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
}

.tol input[type="submit"]:hover {
  background-color: #1cb1f5;
}

#broken{
 transform:scale(0.75) translatex(-55px) translatey(-23px);
}


body::after {
	content: "";
	width: 100%;
	height: 100vh;
	background: black;
	opacity: 0.7;
	position: absolute;
	top: 0;
	left: 0;
	z-index: -1;
}

    </style>
</head>
<body>
<div class="box">
    <center>
    <img class="mb-4" src="assets/images/kawaii.png" width= "100px" height="100px" style="margin-bottom: 20px;">
    </center>
    <img id="broken" src="assets/images/broken.png" alt="">
  <!-- <h2>Broken Laundry</h2> -->
  <form action="" method="post">
    <div class="inputBox">
      <input type="text" name="username">
      <label>Username</label>
    </div>
    <div class="inputBox">
      <input type="password" name="password">
      <label>Password</label>
    </div>
    <center>
    <input style="" type="submit" name="login" value="Login">
    </center>
  </form>
  <br>
  <center>
  <input onclick="toggleMute();" type="submit" value="♫">
  </center>
</div>
<div class="tol">

</div>
<video id="myVideo" autoplay control muted loop>
<source src="assets/video/Dejavu.mp4" type="video/mp4">
 </video>

 <script>
function toggleMute() {

var video=document.getElementById("myVideo")

if(video.muted){
	video.muted = false;
} else {
	video.muted = true;
}

}
 </script>
</body>
</html>