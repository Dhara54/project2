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
      padding-top: 20px;
      
      background: linear-gradient(to bottom right, #8080ff, #ffffff);
      height: 100%;
    }
    
    .col-sm-6{
      
      background: linear-gradient(to bottom right, #ccccff, #ffffff);
    }
    
    .glyphicon-user {
    height:30px;
    font-size: 18px;
    }
    
    .glyphicon-log-out {
    height:30px;
    font-size: 18px;
    }
    
    .btn-primary{
      position:relative;
      top:20px;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
     label{
      width:100px;
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
        <li><form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit"  class="btn btn-primary"><span class="glyphicon glyphicon-user"></span>Profile</button>
        </form></li>
        <li><form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"></span>&nbsp Logout</button>
        </form></li>
          
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 sidenav">
<h3>Profile Details</h3>
<form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>" method="post" class = "form-inline">
    
    <div class = "form-group">
    <label>First name-</label> 
    <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $data->lname; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group">
    <label>Email-</label>
    <input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group">
    <label>Phone-</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $data->phone; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value="<?php echo $data->birthday; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value="<?php echo $data->gender; ?>"readonly>
    </div><br><br>

    <input type="submit" class="btn btn-primary" value="Edit">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" class="btn btn-primary" form="form1" value="delete">Delete</button>
</form>

</div>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Developed By Dhara Patel(dbp54)</p>
</footer>
<script src="js/scripts.js"></script>
</body>
</html>