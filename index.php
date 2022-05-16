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


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <a href="index.php" title="Home Page"><img class='glow' src="images/logo.png" alt="" ></a>
                </span>

                <div class="text logo-text">
                    <span class="name">Unblurred</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="profile.php">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="notification.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="messages.php">
                            <i class='bx bx-message icon' ></i>
                            <span class="text nav-text">Messages</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Light mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Home</div>

    <div class="feed">
        <h1>Feed</h1>
        <div class="feed-text">
            <h2>Latest</h2>
            <span>Popular</span>
        </div>
    </div>

    <div class="main-posts">

        <div class="post-box">
            <a href="friendJohn.php"><img src="images/post1.jpg" alt=""></a>

            <div class="post-info">
                <div class="post-profile">
                    <div class="post-img">
                        <img src="images/profile1.jpg" alt="">
                    </div>
                    <h3>John</h3>
                </div>
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>10.5k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>97</span>
            </div>
            </div>
        </div>

        <div class="post-box">
            <a href="friendMaria.php"><img src="images/post2.jpg" alt=""></a>

            <div class="post-info">
                <div class="post-profile">
                    <div class="post-img">
                        <img src="images/profile2.jpg" alt="">
                    </div>
                    <h3>Maria</h3>
                </div>
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>9.2k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>88</span>
            </div>
            </div>
        </div>

        <div class="post-box">
            <img src="images/post3.jpg" alt="">

            <div class="post-info">
                <div class="post-profile">
                    <div class="post-img">
                        <img src="images/profile3.jpg" alt="">
                    </div>
                    <h3>Stephen</h3>
                </div>
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>4.2k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>25</span>
            </div>
            </div>
        </div>
        
        <div class="post-box">
            <img src="images/post4.jpg" alt="">

            <div class="post-info">
                <div class="post-profile">
                    <div class="post-img">
                        <img src="images/profile4.jpg" alt="">
                    </div>
                    <h3>Michael</h3>
                </div>
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>14k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>104</span>
            </div>
            </div>
        </div>

                <div class="post-box">
            <img src="images/post5.jpg" alt="">

            <div class="post-info">
                <div class="post-profile">
                    <div class="post-img">
                        <img src="images/profile5.jpg" alt="">
                    </div>
                    <h3>Jackson</h3>
                </div>
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>8k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>35</span>
            </div>
            </div>
        </div>

                <div class="post-box">
            <img src="images/post6.jpg" alt="">

            <div class="post-info">
                <div class="post-profile">
                    <div class="post-img">
                        <img src="images/profile6.jpg" alt="">
                    </div>
                    <h3>Summer</h3>
                </div>
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>15.4k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>122</span>
            </div>
            </div>
        </div>



    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Dark mode";
    }else{
        modeText.innerText = "Light mode";
        
    }
});
    </script>

</body>
</html>
