<?php
    include("../Database/db.php");
    include("../Login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../css/style.css">
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
                    <a href="/SignIn"><button class="sign">Sign in</button></a>
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
                    <button>Sign in</button>
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