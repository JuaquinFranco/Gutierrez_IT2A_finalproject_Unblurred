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
<title>Friends (@johndegayo)</title>
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
        <div class="text">Friends</div>

        <div class="profile-container">
            <div class="profile-details">
                <div class="pd-left">
                    <div class="pd-row">
            <img src="images/profile1.jpg" class="dp-img" alt="">
            <div>
            <h3 class="mt-0 mb-0" ><?php echo 'John Degayo' ?> </h3>
            <p>6 Friends</p>
                <div class="friends-img">
            <img src="images/profile1.jpg" alt="">
            <img src="images/profile2.jpg" alt="">
            <img src="images/profile3.jpg" alt="">
            <img src="images/profile4.jpg" alt="">
            <i class='bx bx-dots-horizontal-rounded icon' ></i>
                </div>
            </div>
            </div>
            
        </div>
        <div class="pd-right">
                <button type="button"><i class='bx bx-edit-alt icon ' ></i>Unfollow</button>
            </div>
        </div>
            <div class="about-section">
                <div class="bio">
                    <h1>About Me</h1>
                      <p>Hi, My name is John, and I live in <?php echo $_SESSION['ses_address']; ?>.</p>
                </div>
            </div>

            <div class="social-media">
                <div class="socmed">
                    <h1>Other Social Media Accounts</h1>   
            </div>

        <div class="wrapper">

                <div class="icon facebook">
                    <div class="tooltip">
                        Facebook
                    </div>
                    <span><i class="bx bxl-facebook icon"></i></span>
                </div>

                <div class="icon twitter">
                    <div class="tooltip">
                        Twitter
                    </div>
                    <span><i class="bx bxl-twitter icon"></i></span>
                </div>

                <div class="icon instagram">
                    <div class="tooltip">
                        Instagram
                    </div>
                    <span><i class="bx bxl-instagram icon"></i></span>
                </div>
        </div>

        </div>

            <div class="my-post">
                <h1>Posts</h1>
            </div>
            <div class="my-feed">
            <div class="post-box">
            <img src="images/post1.jpg" alt="">

            <div class="post-info">
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>7.2k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>25</span>
            </div>
            </div>
        </div>
            
            <div class="post-box">
            <img src="images/mypost2.jpg" alt="">

            <div class="post-info">
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>5.3k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>73</span>
            </div>
            </div>
        </div>

        <div class="post-box">
            <img src="images/mypost3.jpg" alt="">

            <div class="post-info">
                <div class="likes">
                    <i class='bx bx-heart icon' ></i>
                    <span>5k</span>
                    <i class='bx bx-message-dots icon' ></i>
                    <span>13</span>
            </div>
            </div>
        </div>



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
