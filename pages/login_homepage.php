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
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    .row.content {height: 650px}
    
    .sidenav {
      padding-top: 200px;
      
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
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    
    
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


  <span class="glyphicon glyphicon-th-list"><h1><a href="index.php?page=tasks&action=all">View Your Tasks</a></span></h1>
 
    </div>
    
</div>

<footer class="container-fluid text-center">
  <p>Developed By Dhara Patel(dbp54)</p>
</footer>


<script src="js/scripts.js"></script>
</body>