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
<h3>Enter task details</h3>

<form action="index.php?page=tasks&action=store&id=" method="post" id="form1" class = "form-inline">

<div class = "form-group">
<label>Owner Email-</label>
<input type="text" class="form-control" name="owneremail" value="">
</div><br><br>

<div class = "form-group">
<label>Owner ID-</label>
<input type="text" class="form-control" name="ownerid" value="<?php session_start(); echo $_SESSION["userID"]; ?>" readonly><br>
</div><br><br>

<div class = "form-group">
<label>Created Date-</label>
<input type="text" class="form-control" name="createddate" value=""><br>
</div><br><br>

<div class = "form-group">
<label>Due Date-</label>
<input type="text" class="form-control" name="duedate" value=""><br>
</div><br><br>

<div class = "form-group">
<label>Message-</label>
<input type="text" class="form-control" name="message" value=""><br>
</div><br><br>

<div class = "form-group">
<label>Is Done-</label>
<input type="text" class="form-control" name="isdone" value=""><br>
</div><br><br>

<button type="submit" class="btn btn-primary" form="form1" value="create">Create</button>
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