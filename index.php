<?php 
$myDB = mysqli_connect('localhost','root','','demologin');

if(!$myDB){
    echo"<h1>Failed BD</h1>";
}



if(isset($_POST['uname'])){
    $uname = $_POST['uname'];
    $pword = $_POST['psw'];

    $sql = "select * from tbllogin where username='". $uname . "'AND password='". $pword."'limit 1";

    $result = mysqli_query($myDB,$sql);

    if(mysqli_num_rows($result)==1){
        echo "You Have Successfully logged in";
        header("Location: second.html");
        exit();
    }
    else{
        echo "Sorry Your Username incorret";
        header("Location: http://mcu.edu.kh/");

        
    }

}


?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  rel="stylesheet" type="text/css" href="style.css" media="all">

</head>
<body>

<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="playstore.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="submit">Login</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
    </div>

    <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div> -->
  </form>
</div>

<script src="index.js"></script>

</body>
</html>
