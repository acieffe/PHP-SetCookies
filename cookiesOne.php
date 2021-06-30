<?php include('header.php');?>

<h1>User Input</h1>

<?php
  setcookie("username", $_GET["username"], time() + (86400*7));
  setcookie("age", $_GET["age"], time() + (86400*7));
  setcookie("gender", $_GET["gender"], time() + (86400*7));
?>

<div id="input">

  <form method="GET">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="number" name="age" placeholder="Age"><br>
    <input type="text" name="gender" placeholder="Gender">
    <div id="button"><input type="submit" value="Save to Cookie"></div>
  </form>

</div>

<?php include('footer.php');?>