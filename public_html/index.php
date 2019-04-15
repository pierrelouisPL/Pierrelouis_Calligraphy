<html>

<head>
    <title> Pierre Louis Calligraphy</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Caudex&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="box-main">

        <div id="header">
            <img src="./images/logo1_transparent_crop_small.png" id="logo-main">
            <div id="menu-pc">
                <a href="#" class="menu-pc-item">O mnie</a>
                <a href="gallery.php" class="menu-pc-item">Galeria</a>
                <a href="contact.php" class="menu-pc-item">Kontakt</a>
            </div>
            <!-- mobile version menu icon -->
            <img src="./images/menu.png" onclick="showMenu()" id="menu-mob-button">
            <hr id="main-dividing-line">
        </div>

        <div id="box-content">

            <div id="menu-mob">
                <a href="#" class="menu-mob-item">O mnie</a>
                <a href="gallery.php" class="menu-mob-item">Galeria</a>
                <a href="contact.php" class="menu-mob-item">Kontakt</a>
            </div>

            <hr id="mobile-main-dividing-line">

            <div id="box-text" >
                <img src="./images/bcg.jpg" id="logo-banner-pc">
                <img src="./images/bcg-mobile.jpg" id="logo-banner-mob">

                <p class="text-standard">
                    Zajmuję się kaligrafią tradycyjną i współczesną. Wykorzystując artystyczne pismo
                    wykonuję grafiki i kartki okolicznościowe; tworzę loga i piszę listy. Moje logo i
                    monogramy również są mojego autorstwa. Z moim portfolio zapoznać można się w zakładce
                    "Galeria". Serdecznie zapraszam!
                </p>
            </div>

        </div>

        <!-- footer
        <hr>
        -->

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