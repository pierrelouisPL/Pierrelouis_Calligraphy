<html>

<head>
    <title> Pierre Louis Calligraphy</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <link rel="stylesheet" type="text/css" href="gallery.css"/>
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
                <a href="./contact.php" class="menu-pc-item">Kontakt</a>
            </div>
            <!-- mobile version menu icon -->
            <img src="./images/menu.png" onclick="showMenu()" id="menu-mob-button">
            <hr id="main-dividing-line">
        </div>

        <div id="box-content">

            <div id="menu-mob">
                <a href="index.php" class="menu-mob-item">O mnie</a>
                <a href="#" class="menu-mob-item">Galeria</a>
                <a href="./contact.php" class="menu-mob-item">Kontakt</a>
            </div>

            <hr id="mobile-main-dividing-line">

            <div id="box-gallery">
                <div class="box-photo">
                    <a href="./gallery/karteczka_walentynkowa_mini.jpg" class="gallery-linkbox">
                        <img src="./gallery/icons/karteczka_walentynkowa_mini_icon.jpg" alt="test" class="gallery-img">
                    </a>
                </div>
                <div class="box-photo">
                    <a href="./gallery/majuskula_z_domkiem.jpg" class="gallery-linkbox">
                        <img src="./gallery/icons/majuskula_z_domkiem_icon.jpg" class="gallery-img">
                    </a>
                </div>
                <div class="box-photo">
                    <a href="./gallery/majuskula_zlota_1.jpg" class="gallery-linkbox">
                        <img src="./gallery/majuskula_zlota_1.jpg" class="gallery-img">
                    </a>
                </div>
                <div class="box-photo">
                    <a href="./gallery/IMG_20180720_110406.jpg" class="gallery-linkbox">
                        <img src="./gallery/icons/IMG_20180720_110406_icon.jpg" class="gallery-img">
                    </a>
                </div>
                <div class="box-photo">
                    <a href="/gallery/IMG_20180720_123653.jpg" class="gallery-linkbox">
                        <img src="./gallery/icons/IMG_20180720_123653_icon.jpg" class="gallery-img">
                    </a>
                </div>
            </div>


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