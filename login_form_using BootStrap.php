<!HTML>
<html>
<head>
    <title>KaMalKaKa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://bootswatch.com/yeti/bootstrap.min.css" rel="stylesheet">
    <link href="homepage_css.css" rel="stylesheet">
    <script>
    var pass=document.getElementByid("inputPassword");
    var pass_repeat=document.getElementById("inputPasswordReapeat");
    if(pass!=pass_repeat)
    {
    alert"The password doesnot matchs please check the password";
    return false;
    }
    </script>
</head>
<body>

<div class="col-sm-3"></div>

<div class="col-sm-6">
   <br><br>
    <form class="form-horizontal" method="POST" action="login.php" style="padding:5px 5px 5px 5px;background:lightgrey;">
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">

                <div class="col-sm-12">
                    <input type="text" class="form-control input-sm" id="inputEmail" name="email_id" placeholder="Email orUsername">
                </div>
            </div>
            <div class="form-group">

                <div class="col-sm-12">
                    <input type="password" class="form-control input-sm" id="inputPassword" name="password" placeholder="Password">
            </div>
                </div>
            <div class="form-group">
                <div class="col-sm-10">

                    <button type="submit" class="btn btn-group-sm btn-success">Login</button>
                </div>
            </div>
        </fieldset>
    </form>

<hr>
    <form class="form-horizontal" method="POST" action="signup.php" style="padding:5px 5px 5px 5px;background:lightblue;">
        <fieldset>
            <legend style="color:white;">Not a member yet! Sign Up</legend>
            <div class="form-group">

                <div class="col-sm-12">
                    <input type="text" class="form-control input-sm" id="inputEmail" name="eamil_id" placeholder="Email">
                </div>
            </div>
            <div class="form-group">

                <div class="col-sm-12">
                    <input type="text" class="form-control input-sm" id="username" name="username" placeholder="Username">
                </div>
            </div>
            <div class="form-group">

                <div class="col-sm-12">
                    <input type="password" class="form-control input-sm" id="inputPassword" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">

                <div class="col-sm-12">
                    <input type="password" class="form-control input-sm" id="inputPasswordRepeat" name="repeat_password" placeholder="confirm Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">

                    <button type="submit" class="btn btn-default btn-warning pull-right" onclick="check_pass()">Sign Up</button>
                </div>
            </div>
        </fieldset>
    </form>


</div>
<div class="col-sm-3">
</div>

<script type="text/javascript" src="jquery.min.js" ></script>
<script type="text/javascript" src="bootstrap.min.js" ></script>


</body>

</html>
<?php
/**
 * Created by PhpStorm.
 * User: ameya

 * Time: 2:12 PM
 */

?>
