<header>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="script.js"></script>
</header>

<body class="background">
    <div class="navbar">
        <div class="navitem"><a href="#" data-target="home"></a><img class="navimg" src="content/images/castle.png"></div>
        <div class="navitem"><a href="#" data-target="quests"></a><img class="navimg" src="content/images/quest.png"></div>
        <div class="navitem"><a href="#" data-target="myquests"></a><img class="navimg" src="content/images/encyclopedia.png"></div>
        <div class="navitem loginitem" data-target="login"><a href="#"></a><img class="navimg" src="content/images/knight.png"></div>
    </div>
    <div class="content">
        <?php include('./view/home.php');?>
    </div>
</body>

<footer>
    <script src="navlinks.js"></script>
</footer>
</html>