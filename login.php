<?php
SESSION_START();
$acc_username = "ian1";
$acc_password = "ian";
$acc_fullname = "Juan Dela Cruz";
$acc_address = "Marinduque PH";

$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];




if(isset($_REQUEST['login_button']) === true){


    if($_REQUEST['form_username'] != $acc_username){
            header("Location: ".$url_add."?notexist");

}
    else if ($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] != $acc_password) {
            header("Location: ".$url_add. "?wrongpass");
    }

    else if ($_REQUEST['form_username']==$acc_username &&$_REQUEST['form_password'] == $acc_password){
            header("Location: ".$url_add."?success");

            $_SESSION['ses_username'] = $acc_username;
            $_SESSION['ses_password'] = $acc_password;
            $_SESSION['ses_fullname'] = $acc_fullname;
            $_SESSION['ses_address'] = $acc_address;

    }

}?>

<html>
    <head>
<title>UNBLURRED</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
    
    background: linear-gradient(to bottom, #64CEEB,#1269C7);
    min-height:100vh;
    overflow-x: hidden
}</style>
</head>

<body>
<div class="container login-container">
            <div class="row">
                
                <div class="login-form-2">
                <span class="logo">
                <img src="images/logo3.png" alt="" >
                </span>
                    <h3>Unblurred</h3>
                    <h5>Login</h5>
                    <form method="POST">
                        <div class="form-group">
                        <?php  
						 if(isset($_REQUEST["notexist"]) === true) {
							echo "<div class='alert alert-danger' role = 'alert'>
							Username does not exist...</div>";}
							else if(isset($_REQUEST["wrongpass"]) === true) {
								echo "<div class='alert alert-warning' role = 'alert'>
								Wrong Password...</div>";}
							else if(isset($_REQUEST["success"]) === true) {
									echo "<div class='alert alert-success' role = 'alert'>
									Redirecting...</div>";
									header("Refresh: 3; url=index.php"); }
							else if(isset($_REQUEST["signout"]) === true) {
									echo "<div class='alert alert-info' role = 'alert'>Thank you!</div>"; 	}
							else if(isset($_REQUEST['logfirst'])=== true){
								echo "<div class='alert alert-warning' role = 'alert'>Please login first</div>"; 	}
							else if(isset($_SESSION['ses_username']) === true){
									echo  "<div class='alert alert-warning' role = 'alert'>
									You are still log in please <a href=index.php><u>click here</u></a> to login</div>"; 
								   }
							?>
                            <input type="text" class="form-control" placeholder="Your Email *" name=form_username value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="form_password" value="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btnSubmit" name="login_button" value="">LogIn</button>
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
                                </body>
</html>