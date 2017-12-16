<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<style>
html body {
    background: linear-gradient(to bottom right, #7575a3, #ffffff);
    text-align:center;
}
label {
width:100px;
}

.container {
text-align:left;
position: absolute; top: 150; right: 180;
}

.reg {
text-align:right;
position: absolute; top: 200; right: 180;

}
</style>

<body>


<!--<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>-->
<!--<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>-->

<h3><?php echo $data['site_name'];?></h3>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="btn btn-default">Login</button>
    </div>


</form>


<form action="index.php?page=accounts&action=store" method="post"  id="form1">
    
    <div class="reg">
    
    <div class = "form-group">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="">
    <br></div>
    
    <div class = "form-group">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value="">
    <br></div>
    
    <div class = "form-group">
    <label>Email-</label>
    <input type="text" class="form-control" name="email" value="">
    <br></div>
    
    <div class = "form-group">
    <label>Phone-</label>
    <input type="text" class="form-control" name="phone" value="">
    <br></div>
    
    <div class = "form-group">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value="">
    <br></div>
    <div class = "form-group">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value="">
    <br></div>
    <div class = "form-group">
    <label>Password-</label>
    <input type="password" class="form-control" name="password" value="">
    <br></div>
    
    <button type="submit" form="form1" class="btn btn-default" value="Submit">Register</button>
    </div>
    
</form>


<script src="js/scripts.js"></script>
</body>
</html>