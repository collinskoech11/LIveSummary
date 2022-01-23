<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <section id="HeaderContainer">
            <div class="header-container">
                <div class="title"><h1 class="mb-4">Live Summary</h1></div>
                <div class="title-buttons">
                    <a href="Articles/ArticleList.php"><button>Reader</button></a>
                    <a href="Articles/ArticleList.php"><button>Writer</button></a>
                    <a href="Benefits.php"><button>Benefits</button></a>
                    <a href="Contact.php"><button>Contact us</button></a>
                    <a href="Login.php"><button class="sign">Sign in</button></a>
                </div>
                <div class="title-nav-btn" id="navigate">
                    <div class="nav-line"></div>   
                    <div class="nav-line"></div>  
                    <div class="nav-line"></div>           
                </div>
            </div>
        </section>
        <section class="SideNav">
            <div class="side-nav">
                <div class="side-nav-close">
                    <div class="close-btn" id="closer"><img src="./img/close.png" alt=""></div>
                </div>
                <div class="side-nav-btn">
                    <a href="Articles/ArticleList.php"><button>Reader</button></a>
                </div>
                <div class="side-nav-btn">
                    <a href="Articles/ArticleList.php"><button>Writer</button></a>
                </div>
                <div class="side-nav-btn">
                    <a href="Benefits.php"><button>Benefits</button></a>
                </div>
                <div class="side-nav-btn">
                    <a href="Contact.php"><button>Contact</button></a>
                </div>
                <div class="side-nav-btn">
                    <a href="Login.php"><button>Sign in</button></a>
                </div>
            </div>
        </section>
        <section class="contentForm">
        <?php
            include('./Database/db.php');
            session_start();
            if (isset($_REQUEST['username'])){
                $username = stripslashes($_REQUEST['username']);//removers slashes 
                $username = mysqli_real_escape_string($conn, $username);//removes any other special characters 
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($conn, $password);

                // Performing insert query execution
                $sql = "SELECT * FROM `users`  WHERE username='$username' AND password='".md5($password)."'";//check in db if the provided username and password exsts in the user table
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_num_rows($result);//convert it to row data 


                $role = $sql['role'];// set role as $role for use in dashboard as a variable
                $EmailOne = $sql['email'];// sets email variable for dashboard
                $Course = $sql['Course'];// set role as $role for use in dashboard as a variable
                if ($rows == 1) {
                    $_SESSION['username'] = $username;//if username is valid 
                    $_SESSION['role'] = $role;
                    $_SESSION['email'] = $EmailOne;
                    header("Location:./Articles/ArticleList.php");
                } else {
                    echo " <div class='form-container'>Invalid Username or password'<br/>
                    <a href='Login.php'>Register</a>
                    </div>";
            } 
        } else {
        ?>
            <div class="form-container">
                <form name="registration" method="POST">
                    <input type="text" placeholder="username" name="username" id="username">
                    <input type="password" placeholder="password" name="password" id="password">
                    <input type="submit" value="Sign In" class="sign" style="width:150px;">
                </form>
            </div>
        <?php
            }
        ?>
        </section>
        <section class="FooterContainer">
            <div class="footer-container">
                <div class="footer-title">
                    <h2>Live Summary</h2>
                </div>
                <div class="footer-sub">
                    <div class="footer-sub-align">
                        <div class="footer-sub-sub">
                            <b>Product </b><br> <br><br>

                            Features <br><br>
                            Security <br><br>
                            Business<br><br>
                            Case studies<br><br>
                            Pricing<br><br>
                            Resources<br><br>
                        </div>
                        <div class="footer-sub-sub">
                            <b>Explore</b> <br> <br><br>

                            Developer API <br><br>
                            Partners <br><br>
                            Electron<br><br>
                            Desktop app<br><br>
                            Mobile app<br><br>
                        </div>
                    </div>
                    <div class="footer-sub-align">
                        <div class="footer-sub-sub">
                            <b>Support</b> <br> <br><br>

                            Docs <br><br>
                            Community Forum <br><br>
                            Proffesuional Services<br><br>
                            Learning Lab<br><br>
                            Contact us<br><br>
                        </div>
                        <div class="footer-sub-sub">
                            <b>Company</b> <br> <br><br>

                            About <br><br>
                            Blog <br><br>
                            Careers<br><br>
                            Press<br><br>
                            Social Impact<br><br>
                            Shop<br><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     <!--   <a href="/articles/new" class="btn btn-success">New Article</a>-->
    </div>
    <script>
        window.addEventListener('scroll', 
        function(){
            var tophead = document.querySelector('.header-container');
            tophead.classList.toggle('fixed', window.scrollY >= 100);
        });
        document.getElementById("navigate").addEventListener('click',
            function(){
                var thenav = document.querySelector(".side-nav");
                thenav.classList.toggle('appear')
            })
            document.getElementById("closer").addEventListener('click',
            function(){
                var thenav = document.querySelector(".side-nav");
                thenav.classList.remove('appear')
            
            })
        var i =0, text;
        text = " and events they need to shape the next generation of software development."
        function typing(){
          
                if(i<text.length){
                    document.getElementById('text').innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing,200); 
                }
             
        }
        typing();
        console.log('hello')
    </script>
</body>
</html>
?>