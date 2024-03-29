<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/style.css?<?php echo time(); ?>">
    <style>
       
    </style>
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
                    <?php if($Naming){ ?><a href="Login.php"><button class="sign"><?php echo $Naming ?></button></a><?php } else {  ?><button class="sign">Sign In</button><?php } ?>
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
        <section id="Desc-Container">
            <div class="desc-container">
                <h1>Where <i><span>Students</span></i><br/> meet <span style="color:rgb(155,155,250)">academic</span> excellence.</h1>
                <h2>Live Summary helps students, teachers, and schools access  the tools</h2>
                <h2 id="text"></h2>
                <button>Join our Global Campus</button>
            </div>
            <div class="desc-container">
                <h1 class="text" style="color:rgb(155,155,250)">We've got you covered</h1>
                <h2 class="typing">Live Summary helps students, teachers, and schools access the tools<br/> and events they need to shape the next generation of proffesional study.</h2>
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

                    <h4> Build a study community at your school with support from Live Summary. Campus Experts learn technical writing skills that will help you improve your campus.</h4>
                    <a href=""><h2>Become a Reader </h2></a>
                </div>
            </div>
        </section>
        <section id="Desc-Container">
            <div class="desc-container">
                <h1 class="text" style="color:rgb(155,155,250)">Get a glimpse of what to expect.</h1>
                <h2>Come and connect, learn, and grow with the Live Summary student community on Campus.</h2>
            </div>
        </section>
        <?php
            $mysqli = new mysqli("localhost", "root", "", "LiveSummaryDb");
              // Check connection
             if($mysqli === false){
                 die("ERROR: Could not connect. " 
                     . mysqli_connect_error());
             }
             $sql = "SELECT * FROM articles";
             $result = $mysqli->query($sql);
             $mysqli->close();
        ?>
        <section id="BodyContainer">
            <div class="body-con">    
                <?php
                $x = 1;
                while($rows=$result->fetch_assoc()){ 
                    $x++;
                    if($x<4){
                ?>   
                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $rows['article_title'];?></h4> 
                            <div class="card-subtitle text-muted mb-2"> <?php echo $rows['created_at'];?></div>
                            <div class="card-text mb-2"> <?php echo $rows['username'];?></div>
                            <div class="btn-container">
                                <button class="read"><a href="articles/<%= article.slug %>" class="btn btn-primary">Read </a></button>
                                <!--<button class="edit"><a href="/articles/edit/<%= article.id %>" class="btn btn-secondary">Edit</a></button>
                                <form action="/articles/<%= article.id %>?_method=DELETE" method="POST" class="d-inline">
                                    <button type="submit" class="btn btn-danger delete">DELETE</button>
                                </form> -->
                            </div>
                        </div>      
                    </div>
                <?php
                    }
                   }
                ?>
            </div>
        </section>
        <section id="Desc-Container">
            <div class="desc-container">
                <h1 class="text" style="color:rgb(155,155,250)">Some additional features</h1>
                <h2>Come and connect, learn, and grow with the Live Summary student community on Campus</h2>
            </div>
        </section>
        <section class="Difference">
            <div class="difference">
                <div class="difference-container">
                    <h2>Review due dates for your assignments</h2>

                    <h5>Get the best developer tools</h5>

                       <h4> There’s no substitute for hands-on experience, but for most students, real-world tools can be cost prohibitive. That’s why we created the Pack with some of our partners and friends.</h4>

                       <a href=""><h2>View upcoming assignments</h2></a>
                </div>
                <div class="difference-container">
                    <h2>Re-live the classroom experience virtually</h2>
                    <h5>Get the best developer tools</h5>

                    <h4> Build a tech community at your school with training and support from GitHub. Campus Experts learn public speaking, technical writing, community leadership, and software development skills that will help you improve your campus.</h4>
                    <a href=""><h2>Become a Reader </h2></a>
                </div>
            </div>
        </section>
        <section class="selector">
            <div class="selector">
                <div class="image-container">
                    <img src="./img/sample.svg" alt="">
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
    <script src=<?php echo '"./js/script.js?' . rand() .'"'; ?>>
   
    </script>
</body>
</html>
