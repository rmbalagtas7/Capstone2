<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>DepEd Online : Login </title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="navbar-header">
    <span class = "content" style = "font-size:20px">  
    <img src = "images/icon.png" width="55" height="55"> Department Of Education
    </span>
      
</div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="createaccount.php" style="color:white"><span class="glyphicon glyphicon-user" style="color:white" ></span> Create Account</a></li>
      <li><a href="help.php" style="color:white"><span class="glyphicon glyphicon-question-sign" style="color:white"></span> Help</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class = "row">
  <div class = "col-md-7 col-lg-8 hidden-xs hidden-sm">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="admin_area/slides_images/ann1.jpg" alt="Announcement1" style="width:100%;">
      </div>

      <div class="item">
        <img src="admin_area/slides_images/ann2.jpg" alt="Announcement2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="admin_area/slides_images/ann3.jpg" alt="Announcement3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>

    </div>


    <div class = "col-xs-12 col-sm-12 col-md-5 col-lg-4">
      <div class = "well no-padding">
      <form action="/action_page.php">
 <fieldset>
  <legend>Sign In</legend>
  <section>
      <label for="fname">Username or E-mail:</label>
  </section>
  <input type="text" id="fname" name="fname" required>
  <section>
      <label for="lname">Password:</label>
  </section>
  <input type="password" id="lname" name="lname" required> 
  <button type="submit" href="student.php">Login</button>

  <a href="#">Forgot Password? </a>
 </fieldset>
</form>
</div>
    </div>
 <!-- row end -->
  </div>
</div>

  
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>