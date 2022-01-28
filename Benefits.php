<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/style.css?<?php echo time();?>">
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
        <section class="btn-swapping">
            <div class="btn-swap">
                <button class="sign" id="activate" >More</button>
            </div>
        </section>
        <section class="SideNav">
            <div class="side-navo">
                <div class="block"><button id="closero" style="color:#fff; font-weight: bold; text-transform: uppercase;">Close</button></div>
                <div class="block">Tables : <a href="./Tables/Users.php"><button>Users</button></a> <a href="./Tables/Articles.php"> <button>Articles</button></a><a href="./Tables/Courses"> <button>Courses</button></a><a href="./Tables/Units.php"><button>Units</button></a></div>
                <div class="block">Units : <a href="./Units/UnitList.php"><button>All Units</button></a> <a href="./Units/CreateUnit.php"> <button>Create Unit</button></a></div>
                <div class="block">Articles : <a href="./Articles/ArticleList.php"><button>All Articles</button></a> <a href="./Articles/CreateArticle.php"> <button>Write Article</button> </a></div>
                <div class="block">Courses : <a href="./Courses/CourseList.php"><button>All Courses</button></a> <a href="./Courses/CreateCourse.php"> <button>Create Course</button></a></div>
                <div class="block">Reports : <a href="./Reports/Readers.php"><button>Readers</button></a> <a href="./Reports/Writers.php"> <button>Writers</button></a></div>
            </div>
        </section>
        <section class="Difference">
            <div class="difference">
                <div class="difference-container">
                    <h2> Join our vast writer community</h2>

                    <h5>Get the best developer tools</h5>

                       <h4> There’s no substitute for hands-on experience, but for most students, real-world tools can be cost prohibitive. That’s why we created the Pack with some of our partners and friends.</h4>

                       <a href=""><h2>Become a writer</h2></a>
                </div>
                <div class="difference-container">
                    <h2>Join our active reader community</h2>
                    <h5>Get the best developer tools</h5>

                    <h4> Build a tech community at your school with training and support from GitHub. Campus Experts learn public speaking, technical writing, community leadership, and software development skills that will help you improve your campus.</h4>
                    <a href=""><h2>Become a Reader </h2></a>
                </div>
            </div>
        </section>
        <section class="selector">
            <div class="selector">
                <div class="image-container">
                    <img src="./img/sample2.svg" alt="">
                </div>
                <div class="text-container">
                    <h2>Get email notifications for important dates</h2><br/><br/><br/>
                    <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, architecto. Voluptate nam neque quo in laboriosam ipsa temporibus laborum veritatis reprehenderit? Hic officiis mollitia inventore modi fugit fugiat, eius soluta!</h4><br/><br/>
                    <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, architecto. Voluptate nam neque quo in laboriosam ipsa temporibus laborum veritatis reprehenderit? Hic officiis mollitia inventore modi fugit fugiat, eius soluta!</h4><br/><br/>
                    <h3><a href="">Join the mailing list</a></h3>
                </div>
            </div>
        </section>
        <section class="FooterContainer">
            <div class="footer-container">
                <div class="footer-title">
                    <h2>Live Summary</h2>
                </div>
                <div class="footer-sub">
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
                        Atom<br><br>
                        Electron<br><br>
                        Desktop app<br><br>
                        Mobile app<br><br>
                    </div>
                    <div class="footer-sub-sub">
                        <b>Support</b> <br> <br><br>

                        Docs <br><br>
                        Community Forum <br><br>
                        Proffesuional Services<br><br>
                        Learning Lab<br><br>
                        Status<br><br>
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
        </section>
   
     <!--   <a href="/articles/new" class="btn btn-success">New Article</a>-->
    </div>
    <script src="js/script.js?<?php echo time(); ?>"></script>
</body>
</html>