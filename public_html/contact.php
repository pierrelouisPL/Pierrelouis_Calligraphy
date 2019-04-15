<html>

<head>
    <title> Pierre Louis Calligraphy</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <link rel="stylesheet" type="text/css" href="contact.css"/>
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="box-main">

        <div id="header">
            <img src="./images/logo1_transparent_crop_small.png" id="logo-main">
            <div id="menu-pc">
                <a href="index.php" class="menu-pc-item">O mnie</a>
                <a href="./gallery.php" class="menu-pc-item">Galeria</a>
                <a href="#" class="menu-pc-item">Kontakt</a>
            </div>
            <!-- mobile version menu icon -->
            <img src="./images/menu.png" onclick="showMenu()" id="menu-mob-button">
            <hr id="main-dividing-line">
        </div>

        <div id="box-content">

            <div id="menu-mob">
                <a href="index.php" class="menu-mob-item">O mnie</a>
                <a href="./gallery.php" class="menu-mob-item">Galeria</a>
                <a href="#" class="menu-mob-item">Kontakt</a>
            </div>

            <hr id="mobile-main-dividing-line">

            <p class="text-standard">
                <a href="https://www.facebook.com/pierrelouiscalligraphy/" class="social-media-link">
                    <img src="./images/fb-logo.png" class="social-media-icon">
                    facebook page
                </a>
            </p>
        </div>



    </div>

<!-- SCRIPT FOR DISPLAYING THE MOBILE MENU -->
<script>
    function showMenu() {
        var x = document.getElementById("menu-mob");
        if (x.style.display === "none") {
            x.style.display = "block";
            //menu appears in box content, so we need to scroll up to display it properly
            document.getElementById('box-content').scrollTo(0, 0);
        } else {
            x.style.display = "none";
        }



        /* it is a terrible workaround;
         * TODO: mobile layout & scrolling PROPERLY
         */
    }
</script>

</body>

</html>