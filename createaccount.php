<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>DepEd Online : Register</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
h1{
    font-size: 25px;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}


.col_half {
        width: 100%;
        float: left;
}
.well{
  background: #fbfbfb;
  border: 1px solid #ddd;
  box-shadow: 0 1px 1px #ececec;
  -webkit-box-shadow: 0 1px 1px #ececec;
  position: relative;
  height: 570px;
  width: 500px;
}
button {
  background-color: #0d97e0;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-left: 120px;
}
button:hover {
  opacity: 0.8;
}
input[type=date]{
   width: 100%;
  padding: 10px;
  outline: none;
}

</style>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="navbar-header">
    <span class = "content" style = "font-size:20px">  
    <img src = "images/icon.png" width="50" height="50"> Department Of Education
    </span>
      
</div>
    <ul class="nav navbar-nav navbar-right">
        <li><a  style="color:white"><span style="color:white"></span> Already have an account?</a></li>
      <li><a href="index.php" style="color:white"><span class="glyphicon glyphicon-log-in" style="color:white"></span> Sign In</a></li>

    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class = "col-md-7 col-lg-8 hidden-xs hidden-sm">
            <img src="images/pic.png">
        </div>

        <div class = "col-xs-12 col-sm-12 col-md-5 col-lg-4">
            <div class = "well no-padding">
<form action="/action_page.php" style="max-width:500px;margin:auto">
<fieldset>
<legend>Sign Up</legend>
    <table>
        <tr>
            <td>
                <div class="input-container">
                    <div class="col_half">
                    <input class="input-field" type="text" placeholder="First Name" name="fname" id="fname">
                </div >
                </div>
            </td>
            <td>
                <div class="input-container" style="margin-left:30px">
                    <input class="input-field" type="text" placeholder="Last Name" name="lname" id="lname">
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="input-container">
                    <input class="input-field" type="text" placeholder="Mobile Number" name="mnumber" id="mnumber">
                </div>
            </td>
            <td>
                <div class="input-container" style="margin-left:30px">
                    <input class="input-field" type="text" placeholder="Student LRN" name="studentlrn" id="studentlrn">
                </div>
            </td>
        </tr>
        <tr>
            <td>
            <div class="input_field radio_option">
              <input type="radio" name="radiogroup1" id="rd1">
              <label for="rd1">Male</label>
              <input type="radio" name="radiogroup1" id="rd2">
              <label for="rd2">Female</label>
              </div>
            </td>
        </tr>
        <tr>
            <td><h1>Birthday</h1></td>
        </tr>
       
    </table>

    <div class="input_field combo_box">
          <input type="date" id="birthday" name="birthday">
    </div>
     <div class="input-container " style="margin-top: 10px;">
        <input class="input-field" type="text" placeholder="Email" name="email" id="email">
    </div>
    
    <div class="input-container">
        <input class="input-field" type="password" placeholder="Password" name="password" id="password">
    </div>

     <div class="input-container">
        <input class="input-field" type="password" placeholder="Confirm Password" name="repassword" id="repassword">
    </div>
    <button type="submit">Sign Up</button>

</form>
                
 </fieldset>

            </div>
        </div>
    </div>
</div>
  
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>