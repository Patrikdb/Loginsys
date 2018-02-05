

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <header id="home">
    <nav>
      <div class="menu-icon">
        <i class="fa fa-s fa-2x"></i>
          </div>
        <div class="logo">
           ECOMMERCE
        </div>
        <div class="since">Since 1959</div>
        <div class="menu">
          <ul>
            <li><a href="#home">HOME</a></li>
              <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
              </div>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li >   </li>
          </ul>
        </div>

        <div class="userlog" >
          <a href="#"><i class="fas fa-shopping-cart"></i></a>
             <form action="logout.php">
               <a class="userlogitem" href="#">LOG OUT</a>
             </form>
             <a class="userlogitem" href="#" data-toggle="modal" data-target="#exampleModalLong">
                 <i class="fas fa-user"></i> Login/Signup
               </a>
           </div>
    </nav>
  </header><br><br><br><br><br><br><br><br><br><br><br><br>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <form class="" action="login.php" method="POST">
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <button type="submit" name="button">LOGIN</button>
          </form>

        </div>
        <div class="modal-footer text-center">
          <p>New customer?</p><br>
          <a href="signup.php"><h1>Register here!</h1></a>
        </div>
      </div>
    </div>
  </div>
