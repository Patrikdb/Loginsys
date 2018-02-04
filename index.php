<?php

session_start();

include 'header.php';
 ?>

 <!-- LOGIN -->



<?php /*
  if (isset($_SESSION['user_id'])) {
    echo $_SESSION['user_id'];
  } else{
    echo "u aint logd in";
  }*/
 ?>
<!-- SIGN UP -->

<a href="signup.php">SIGN UP</a>
<!-- LOG OUT -->
<form action="logout.php">
  <button>LOG OUT</button>
</form>


<?php
include 'footer.php';
 ?>
