
<?php
SESSION_START();


if(isset($_SESSION["ses_username"]) === false){

    header("Location: login.php?logfirst");
   }else if(isset($_REQUEST["signout"])===true){
       session_destroy();
       header("Location: login.php?signout");}
?>

<!DOCTYPE html>
<html lang="en">
<title>Notification</title>
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
                    <a href="?signout">
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
        <div class="text">Notifications</div>

<div class="notif-container">
    <div class="notification-ui_dd-content">

      <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile1.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>John</b> reacted to your post</p>
            <p class="text-muted"><small>10 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost1.jpg" alt="Feature image"> </div>
      </div>

 <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile1.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>John</b> reacted to your post</p>
            <p class="text-muted"><small>10 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost2.jpg" alt="Feature image"> </div>
      </div>

       <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile1.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>John</b> reacted to your post</p>
            <p class="text-muted"><small>10 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost3.jpg" alt="Feature image"> </div>
      </div>

       <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile2.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>Maria</b> reacted to your post</p>
            <p class="text-muted"><small>10 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost2.jpg" alt="Feature image"> </div>
      </div>

      <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile2.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>Maria</b> reacted to your post</p>
            <p class="text-muted"><small>20 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost1.jpg" alt="Feature image"> </div>
      </div>

      <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile2.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>Maria</b> reacted to your post</p>
            <p class="text-muted"><small>21 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost3.jpg" alt="Feature image"> </div>
      </div>

      <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>Someone</b> reacted to your post</p>
            <p class="text-muted"><small>22 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost3.jpg" alt="Feature image"> </div>
      </div>

      <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>Someone</b> reacted to your post</p>
            <p class="text-muted"><small>22 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost2.jpg" alt="Feature image"> </div>
      </div>

      <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>Someone</b> reacted to your post</p>
            <p class="text-muted"><small>23 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost2.jpg" alt="Feature image"> </div>
      </div>

      <div class="notification-list notification-list">
        <div class="notification-list_content">
          <div class="notification-list_img"> <img src="images/profile.jpg" alt="user"> </div>
          <div class="notification-list_detail">
            <p><b>Someone</b> reacted to your post</p>
            <p class="text-muted"><small>24 mins ago</small></p>
          </div>
        </div>
        <div class="notification-list_feature-img"> <img src="images/mypost1.jpg" alt="Feature image"> </div>
      </div>

  </div>
</div>


</section>



<footer class="footer">
<div>?? 2022 Copyright:
  <a href="#">Unblurred.com</a>
</div>
</footer>
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
