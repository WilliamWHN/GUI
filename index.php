<header>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</header>

<body>
    <div class="navbar">
        <div class="navitem"><a href="#" data-target="home"></a><img class="navimg" src="content/images/castle.png">
        </div>
        <div class="navitem"><a href="#" data-target="myquests"></a><img class="navimg" src="content/images/quest.png">
        </div>
        <div class="navitem"><a href="#" data-target="quests"></a><img class="navimg"
                src="content/images/encyclopedia.png"></div>
        <div class="navitem loginitem"><a href="#" data-target="login"></a><img class="navimg"
                src="content/images/knight.png"></div>
    </div>
    <div class="content">
        <div class="append">
            <?php include('./view/home.php');?>
        </div>
        <footer class="footer-distributed">

            <div class="footer-right">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

            <div class="footer-left">

                <p class="footer-links">
                    <a class="link-1" href="#">Home</a>

                    <a href="#">Blog</a>

                    <a href="#">Pricing</a>

                    <a href="#">About</a>

                    <a href="#">Faq</a>

                    <a href="#">Contact</a>
                </p>

                <p>Company Name &copy; 2015</p>
            </div>
        </footer>
    </div>
</body>

<footer>
    <script src="navlinks.js"></script>
</footer>

</html>