<!DOCTYPE html>
<html lang="en">
<head>
  <title>WSD Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 650px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 200px;
      background-color: #8080ff;
      height: 100%;
    }
    
    .col-sm-6{
      
      background: linear-gradient(to bottom right, #ccccff, #ffffff);
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 sidenav">
    <h1>WSD To-Do Tasks</h1>
      <p>Manage your tasks here.</p>
      <hr>
      <form action="index.php?page=accounts&action=login" method="POST">

    
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn btn-default">Login</button>
		</form>
    </div>
    
    <div class="col-sm-6 text-left"> 
    <h3>Register</h3>
    <form action="index.php?page=accounts&action=store" method="post"  id="form1">
    
    <div class = "form-group">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="" required>
    </div>
    
    <div class = "form-group">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value="" required>
    </div>
    
    <div class = "form-group">
    <label>Email-</label>
    <input type="email" class="form-control" name="email" value="" required>
    </div>
    
    <div class = "form-group">
    <label>Phone-</label>
    <input type="text" class="form-control" name="phone" value="">
    </div>
    
    <div class = "form-group">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value="">
    </div>
    <div class = "form-group">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value="">
    </div>
    <div class = "form-group">
    <label>Password-</label>
    <input type="password" class="form-control" name="password" value="" required>
    </div>
    
    <button type="submit" form="form1" class="btn btn-primary" value="Submit">Register</button>
    </form>
    </div>
      
 
    </div>
    
</div>

<footer class="container-fluid text-center">
  <p>Developed By Dhara Patel(dbp54)</p>
</footer>

</body>
</html>
