<?php
include('../variables.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../css/style.css?<?php echo time();?>">
</head>
<body>
    <div class="container">
        <section id="HeaderContainer">
            <div class="header-container fixed" style="margin-bottom:70px;">
                <div class="title"><h1 class="mb-4">Live Summary</h1></div>
                <div class="title-buttons">
                    <a href="/Read"><button>Reader</button></a>
                    <a href="/Write"><button>Writer</button></a>
                    <a href="/Benefits"><button>Benefits</button></a>
                    <a href="/Contact"><button>Contact us</button></a>
                    <a href="/SignIn"><button class="sign"><?php echo $Naming; ?></button></a>
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
                    <button>Reader</button>
                </div>
                <div class="side-nav-btn">
                    <button>Writer</button>
                </div>
                <div class="side-nav-btn">
                    <button>Benefits</button>
                </div>
                <div class="side-nav-btn">
                    <button>Contact</button>
                </div>
                <div class="side-nav-btn">
                    <button><?php echo $Naming; ?></button>
                </div>
            </div>
        </section>
        <?php
            $mysqli = new mysqli("localhost", "root", "", "LiveSummaryDb");
              // Check connection
             if($mysqli === false){
                 die("ERROR: Could not connect. " 
                     . mysqli_connect_error());
             }
             $sql = "SELECT * FROM units";
             $result = $mysqli->query($sql);
             $mysqli->close();

        ?>
        <section id="BodyContainer">
            <div class="body-con" style="margin-top:70px;">    
                <?php
                while($rows=$result->fetch_assoc()){
                ?>   
                    <div class="card mt-4">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $rows['unit_id'];?></h3> <br/>
                            <h4 class="card-title"><?php echo $rows['unit_name'];?></h4> 
                            <h4 class="card-title"><?php echo $rows['course_name'];?></h4> 
                            <div class="card-subtitle text-muted mb-2"> <?php echo $rows['created_at'];?></div>
                            <div class="btn-container">
                                <button class="read"><a href="Articles.php?id=<?php echo $rows['unit_name'];?>" class="btn btn-primary">Read full article</a></button>
                                <!--<button class="edit"><a href="/articles/edit/<%= article.id %>" class="btn btn-secondary">Edit</a></button>
                                <form action="/articles/<%= article.id %>?_method=DELETE" method="POST" class="d-inline">
                                    <button type="submit" class="btn btn-danger delete">DELETE</button>
                                </form> -->
                            </div>
                        </div>      
                    </div>
                <?php
                    }
                ?>
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
    <script src="../js/script.js?<?php echo time(); ?>"></script>
</body>
</html>
