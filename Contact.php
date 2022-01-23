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
        <section id="Desc-Container">
            <div class="desc-container">
                <h1 class="text" style="color:rgb(155,155,250)">Get started with study</h1>
                <h2 id="text"></h2>
            </div>
        </section>
        <section class="selector">
            <div class="selector">
                <div class="image-container">
                    <img src="./img/calendar.png" alt="">
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
    <script>
        window.addEventListener('scroll', 
        function(){
            var tophead = document.querySelector('.header-container');
            tophead.classList.toggle('fixed', window.scrollY > 100);
        })
        var i =0, text;
        text = "Come and connect, learn, and grow with the Live Summary student community on Campus"
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