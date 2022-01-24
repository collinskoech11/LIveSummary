<?php
    session_start();
    include('../variables.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* .form-container{
            width:100%;
            height:auto;
            padding:50px;
        }
        @media screen and (max-width:1000px){
            .form-container{
                padding:20px;
            }
        }
        .form-container form{
            width:100%;
        }
        .form-container form input{
            width:100%;
            margin-bottom:40px;
            height:50px;
            background-color:rgb(0,0,10);
            border: 3px solid rgb(155,155,250);
            border-radius:5px;
            padding-left:13px;
            color:#fff;

        }
        .form-container form textarea{
            width:100%;
            height:500px;
            background-color:rgb(0,0,10);
            border: 3px solid rgb(155,155,250);
            border-radius:5px;
            padding:13px;
            color:#fff;
        } */
    </style>
</head>
<body>
    <div class="container">
        <section id="HeaderContainer">
            <div class="header-container">
                <div class="title"><h1 class="mb-4">Live Summary</h1></div>
                <div class="title-buttons">
                    <a href="/Read"><button>Reader</button></a>
                    <a href="/Write"><button>Writer</button></a>
                    <a href="/Benefits"><button>Benefits</button></a>
                    <a href="/Contact"><button>Contact us</button></a>
                    <a href="#"><button class="sign"><?php echo $Naming;?></button></a>
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
                    <div class="close-btn" id="closer"><img src="../img/close.png" alt=""></div>
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
                    <button>Sign in</button>
                </div>
            </div>
        </section>
        <section class="contentForm">
        <?php
            include("../Database/db.php");
            if (isset($_REQUEST['unit_id'])){
                $unit_id = $_REQUEST['unit_id'];
                $unit_name = $_REQUEST['unit_name'];
                $course_name = $_REQUEST['course_name'];
                $faculty = $_REQUEST['faculty'];
               

                $sql = "INSERT INTO units VALUES ('$unit_id','$unit_name','$course_name','$faculty')";
                $result = mysqli_query($conn, $sql);

                if ($result){
                    echo " <div class='form-container'> SUCCESSFULLY SAVED THE DATA'<br/>
                    <a href='../Dashboard/index.php'>log in</a>
                    </div>";
                } else {
                    echo " <div class='form-container' style='backgound-color:rgb(0,0,10);'>SOMETHING'S MISSING'<br/>
                    <a href='Create.php'>Write again</a>
                    </div>".$sql;
                }
            } else {
            ?>
            <div class="form-container" style="margin-top:50px;">
                <form name="Create_Article" method="POST">
                    <input type="text" name="unit_id" id="unit_id" placeholder="Unit id">
                    <input type="text" name="unit_name" id="unit_name" placeholder="Unit Name">
                    <input type="text" placeholder="Course Name" name="course_name" id="course_name">
                    <input type="text" placeholder="Faculty" name="faculty" id="faculty">
                    <input type="submit" value="Submit" class="sign" style="width:150px; margin-top:30px;">
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