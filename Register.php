
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/style.css?<?php echo time(); ?>">
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
            if (isset($_REQUEST['username'])){
                $id = stripslashes($_REQUEST['id']);//removers slashes 
                $id = mysqli_real_escape_string($conn, $id);//removes any other special characters 
                $username = stripslashes($_REQUEST['username']);//removers slashes 
                $username = mysqli_real_escape_string($conn, $username);//removes any other special characters 
                $email = stripslashes($_REQUEST['email']);
                $email = mysqli_real_escape_string($conn, $email);
                $role = stripslashes($_REQUEST['role']);
                $role = mysqli_real_escape_string($conn, $role);
                $Course = stripslashes($_REQUEST['course']);
                $Course = mysqli_real_escape_string($conn, $Course);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($conn, $password);

                // Performing insert query execution
                $sql = "INSERT INTO users VALUES ('$id','$username','$role','$Course','$email','".md5($password)."') ";//insert fetched data to the users table
                $result = mysqli_query($conn, $sql);

                if ($result){
                    echo" <div class='form-container'>YOU ARE REGISTERED SUCCESSFULLY'<br/>
                    <a href='Login.php'>log in</a>
                    </div>";
                } else {
                    echo " <div class='form-container'>SOMETHING'S MISSING'<br/>
                    <a href='Register.php'>Register</a>
                    </div>".$sql;
                }


            } else {
        ?>
            <div class="form-container">
                <form name="registration" method="POST">
                    <input type="text" placeholder="username" name="username" id="username">
                    <input type="number" placeholder="Student Registration Number" name="id" id="id">
                    <input type="text" placeholder="role" name="role" id="role">
                    <input type="text" placeholder="Course" name="course" id="course">
                    <input type="email" placeholder="email" name="email" id="email">
                    <input type="password" placeholder="password" name="password" id="password">
                    <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword">
                    <input type="submit" value="Sign Up" class="sign" style="width:150px;">
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
    <script src="js/script.js?<?php echo time(); ?>"></script>
</body>
</html>
?>