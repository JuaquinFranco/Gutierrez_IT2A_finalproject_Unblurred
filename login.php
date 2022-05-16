<?php
SESSION_START();
$acc_username = "JuaquinFranco";
$acc_password = "juaquin12345";
$acc_fullname = "Juaquin Franco Gutierrez";
$acc_address = "Marinduque PH";

$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];




if(isset($_REQUEST['login_button']) === true){


    if($_REQUEST['form_username'] !=$acc_username){
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
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                
                <div class="col-md-6 login-form-2">
                    <h3>Login for Form 2</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</html>